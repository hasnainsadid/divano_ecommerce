<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard.index');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);
});