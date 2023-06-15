<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add-blog', [BlogController::class, 'addBlogPage'])->name('add-blog');
    Route::post('/new-blog', [BlogController::class, 'create'])->name('new-blog');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage-blog');
    Route::get('/update-blog/{id}', [BlogController::class, 'updateBlogPage'])->name('update-blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update-blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('delete-blog');
});
