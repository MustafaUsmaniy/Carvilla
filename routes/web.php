<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('/');

Route::get('create', [CarsController::class, 'create'])->name('create');
Route::post('store', [CarsController::class, 'store'])->name('store');
Route::get('cars/{cars}/edit', [CarsController::class, 'edit'])->name('cars.edit');
Route::put('cars/{cars}/edit', [CarsController::class, 'update'])->name('cars.update');
Route::delete('cars/{cars}/delete', [CarsController::class, 'delete'])->name('cars.delete');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
