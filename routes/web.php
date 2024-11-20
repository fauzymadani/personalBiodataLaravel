<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Models\TextEditor;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CommitController;
use App\Http\Controllers\CommitLogController;

Route::get("/", function () {
    $portfolio = Portfolio::first();
    $editors = TextEditor::all(); // Ambil semua data text_editors
    return view("welcome", compact("portfolio", "editors"));
})->name("welcome");

Route::get("/portfolios", [PortfolioController::class, "index"]); // Menampilkan semua portfolio
Route::get("/portfolio/{id}", [PortfolioController::class, "show"]); // Menampilkan detail portfolio
Route::get("commit-log", function () {
    return view("commit");
});

Route::get("/commit-log", [CommitLogController::class, "show"]);
Route::get("/commit-log/{hash}/diff", [
    CommitLogController::class,
    "getCommitDiff",
]);
Route::get("/help", function () {
    return view("help");
})->name("help");

Route::get("/license", function () {
    return view("license");
})->name("license");

Route::get("/text-editors", function () {
    $editors = TextEditor::all();
    return view("text_editors", ["editors" => $editors]);
});

Route::get("/pgpkey", function () {
    return view("key");
})->name("key");
