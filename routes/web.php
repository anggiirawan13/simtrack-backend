<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->prefix('/user')->group(function () {
    Route::get('/', 'index');
});
