<?php

use App\Http\Controllers\Web\WebsiteController;
use Illuminate\Support\Facades\Route;
use OpenSpout\Common\Entity\Row;

Route::middleware('web')->group(base_path('routes/admin.php'));

// Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});
