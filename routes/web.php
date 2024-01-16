<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/users', [UserController::class, 'index'])->name('user.list');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
// Route::get('/delete', [UserController::class, 'delete'])->name('user.delete');

// Route::get('/dashboard', function () {
//     return view('index');
// });

// Route::get('/setting', function () {
//     return view('account/setting');
// });
