<?php

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\ChripController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChripController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::post('/chirps', [ChripController::class, 'store']);
    Route::get('/chirps/{chirp}/edit', [ChripController::class, 'edit']);
    Route::put('/chirps/{chirp}', [ChripController::class, 'update']);
    Route::delete('/chirps/{chirp}', [ChripController::class, 'destroy']);
});

// Register routes
Route::view('/register', 'auth.register')->middleware('guest')->name('register');
Route::post('/register', Register::class)->middleware('guest');
Route::post('/logout', Logout::class)->middleware('auth');
