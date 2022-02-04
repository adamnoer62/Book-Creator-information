<?php

use App\Http\Controllers\BooksUsersController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku.index');
Route::resource('buku',BukuController::class);
Route::resource('User',UserController::class);
Route::get('password', [PasswordController::class, 'edit'])->name('password.edit');
Route::patch('password', [PasswordController::class, 'update'])->name('password.update');
Route::get('/booksuser', [App\Http\Controllers\BooksUsersController::class, 'index'])->name('booksuser.index');
});
