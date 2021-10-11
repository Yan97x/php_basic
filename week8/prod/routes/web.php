<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Manufacturer;
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

Route::resource('product', ProductController::class);


Route::get('/', function () {
    return view('layouts.home');
});


Route::get('/test1', function () {
    $products = Manufacturer::find(1)->products;
    dd($products);
});


Route::get('/test2', function () {
    $manufacturer = Product::find(1)->manufacturer;
    dd($manufacturer);
});