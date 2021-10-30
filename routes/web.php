<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Login
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::middleware('role:admin|employee')->group(function () {
        Route::get('products',[ProductController::class,'index'])->name('products.index');
        Route::get('products/create',[ProductController::class,'create'])->name('products.create');
        Route::get('products/{id}',[ProductController::class,'show'])->name('products.show');
        Route::post('products',[ProductController::class,'store'])->name('products.store');
        Route::delete('products/{id}',[ProductController::class,'destroy'])->name('products.destroy');
        Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
        Route::put('products/{id}',[ProductController::class,'update'])->name('products.update');
        Route::get('users',[UserController::class,'index'])->name('users.index');
        Route::get('users/create',[UserController::class,'create'])->name('users.create');
        Route::get('users/{id}',[UserController::class,'show'])->name('users.show');
        Route::post('users',[UserController::class,'store'])->name('users.store');
        Route::delete('users/{id}',[UserController::class,'destroy'])->name('users.destroy');
        Route::get('users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
        Route::put('users/{d}',[UserController::class,'update'])->name('users.update');

    });
});


