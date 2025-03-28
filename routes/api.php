<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/films', [FilmController::class, 'index']);     
Route::post('/films', [FilmController::class, 'store']);     
Route::get('/films/{id}', [FilmController::class, 'show']);  
Route::put('/films/{id}', [FilmController::class, 'update']); 
Route::delete('/films/{id}', [FilmController::class, 'destroy']); 
Route::get('/films/rating/7plus', [FilmController::class, 'rating7lebih']); 