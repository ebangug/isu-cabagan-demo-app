<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index']);
Route::get('listing/{listing:slug}', [ListingController::class, 'show']);

// Category page
Route::get('category/{category:slug}', function (Category $category) {
    return view('listings', [
        'listings' => $category->listings,
    ]);
});

// Seller page
Route::get('seller/{seller:username}', function (User $seller) {
    return view('listings', [
        'listings' => $seller->listings,
    ]);
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);
