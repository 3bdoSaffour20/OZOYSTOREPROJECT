<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\AdvertiseController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/order', [OrderController::class, 'index']);
Route::get('/order-add', [OrderController::class, 'add']);
Route::post('/order-add', [OrderController::class, 'store']);
Route::get('/order-edit/{id}', [OrderController::class, 'edit']);
Route::put('/order-update/{id}', [OrderController::class, 'update']);
Route::get('/order-delete/{id}', [OrderController::class, 'delete']);

Route::get('/advertise', [AdvertiseController::class, 'index']);
Route::get('/advertise-add', [AdvertiseController::class, 'add']);
Route::post('/advertise-add', [AdvertiseController::class, 'store']);
Route::get('/advertise-edit/{id}', [AdvertiseController::class, 'edit']);
Route::put('/advertise-update/{id}', [AdvertiseController::class, 'update']);
Route::get('/advertise-delete/{id}', [AdvertiseController::class, 'delete']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product-add', [ProductController::class, 'add']);
Route::post('/product-add', [ProductController::class, 'store']);
Route::get('/product-edit/{id}', [ProductController::class, 'edit']);
Route::put('/product-update/{id}', [ProductController::class, 'update']);
Route::get('/product-delete/{id}', [ProductController::class, 'delete']);

Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory-add', [InventoryController::class, 'add']);
Route::post('/inventory-add', [InventoryController::class, 'store']);
Route::get('/inventory-edit/{id}', [InventoryController::class, 'edit']);
Route::put('/inventory-update/{id}', [InventoryController::class, 'update']);
Route::get('/inventory-delete/{id}', [InventoryController::class, 'delete']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'check']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/cart/{id}', [CartItemController::class, 'add']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category-add', [CategoryController::class, 'add']);
Route::post('/category-add', [CategoryController::class, 'store']);
Route::get('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category-update/{id}', [CategoryController::class, 'update']);
Route::get('/category-delete/{id}', [CategoryController::class, 'delete']);

Route::get('/subscriber', [OrderController::class, 'index']);
Route::get('/subscriber-add', [OrderController::class, 'add']);
Route::post('/subscriber-add', [OrderController::class, 'store']);
Route::get('/subscriber-edit/{id}', [OrderController::class, 'edit']);
Route::put('/subscriber-update/{id}', [OrderController::class, 'update']);
Route::get('/subscriber-delete/{id}', [OrderController::class, 'delete']);


Route::get('/index', function () {
    return view('dashboard.settings.index');
})->name('index');
Route::put('settings/{setting}/update',[SettingController::class , 'update'])->name('dashboard.settings.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');