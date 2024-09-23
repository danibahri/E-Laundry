<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;


Route::get('/admin', function () {
    return view('frontend.dashboard-admin.index');
});

Route::get('/', [FrontendController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

