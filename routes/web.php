<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/add-product',[ProductController::class,'create'])->name('product.create');

Route::post('/save-product',[ProductController::class,'store'])->name('product.store');

Route::get('/all-products',[ProductController::class,'index'])->name('product.index');

Route::get('/edit-product/{product_id}',[ProductController::class,'edit'])->name('product.edit');

Route::post('/update-product/{product_id}',[ProductController::class,'update'])->name('product.update');

Route::get('/delete-product/{product_id}',[ProductController::class,'destroy'])->name('product.delete');
