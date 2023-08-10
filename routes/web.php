<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs', BlogController::class);
Route::get('blogs/{blog}/delete', [BlogController::class, 'delete']);