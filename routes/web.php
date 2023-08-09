<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//「パスが/blogs・HTTPメソッドがGET」という組み合わせに対しては、
// BlogController のindexアクションを実行するよう定義しています。
Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index']); 
Route::get('/blogs/create', [\App\Http\Controllers\BlogController::class, 'create']);
Route::post('/blogs', [\App\Http\Controllers\BlogController::class, 'store']);