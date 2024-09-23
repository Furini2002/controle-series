<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [SeriesController::class, 'index']);
Route::get('/index/criar', [SeriesController::class, 'index']);
