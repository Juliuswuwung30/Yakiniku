@extends('layouts.navbar')

@section('layout_contect')
    <div class="container">
        <div class="masthead-subheading">YAKINIKU AT HOME</div>
        <div class="masthead-heading text-uppercase">Best BBQ supplier in Town</div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Learn More
        </button>

        <!-- Modal content as before -->

        <h1> Best Sellers - Sapi</h1>

        <div class="row">
            @foreach ($products as $product)

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Price: {{ $product->price }}</p>
                                <!-- Add more details as needed -->
                            </div>
                        </div>
                    </div>
        
            @endforeach
        </div>
    </div>
@endsection
