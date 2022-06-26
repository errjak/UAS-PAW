<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuruController;

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

//Route Depan
Route::get('/', 'App\Http\Controllers\AuthController@login')->name('login');

//Route Authorization
Route::post('postlogin', 'App\Http\Controllers\AuthController@postlogin')->name('postlogin');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//Route Authentication -> admin || user || guru
// Route::group(['middleware' => 'auth'], function () {
//     Route::group(['middleware' => 'logincheck:admin'], function () {
//         Route::get('admin', 'App\Http\Controllers\AdminController@admin')->name('admin');
//     });
//     Route::group(['middleware' => 'logincheck:user'], function () {
//         Route::get('user', 'App\Http\Controllers\UserController@user')->name('user');
//     });
//     Route::group(['middleware' => 'logincheck:guru'], function () {
//         Route::get('user', 'App\Http\Controllers\GuruController@guru')->name('guru');
//     });
// });

Route::get('/admin', [AdminController::class, 'admin'])->middleware('admin');

//Route Database Admin
Route::resource('tabel', AdminController::class);
Route::get('tabel', [AdminController::class, 'tabel'])->name('tabel.index');
Route::get('create', [AdminController::class, 'create'])->name('tabel.create');

//Route Database User
Route::resource('user', UserController::class);
Route::get('user', [UserController::class, 'user'])->name('user')->middleware('user');
Route::get('create2', [UserController::class, 'create2'])->name('tabel2.create2');

//Route Database Guru
Route::resource('index', GuruController::class);
Route::get('tabelguru', [GuruController::class, 'index'])->name('tabel3.index3');
Route::get('guru', [GuruController::class, 'guru'])->name('guru')->middleware('guru');