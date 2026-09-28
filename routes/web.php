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

Route::post('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::delete('/categories/{id}', [CategoryController::class, 'delete'])
    ->name('categories.delete');

// Products
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'get'])
    ->name('products.get');

Route::put('/products/{id}', [ProductController::class, 'update'])
    ->name('products.update');

Route::post('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::delete('/products/{id}', [ProductController::class, 'delete'])
    ->name('products.delete');

// Prices
Route::get('/prices', [PriceController::class, 'index'])
    ->name('prices.index');

Route::get('/prices/{id}', [PriceController::class, 'get'])
    ->name('prices.get');

Route::put('/prices/{id}', [PriceController::class, 'update'])
    ->name('prices.update');

Route::post('/prices/create', [PriceController::class, 'create'])
    ->name('prices.create');

Route::delete('/prices/{id}', [PriceController::class, 'delete'])
    ->name('prices.delete');

// Reviews
Route::get('/reviews', [ReviewController::class, 'index'])
    ->name('reviews.index');

Route::get('/reviews/{id}', [ReviewController::class, 'get'])
    ->name('reviews.get');

Route::put('/reviews/{id}', [ReviewController::class, 'update'])
    ->name('reviews.update');

Route::post('/reviews/create', [ReviewController::class, 'create'])
    ->name('reviews.create');

Route::delete('/reviews/{id}', [ReviewController::class, 'delete'])
    ->name('reviews.delete');

// Orders
Route::get('/orders', [OrderController::class, 'index'])
    ->name('orders.index');

Route::get('/orders/{id}', [OrderController::class, 'get'])
    ->name('orders.get');

Route::put('/orders/{id}', [OrderController::class, 'update'])
    ->name('orders.update');

Route::post('/orders/create', [OrderController::class, 'create'])
    ->name('orders.create');

Route::delete('/orders/{id}', [OrderController::class, 'delete'])
    ->name('orders.delete');

// Order rows
Route::get('/orderrows', [OrderRowController::class, 'index'])
    ->name('orderrows.index');

Route::get('/orderrows/{id}', [OrderRowController::class, 'get'])
    ->name('orderrows.get');

Route::put('/orderrows/{id}', [OrderRowController::class, 'update'])
    ->name('orderrows.update');

Route::post('/orderrows/create', [OrderRowController::class, 'create'])
    ->name('orderrows.create');

Route::delete('/orderrows/{id}', [OrderRowController::class, 'delete'])
    ->name('orderrows.delete');

// Roles
Route::get('/roles', [RoleController::class, 'index'])
    ->name('roles.index');

Route::get('/roles/{id}', [RoleController::class, 'get'])
    ->name('roles.get');

Route::put('/roles/{id}', [RoleController::class, 'update'])
    ->name('roles.update');

Route::post('/roles/create', [RoleController::class, 'create'])
    ->name('roles.create');

Route::delete('/roles/{id}', [RoleController::class, 'delete'])
    ->name('roles.delete');

// Users
Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/{id}', [UserController::class, 'get'])
    ->name('users.get');

Route::put('/users/{id}', [UserController::class, 'update'])
    ->name('users.update');

Route::post('/users/create', [UserController::class, 'create'])
    ->name('users.create');

Route::delete('/users/{id}', [UserController::class, 'delete'])
    ->name('users.delete');
