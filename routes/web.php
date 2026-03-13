<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\QuoteController;

// Nav
Route::get('/', [PublicController::class, 'Home'])->name('home');
Route::get('/quotes', [PublicController::class, 'Quotes'])->name('quotes');
Route::get('/inserisci-elemento', [PublicController::class, 'InserisciElemento'])->name('inserisci-elemento');

// Inserimento quotes
Route::post('quote/create', [QuoteController::class, 'store'])->name('quote.store');