<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/create', [FoodController::class, 'create']);
Route::post('/food', [FoodController::class, 'store']);