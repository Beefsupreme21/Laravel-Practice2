<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('help', [
        'heading' => 'Latest Listings',
        'listing' => Listing::find($id)
    ]);
});

Route::get('/help', function ($id) {
    return view('help', [
        'heading' => 'Latest Listings',
        'listing' => Listing::find($id)
    ]);
});


Route::get('/search', function (Request $request) {
    return $request->name . '' . $request->city;
});
