<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'Home'])->name('home');
Route::get('/quotes', [PublicController::class, 'Quotes'])->name('quotes');
Route::get('/inserisci-elemento', [PublicController::class, 'InserisciElemento'])->name('inserisci-elemento');