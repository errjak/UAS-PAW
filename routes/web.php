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

Route::get('/', [TabelController::class, 'index'])->name('tabel.index');
Route::resource('tabel', TabelController::class);
Route::get('create', [TabelController::class, 'create'])->name('tabel.create');
Route::get('aboutme', [TabelController::class, 'aboutme'])->name('aboutme');
