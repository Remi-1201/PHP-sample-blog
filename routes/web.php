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
Route::get('blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'show']);

//{blog}をパラメータとしてedit関数に渡します
Route::get('blogs/{blog}/edit', [\App\Http\Controllers\BlogController::class, 'edit']);
// 「パスがblogs/{blog}・HTTPメソッドがPUT」の組み合わせでupdateを呼び出します
Route::put('blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'update']);

Route::get('blogs/{blog}/delete', [\App\Http\Controllers\BlogController::class, 'delete']);
Route::delete('blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'destroy']);