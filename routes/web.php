<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => '/test'], function () {
    Route::get('/all', [HomeController::class, 'index']);
    Route::post('/table', [HomeController::class, 'index']);
});

Route::prefix('test')->group(function () {
    Route::get('/all', [TestController::class, 'all']);
    Route::get('/table', [TestController::class, 'getTable']);
});
