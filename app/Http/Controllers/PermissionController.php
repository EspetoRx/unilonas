<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.permissions.index', compact('armazenamento'), [
          'permissions' => Permission::orderBy('id', 'desc')->paginate(10),
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|string|max:100'
      ]);

        $permission = Permission::create([
          'name' => $request->input('name'),
          'guard_name' => 'web'
      ]);

        return redirect()->route('dashboard.permissions.index')->with('success', 'Permissão criada.');
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \Spatie\Permission\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.permissions.edit', compact('armazenamento'), [
          'permission' => $permission,
      ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request $request
     * @param  \Spatie\Permission\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100'
        ]);
        $permission->update($request);

        return redirect()->back()->with('success', 'Permissão atualizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Spatie\Permission\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->back()->with('success', 'Permissão excluída.');
    }
}
