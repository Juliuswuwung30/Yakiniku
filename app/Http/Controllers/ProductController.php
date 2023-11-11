<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('home', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function showProducts()
{
    $products = Product::all(); // Assuming you have a Product model
    return view('navbar', compact('products'));
}


public function sapi()
{
    $products = Product::where('type', 'sapi')->get();
    return view('ProdukSapi', compact('products'));
}
public function showDetail($id)
{
    $product = Product::findOrFail($id); // Adjust this based on your actual method to fetch a single product
    return view('detail', compact('product'));
}

public function toggleFavorite(Product $product)
{
    // Logic to toggle the favorite status (add/remove from favorite list)
    // You can use the authenticated user's favorite method or a dedicated favorites table
    // For simplicity, I'll use the user's favorites method assuming you have a User model with a favorites relationship.

    //auth()->user()->toggleFavorite($product);

    // Redirect back or to a specific page
    return redirect()->back()->with('success', 'Product added to favorites!');
}

}
