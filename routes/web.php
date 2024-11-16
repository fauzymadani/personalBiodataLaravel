<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    $portfolio = Portfolio::first();
    return view('welcome', compact('portfolio'));
});

Route::get('/portfolios', [PortfolioController::class, 'index']);  // Menampilkan semua portfolio
Route::get('/portfolio/{id}', [PortfolioController::class, 'show']);  // Menampilkan detail portfolio

