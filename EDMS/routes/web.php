<?php

use App\Http\Controllers\Admin\AdminAuthenticationController;
use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminAuthenticationController::class, 'index'])->name('login');

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');
