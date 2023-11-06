<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    //return view('home');
    return "test";
});

Route::view('/ProdukSapi', function () {
    return view('produkSapi');
});

Route::view('/ProdukAyam', function () {
    return view('produkAyam');
});

Route::view('/ProdukIkan', function () {
    return view('produkIkan');
});

Route::view('/BestSellers', function () {
    return view('bestSellers');
});

Route::view('/Favorite', function () {
    return view('favorit');
});
