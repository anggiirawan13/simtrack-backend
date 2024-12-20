<?php

use App\Http\Controllers\ResiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->prefix('/user')->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}', '');
    Route::post('/', 'store');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/resi/{noResi}', [ResiController::class, 'show'])->name('resi.show');
Route::post('/resi/{noResi}/confirm-arrival', [ResiController::class, 'confirmArrival'])->name('resi.confirmArrival');
