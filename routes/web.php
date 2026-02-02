<?php

use App\Http\Controllers\ChripController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChripController::class, 'index']);
Route::post('/chirps', [ChripController::class, 'store']);
Route::get('/chirps/{chirp}/edit', [ChripController::class, 'edit']);
Route::put('/chirps/{chirp}', [ChripController::class, 'update']);
Route::delete('/chirps/{chirp}', [ChripController::class, 'destroy']);
