<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    $products=Product::all();
    return view('home')->with('products', $products)->with('currentPage','All');
});


Route::get('/produk-ayam', function () {
    $ayam = Product::where('type','ayam')->get();
    return view('home')->with('products', $ayam)->with('currentPage','Ayam');
});

Route::get('/produk-ikan', function () {
    $ikan = Product::where('type','ikan')->get();
    return view('home')->with('products', $ikan)->with('currentPage','Ikan');
});


Route::get('/produk-sapi', function () {
    $sapi = Product::where('type','sapi')->get();
    return view('home')->with('products', $sapi)->with('currentPage','Sapi');
});


Route::get('/product/{id}', function (string $id) {
$product=Product::find($id);
    return view('detail')->with('product', $product)->with('currentPage',$product->type);
});

Route::view('/favorite', 'Favorite');

Route::get('/about', function () {
        return view('About')->with('currentPage','All');
    });
