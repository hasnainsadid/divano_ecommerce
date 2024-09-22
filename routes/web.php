<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(base_path('routes/admin.php'));

Route::get('/', function () {
    return view('web.pages.home.index');
});
