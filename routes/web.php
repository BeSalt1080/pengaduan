<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;

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
})->name('welcome');

Auth::routes();

Route::resource('pengaduan',PengaduanController::class)->middleware('auth');
Route::resource('tanggapan',TanggapanController::class)->except(['index'])->middleware('auth');
Route::get('/cetak', [PengaduanController::class, 'pdf'])->middleware('auth')->name('pengaduan.cetak');
Route::get('/laporan', [PengaduanController::class, 'laporan'])->middleware('auth')->name('pengaduan.laporan');
Route::get('/user', [PengaduanController::class, 'getUsers'])->middleware('auth')->name('pengaduan.user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

