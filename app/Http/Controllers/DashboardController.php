<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Post;
use App\Comment;
use App\Category;
use App\Tag;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{

    /**
     * Display the main dashboard page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.index', compact('armazenamento'), [
          'posts' => Post::with('user')->latest()->take(5)->get(),
          'comments' => Comment::with(['user', 'post'])->latest()->take(5)->get(),
          'users_count' => User::count(),
          'posts_count' => Post::count(),
          'comments_count' => Comment::count()
      ]);
    }

    /**
     * Display the posts page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.posts.index', compact('armazenamento'), [
          'posts' => Post::onlyPublished()->with(['user:id,name', 'categories:slug,name', 'tags:slug,name', 'comments'])->withCount('comments')->latest()->paginate(10),
          'draftedCount' => Post::onlyDrafted()->count(),
          'trashCount' => Post::onlyTrashed()->count()
      ]);
    }

    /**
     * Display the drafted posts.
     * 
     * @return \Illuminate\Http\Response
     */
    public function draftedPosts()
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.posts.draft', compact('armazenamento'), [
          'posts' => Post::onlyDrafted()->latest()->paginate(10),
          'publishedCount' => Post::onlyPublished()->count(),
          'draftedCount' => Post::onlyDrafted()->count(),
          'trashCount' => Post::onlyTrashed()->count()
      ]);
    }

    /**
     * Display the trashed posts.
     * 
     * @return \Illuminate\Http\Response
     */
    public function trashedPosts()
    {
        $armazenamento = Storage::disk('gcs');
        return view('dashboard.posts.trash', compact('armazenamento'), [
          'trashPosts' => Post::onlyTrashed()->latest()->paginate(5),
          'publishedCount' => Post::onlyPublished()->count(),
          'draftedCount' => Post::onlyDrafted()->count(),
          'trashCount' => Post::onlyTrashed()->count()
      ]);
    }

}
