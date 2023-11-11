<!-- resources/views/product/detail.blade.php -->
@extends('layouts.navbar')
@section('layout_contect')
<div class="container pt-5">
    <div class="row">
        <!-- Column for the image -->
        <div class="col-md-6">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="bd-placeholder-img card-img-top" height="500">
        </div>
        <!-- Column for the text -->
        <div class="col-md-6">
            <h1 style="font-size: 50px;">{{ $product->name }}</h1>
            <div class="card-body">
                <p style="font-size: 30px;">Description: {{ $product->description }}</p>
                <p style="font-size: 30px;">Price: Rp.{{ $product->price }}</p>
                <p style="font-size: 30px;">Type: {{ $product->type }}</p>

                <!-- Buy button -->
                <button type="button" class="btn btn-primary">Buy</button>

                <!-- Favorite button -->
                {{-- <form method="POST" action="{{ route('product.favorite', ['product' => $product]) }}"> --}}
                    @csrf
                    <button type="submit" class="btn btn-danger"><span class="bi bi-heart-fill"></span></button>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
@endsection
