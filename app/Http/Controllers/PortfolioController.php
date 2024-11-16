<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index()
    {

        $portfolios = \App\Models\Portfolio::all(); // Mengambil semua data portfolio
        return view('welcome', compact('portfolios'));
    }


    public function show($id)
    {

        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.show', compact('portfolio'));
    }
}
