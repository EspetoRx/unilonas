<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'WellcomeController@index');

// Posts
Route::get('/blog', 'PostController@index')->name('home');
Route::resource('posts', 'PostController')->except(['create', 'edit']);

// Posts that belongs in a category
Route::get('/posts/category/{category}', 'CategoryController@show')->name('categories.show');

// Posts that have a tag
Route::get('/posts/tag/{tag}', 'TagController@show')->name('tags.show');

// Comments
Route::post('posts/{post}/comments', 'CommentController@store')->name('comments.store');

// Users
Route::get('users/{user}', 'UserController@show')->name('users.show');
Route::get('users/{user}/posts', 'UserProfileController@posts')->name('users.posts');
Route::get('users/{user}/comments', 'UserProfileController@comments')->name('users.comments');

// Dashboard
Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' => 'auth'
], function () {

    // Dashboard
    Route::get('/', 'DashboardController@index')->name('index');

    // Posts
    Route::middleware(['permission:gerenciar publicações'])->group(function() {
        // Published, drafted and trashed posts
        Route::get('posts', 'DashboardController@posts')->name('posts.index');
        Route::get('posts/draft', 'DashboardController@draftedPosts')->name('posts.draft');
        Route::get('posts/trash', 'DashboardController@trashedPosts')->name('posts.trash');

        Route::get('posts/create', 'PostController@create')->name('posts.create');
        Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');

        Route::patch('posts/trash/{trashed_post}', 'PostController@restore')->name('posts.restore');
        Route::delete('posts/trash/{post}', 'PostController@destroy')->name('posts.destroy');
        Route::delete('posts/trash/delete/{trashed_post}', 'PostController@forceDelete')->name('posts.forceDelete');
        Route::delete('posts/trash', 'PostController@forceDeleteAll')->name('posts.forceDeleteAll');

        // Categories
        Route::resource('categories', 'CategoryController')->except('show');

        // Tags
        Route::resource('tags', 'TagController')->except('show');

        // Comments
        Route::get('comments', 'CommentController@index')->name('comments.index');
        Route::delete('/comments/{comment}', 'CommentController@destroy')->name('comments.destroy');
    });

    // Users
    Route::group(['middleware' => ['permission:gerenciar usuários']], function () {
        Route::resource('users', 'UserController')->except('show');
    });

    // Roles
    Route::group(['middleware' => ['permission:gerenciar roles']], function () {
        Route::resource('roles', 'RoleController');
    });

    // Permissions
    Route::group(['middleware' => ['permission:gerenciar permissões']], function () {
        Route::resource('permissions', 'PermissionController')->except('show');
    });
});
