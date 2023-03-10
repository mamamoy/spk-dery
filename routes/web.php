<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Models\Relasi;

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


// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.admin');


// Route::prefix('gejala')->group(function () {
//     Route::get('/gejala', [App\Http\Controllers\GejalaController::class, 'index'])->name('index-gejala');
//     Route::get('/create', [App\Http\Controllers\GejalaController::class, 'create'])->name('create-gejala');
//     Route::post('/store', [App\Http\Controllers\GejalaController::class, 'store'])->name('store-gejala');
//     Route::delete('/delete/{id}', [App\Http\Controllers\GejalaController::class, 'destroy'])->name('delete-gejala');
// });

// Route::prefix('penyakit')->group(function () {
//     Route::get('/penyakit', [App\Http\Controllers\PenyakitController::class, 'index'])->name('index-penyakit');
//     Route::get('/create', [App\Http\Controllers\PenyakitController::class, 'create'])->name('create-penyakit');
//     Route::post('/store', [App\Http\Controllers\PenyakitController::class, 'store'])->name('store-penyakit');
//     Route::get('/edit/{id}', [App\Http\Controllers\PenyakitController::class, 'edit'])->name('edit-penyakit');
//     Route::post('/update', [App\Http\Controllers\PenyakitController::class, 'update'])->name('update-penyakit');
//     Route::delete('/delete/{id}', [App\Http\Controllers\PenyakitController::class, 'destroy'])->name('delete-penyakit');
// });


// Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('index-konsultasi');
// Route::get('/relasi', [App\Http\Controllers\RelasiController::class, 'index'])->name('index-relasi');
// });

Route::resource('gejala', GejalaController::class)->middleware('admin');
Route::resource('penyakit', PenyakitController::class)->middleware('admin');
Route::resource('relasi', RelasiController::class)->middleware('admin');
Route::resource('konsultasi', KonsultasiController::class)->middleware('auth');


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::resource('login.store', LoginController::class);
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');

Route::resource('register', RegisterController::class)->middleware('guest');
Route::resource('register.store', RegisterController::class)->middleware('guest');

Route::post('ajaxRequest', [RelasiController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
