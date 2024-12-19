<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index' ])->name('home');
Route::get('/create', [HomeController::class, 'create' ])->name('create');
Route::post('/store', [HomeController::class, 'store' ])->name('store');
Route::get('/show/{id}', [HomeController::class, 'show' ])->name('show');
Route::get('/edit/{id}', [HomeController::class, 'edit' ])->name('edit');
Route::post('/update/{id}', [HomeController::class, 'update' ])->name('update');
Route::post('/delete/{id}', [HomeController::class, 'delete' ])->name('delete');