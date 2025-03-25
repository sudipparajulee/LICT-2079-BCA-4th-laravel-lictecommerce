<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Category
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);

//Product
Route::get('/latestproduct', [ProductController::class, 'latest']);
Route::get('/viewproduct/{id}', [ProductController::class, 'viewproduct']);
