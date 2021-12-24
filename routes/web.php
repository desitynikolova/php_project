<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Request as Input;

//Home Route
Route::get('/',[HomeController::class,'getAllProducts']);

// Route Search By Date
Route::get('/search-date',[ProductController::class,'searchByDate'])->name('search-date');
// Route Search By Title
Route::get('/search-title',[ProductController::class,'searchByTitle'])->name('search-title');
// Route For Search Shows all Categories to prevent mulitple queries
Route::get('/extended-search',[ProductController::class,'searchByCategory']);

// All Porducts
Route::get('/products',[ProductController::class,'getall']);
// Current Product
Route::get('products/{id}', [ProductController::class,'getById']);

// All Categories
Route::get('/categories',[CategoryController::class,'getall']);
// Current Location
Route::get('categories/{id}', [CategoryController::class,'getById']);


