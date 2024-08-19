<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftarController;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar');
Route::get('/form-cpd', [PendaftarController::class, 'form_cpd'])->name('form-cpd');
Route::get('/form-wali', [PendaftarController::class, 'form_wali'])->name('form-wali');