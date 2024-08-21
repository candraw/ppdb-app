<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftarController;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar');
Route::get('/form-cpd', [PendaftarController::class, 'form_cpd'])->name('form-cpd');
Route::get('/form-wali', [PendaftarController::class, 'form_wali'])->name('form-wali');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup-proses', [AuthController::class, 'signup_proses'])->name('signup-proses');