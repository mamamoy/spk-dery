<?php

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
    return view('home');
});

Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('index-konsultasi');
Route::get('/gejala', [App\Http\Controllers\GejalaController::class, 'index'])->name('index-gejala');
Route::get('/penyakit', [App\Http\Controllers\PenyakitController::class, 'index'])->name('index-penyakit');
Route::get('/create', [App\Http\Controllers\PenyakitController::class, 'create'])->name('create-penyakit');
Route::post('/store', [App\Http\Controllers\PenyakitController::class, 'store'])->name('store-penyakit');
Route::get('/relasi', [App\Http\Controllers\RelasiController::class, 'index'])->name('index-relasi');
