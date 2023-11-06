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
    return view('home');
});

Route::view('/ProdukSapi', function () {
    return view('sapi');
});

Route::view('/ProdukAyam', function () {
    return view('ayam');
});

Route::view('/ProdukIkan', function () {
    return view('ikan');
});

Route::view('/Favorite', function () {
    return view('favorit');
});
