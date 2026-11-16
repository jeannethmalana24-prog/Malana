<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/apply', [HomeController::class, 'sampleform'])->name('apply');
Route::get('/sampleform', [HomeController::class, 'sampleform'])->name('sampleform');
Route::post('/sampleform', [HomeController::class, 'submit'])->name('sample.submit');
Route::get('/admin/programs/{id}', [HomeController::class, 'showProgram']);
Route::get('/admin/programs/{id}/college/{collegeid}', [HomeController::class, 'showProgramCollege']);
Route::get('/admin/user/{page?}', [HomeController::class, 'adminUser']);

Route::get('/admin/dashboard', DashboardController::class)->name('admin.dashboard');