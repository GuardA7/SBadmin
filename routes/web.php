<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/Pelatihan', function () {
    return view('content.Pelatihan');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pelatihan', [PelatihanController::class, 'index'])->name('pelatihan.index'); // Ini sudah benar
Route::get('/pelatihan/ajax', [PelatihanController::class, 'ajax'])->name('pelatihan.ajax'); // Ini juga sudah benar


