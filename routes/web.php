<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('blogs', BlogController::class);
Route::controller(BlogController::class)->group(function() {
    Route::get('blogs/{blog}/delete', 'delete')->name('blogs.delete');
});

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // /admin/usersのURLに一致
//     });
// });