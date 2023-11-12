<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Category;

Route::get('/', function () {
    $products=Product::all();
    return view('home')->with('products', $products)->with('currentPage','All');
});


Route::get('/produk-ayam', function () {
    $ayam = Category::where('name','ayam')->first();
    return view('home')->with('products', $ayam->products)->with('currentPage','Ayam');
});

Route::get('/produk-ikan', function () {
    $ikan = Category::where('name','ikan')->first();
    return view('home')->with('products', $ikan->products)->with('currentPage','Ikan');
});

Route::get('/produk-sapi', function () {
    $sapi = Category::where('name','sapi')->first();
    return view('home')->with('products', $sapi->products)->with('currentPage','Sapi');
});

Route::get('/produk-snacks', function () {
    $snacks = Category::where('name','snacks')->first();
    return view('home')->with('products', $snacks->products)->with('currentPage','Snacks');
});


Route::get('/product/{id}', function (string $id) {
$product=Product::find($id);
    return view('detail')->with('product', $product)->with('currentPage',$product->type);
});

Route::get('/about', function () {
        return view('About')->with('currentPage','All');
    });
