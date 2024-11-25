<?php

use App\Http\Controllers\Admin\AdminAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminAuthenticationController::class, 'index'])->name('login');
