<?php

use App\Http\Controllers\API\V1\ArticleController;
use App\Http\Controllers\API\V1\AuthorController;
use App\Http\Controllers\API\V1\UserController;
use Illuminate\Support\Facades\Route;
// ->middleware('auth:sanctum')
// V1
Route::prefix('V1')->group(function () {
    // Articles 
    Route::apiResource('/articles' , ArticleController::class);

    // Authors 
    Route::get('/article/authors/{user}' , [AuthorController::class , 'show'])->name('authors.show');

    // User (ME)
    Route::get('/user' , UserController::class);
});
