<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChripController;

Route::get('/', [ChripController::class,'index']);
