<?php

use App\Http\Controllers\Admin\AdminAuthenticationController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminAuthenticationController::class, 'index'])->name('login');

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');

Route::get('/admin/project-list', [AdminProjectController::class, 'index'])->name('admin_project_list');

Route::get('/', [HomeController::class, 'index'])->name('home');