<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderRowController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Categories
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'get'])
    ->name('categories.get');

Route::put('/categories/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');

// Products
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'get'])
    ->name('products.get');

Route::put('/products/{id}', [ProductController::class, 'update'])
    ->name('products.update');

// Prices
Route::get('/prices', [PriceController::class, 'index'])
    ->name('prices.index');

Route::get('/prices/{id}', [PriceController::class, 'get'])
    ->name('prices.get');

Route::put('/prices/{id}', [PriceController::class, 'update'])
    ->name('prices.update');

// Reviews
Route::get('/reviews', [ReviewController::class, 'index'])
    ->name('reviews.index');

Route::get('/reviews/{id}', [ReviewController::class, 'get'])
    ->name('reviews.get');

Route::put('/reviews/{id}', [ReviewController::class, 'update'])
    ->name('reviews.update');

// Orders
Route::get('/orders', [OrderController::class, 'index'])
    ->name('orders.index');

Route::get('/orders/{id}', [OrderController::class, 'get'])
    ->name('orders.get');

Route::put('/orders/{id}', [OrderController::class, 'update'])
    ->name('orders.update');

// Order rows
Route::get('/orderrows', [OrderRowController::class, 'index'])
    ->name('orderrows.index');

Route::get('/orderrows/{id}', [OrderRowController::class, 'get'])
    ->name('orderrows.get');

Route::put('/orderrows/{id}', [OrderRowController::class, 'update'])
    ->name('orderrows.update');

// Roles
Route::get('/roles', [RoleController::class, 'index'])
    ->name('roles.index');

Route::get('/roles/{id}', [RoleController::class, 'get'])
    ->name('roles.get');

Route::put('/roles/{id}', [RoleController::class, 'update'])
    ->name('roles.update');

// Users
Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/{id}', [UserController::class, 'get'])
    ->name('users.get');

Route::put('/users/{id}', [UserController::class, 'update'])
    ->name('users.update');