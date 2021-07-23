<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // if you don’t put with() here, you will have N+1 query performance problem
    $posts = Post::with('category', 'tags')->take(3)->latest()->get();

    return view('pages.home', compact('posts'));
})->name('home');

Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('post/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::view('about', 'pages.about')->name('about');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('tags', App\Http\Controllers\Admin\TagController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
});

Auth::routes();