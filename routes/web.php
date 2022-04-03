<?php

use App\Models\Category;
use App\Models\Listing;
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

// List all listings
Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::latest()->filter(request(['search', 'category', 'seller']))->get()
    ]);
});

// Display listing detail
Route::get('/listing/{listing:slug}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

// Category page
Route::get('/category/{category:slug}', function (Category $category) {
    return view('listings', [
        'listings' => $category->listings
    ]);
});

// Seller page
Route::get('/seller/{seller:username}', function (User $seller) {
    return view('listings', [
        'listings' => $seller->listings
    ]);
});
