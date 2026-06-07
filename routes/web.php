<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'login']);


Route::get("/",[ProductController::class, 'show']);
Route::delete("/products/delete/{id}",[ProductController::class, 'delete']);
Route::get("/products/edit/{id}",[ProductController::class, 'edit']);
Route::POST("/products/update/{id}",[ProductController::class, 'update']);
