<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Category;


    Route::get('/', [ProductController::class, 'showProducts']);




    Route::get('/produk-ayam', [ProductController::class, 'ayam']);



    Route::get('/produk-ikan', [ProductController::class, 'ikan']);



    Route::get('/produk-sapi', [ProductController::class, 'sapi']);


    Route::get('/produk-snacks', [ProductController::class, 'snacks']);



Route::get('/product/{id}', function (string $id) {
$product=Product::find($id);
    return view('detail')->with('product', $product)->with('currentPage',$product->type);
});

Route::get('/about', function () {
        return view('About')->with('currentPage','All');
    });
