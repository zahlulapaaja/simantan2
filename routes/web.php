<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataTableController;
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

// Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login.proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//permission dengan laravel gate
// Route::group(['name' => 'admin.', 'middleware' => ['auth', 'can:view_dashboard']], function () { // => bisa kayak gini
// Route::group(['name' => 'admin.', 'middleware' => ['auth', 'permission:view_dashboard']], function () { // => bisa kayak gini
// Route::group(['name' => 'admin.', 'middleware' => ['auth', 'role:admin|writer']], function () { // => bisa kayak gini
Route::group(['name' => 'admin.', 'middleware' => ['auth']], function () {
    // Route::get('/', [HomeController::class, 'index'])->name('dashboard')->middleware('can:view_dashboard'); //bisa juga kayak gini
    // Route::get('/', [HomeController::class, 'index'])->name('dashboard')->middleware('permission:view_dashboard'); //dan bisa kayak gini
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('user.list');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('user.detail');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/clientside', [DataTableController::class, 'clientside'])->name('clientside');
    Route::get('/serverside', [DataTableController::class, 'serverside'])->name('serverside');
});

Route::get('/enkripsi', [BelajarController::class, 'enkripsi'])->name('enkripsi');
Route::get('/enkripsi-detail/{params}', [BelajarController::class, 'enkripsi_detail'])->name('enkripsi-detail');

Route::get('locale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');
