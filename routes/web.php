<?php

use App\Http\Controllers\BukuController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/buku', [BukuController::class, 'index'])->name('buku');
Route::get('/buku/detail/{id_buku}', [BukuController::class, 'detail']);
Route::get('/buku/add', [BukuController::class, 'add']);
Route::post('/buku/insert', [BukuController::class, 'insert']);
Route::get('/buku/edit/{id_buku}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id_buku}', [BukuController::class, 'update']);
Route::get('/buku/delete/{id_buku}', [BukuController::class, 'delete']);

Route::view('/log_out', 'log_out');

Auth::routes();

Route::get('/about', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/biodata', [App\Http\Controllers\HomeController::class, 'biodata'])->name('home');