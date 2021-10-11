<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\VoteController;
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

Route::get('/', [ProductController::class, 'index']);
Route::resource('product', ProductController::class);
Route::resource('review', ReviewController::class);
Route::resource('picture', PictureController::class);
Route::resource('follow', FollowController::class);
Route::resource('vote', VoteController::class);

Route::get('documentation', function(){
    return view("products.documentation");
});


require __DIR__.'/auth.php';
