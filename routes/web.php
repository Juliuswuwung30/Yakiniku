<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    $products=Product::all();
    return view('home')->with('products', $products)->with('currentPage',"All");
});


Route::get('/produk-ayam', function () {
    $ayam = Product::where('type','ayam')->get();
    return view('home')->with('products', $ayam)->with('currentPage',"Ayam");
});

Route::get('/produk-ikan', function () {
    $ikan = Product::where('type','ikan')->get();
    return view('home')->with('products', $ikan)->with('currentPage',"Ikan");
});

Route::view('/Favorite', 'Favorite');

Route::get('/produk-sapi', function () {
    $sapi = Product::where('type','sapi')->get();
    return view('home')->with('products', $sapi)->with('currentPage',"Sapi");
});
