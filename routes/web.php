<?php

use App\Http\Controllers\Dashbord\dashbordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Questions\questionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route::get('/posts/showall', [PostController::class, 'showall'])->name('post.showall');



Route::prefix('posts')->group(function () {
    Route::get('/showall', [PostController::class, 'showall'])->name('post.showall');
    Route::post('/', [PostController::class, 'store'])->name('post.store');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::get('/{id}', [PostController::class, 'showById'])->name('post.showById');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('post.delete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
