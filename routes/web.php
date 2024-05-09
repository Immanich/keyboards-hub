<?php

use App\Http\Controllers\KeyboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing');
// });

Route::get('/', [KeyboardController::class, 'landing']);
Route::get('/keyboards', [KeyboardController::class, 'index']);
