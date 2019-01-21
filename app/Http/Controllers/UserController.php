<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;
use Validator;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.users.index', compact('armazenamento'), [
            'users' => User::with(['posts', 'roles'])->withCount('posts')->latest()->paginate(10),
            'roles' => Role::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get(['name']);
        return view('dashboard.users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed',
            'roles' => 'required|exists:roles,name'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $roles = Role::whereIn('name', $request->input('roles'))->get(['id']);
        $user->roles()->attach($roles);

        return redirect()->route('dashboard.users.index')->with('success', 'Usuário criado.');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $armazenamento = Storage::disk('gcs');
        return view('users.show', compact('armazenamento'), [
            'user' => User::withCount(['comments', 'posts'])->findOrFail($user->id),
            'latestPosts' => $user->posts()->latest()->paginate(5),
            'latestComments' => $user->comments()->latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.users.edit', compact('armazenamento'), [
            'user' => User::with('roles')->findOrFail($user->id),
            'roles' => Role::get(['name'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

    // The edit user page contains 2 forms: one for changing user details
    // and one for changing user password. Validate the inputs dependings
    // on which form has been submitted.
        if ($request->has('change_details')) {
            
            $detailsValidator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|' . Rule::unique('users')->ignore($user->id),
                'avatar' => 'sometimes|required|image|dimensions:max_width=2500,max_height=2500|max:2048',
                'roles' => 'required|array|exists:roles,name'
            ]);
            
            if ($detailsValidator->fails()) {
                return redirect()->back()->withErrors($detailsValidator, 'details')->withInput();
            }
            
            if ($user->avatar && $request->has('removed')) {
                $user->update(['avatar' => User::DEFAULT_AVATAR]);
                $user->save();
            }

            if ($request->hasFile('avatar')) {
                $request->file('avatar')->store('public/avatars');

                // Generate a random name for every file
                $avatar = $request->file('avatar')->hashName();
                $user->update(['avatar' => $avatar]);
            } elseif ($request->has('avatar_removed')) {
                // Remove avatar if user clicks on 'remove image'
                $user->update(['avatar' => User::DEFAULT_AVATAR]);
            }

            $user->update($request->except('avatar'));

            $roles = Role::whereIn('name', $request->input('roles'))->get(['id']);
            $user->roles()->sync($roles);
        }

        if ($request->has('change_password')) {

            $passwordValidator = Validator::make($request->all(), [
                'password' => 'required|confirmed'
            ]);

            if ($passwordValidator->fails()) {
                return redirect()->back()->withErrors($passwordValidator, 'password')->withInput();
            }

            $user->update($request->all());
        }

        return redirect()->back()->with('success', 'Conta atualizada.');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Usuário excluído.');
    }

}
