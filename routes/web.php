<?php

use App\Http\Controllers\KeyboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KeyboardController::class, 'landing']);
Route::get('/keyboards', [KeyboardController::class, 'index'])->name('Keyboard.index');
Route::get('/keyboards/import-csv', function () {
    return view('import-csv');
})->name('import-csv');
Route::get('/about', function () {
    return view('about');
});
Route::post('/keyboards/import-csv', [KeyboardController::class, 'importCSV'])->name('Keyboard.importCSV');
Route::post('/keyboards/store', [KeyboardController::class, 'store'])->name('Keyboard.store');
Route::get('/keyboards/csv', [KeyboardController::class, 'generateCSV']);
Route::get('/keyboards/pdf', [KeyboardController::class, 'pdf']);
Route::get('/keyboards/{model}', [KeyboardController::class, 'detail'])->name('Keyboard.detail');
Route::get('/scanner', function () {
    return view('scan');
})->name('scan');
