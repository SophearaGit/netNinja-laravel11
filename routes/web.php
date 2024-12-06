<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ninjaController;
use App\Http\Controllers\dojoController;

// Route for the home page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninja', [ninjaController::class, 'index'])->name('ninja.index');
Route::get('/ninja/create', [ninjaController::class, 'create'])->name('ninja.create');
Route::get('/ninja/{ninja}', [ninjaController::class, 'show'])->name('ninja.show');
Route::post('/ninja', [ninjaController::class, 'store'])->name('ninja.store');
Route::delete('/ninja/{ninja}', [ninjaController::class, 'destroy'])->name('ninja.delete');

Route::get('/dojo', action: [dojoController::class, 'index'])->name('dojo.index');
Route::get('/dojo/{dojo}', [dojoController::class, 'show'])->name('dojo.show');
Route::delete('/dojo/{dojo}', [dojoController::class, 'destroy'])->name('dojo.delete');









