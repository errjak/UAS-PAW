<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelController;

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

Route::resource('tabel', TabelController::class);
Route::get('/', 'App\Http\Controllers\AuthController@login')->name('login');
Route::get('homepage', [TabelController::class, 'homepage'])->name('homepage');
Route::get('tabel', [TabelController::class, 'tabel'])->name('tabel.index');
Route::get('create', [TabelController::class, 'create'])->name('tabel.create');
Route::get('aboutme', [TabelController::class, 'aboutme'])->name('aboutme');
Route::post('postlogin', 'App\Http\Controllers\AuthController@postlogin')->name('postlogin');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//auth -> admin || user
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'logincheck:admin'], function () {
        Route::get('admin','App\Http\Controllers\AdminController@admin')->name('admin');
    });
    Route::group(['middleware' => 'logincheck:user'], function () {
    });
});
