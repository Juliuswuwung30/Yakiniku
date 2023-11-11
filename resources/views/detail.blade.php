<!-- resources/views/product/detail.blade.php -->
@extends('layouts.navbar')
@section('layout_contect')
<div class="container">
    <div class="row">
        <!-- Column for the image -->
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="bd-placeholder-img card-img-top" height="500">
        </div>
        <!-- Column for the text -->
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <div class="card-body">
                <p>Description: {{ $product->description }}</p>
                <p>Price: {{ $product->price }}</p>
                <p>Type: {{ $product->type }}</p>

                <!-- Buy button -->
                <button type="button" class="btn btn-primary">Buy</button>

                <!-- Favorite button -->
                <button type="submit" class="btn btn-danger btn-lg text-end"><span class="bi bi-heart-fill"></span></button>
            </div>
        </div>
    </div>
</div>
@endsection

