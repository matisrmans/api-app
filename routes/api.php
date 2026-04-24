<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/index', [PostController::class, 'index']);

Route::post('/add', [PostController::class, 'add']);

Route::delete('/delete/{id}', [PostController::class, 'destroy']);

