<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, "welcome"])->name("home");

// PRODOTTI
Route::get("/product/create", [ProductController::class, "create"])->name("product.create")->middleware('auth');
Route::post("/product/store", [ProductController::class, "store"])->name("product.store")->middleware('auth');
Route::get("/product/index",[ProductController::class, "index"])->name("product.index");


// ARTICOLI
Route::get("/article/create", [ArticleController::class, "create"])->name('article.create')->middleware('auth');
Route::post("/article/store", [ArticleController::class, "store"])->name("article.store")->middleware('auth');
Route::get("/article/index",[ArticleController::class, "index"])->name("article.index");
Route::get("/article/index/{article}",[ArticleController::class, "show"])->name("article.show");

