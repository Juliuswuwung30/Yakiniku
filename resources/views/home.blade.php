@extends('layouts.navbar')

@section('layout_contect')
    <div class="container mt-5">
        <!-- About Section -->
        @if ($currentPage == 'All')
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Column for the image -->
                <div class="col-md-6">
                    <img src="{{ url('/images/home.jpg') }}" class="img-fluid rounded" style="max-height: 500px; width: 100%;">
                </div>
                <!-- Column for the text -->
                <div class="col-md-6">
                    <div class="d-flex flex-column h-100 justify-content-center">
                        <h2 class="masthead-subheading"><strong>YAKINIKU AT HOME</strong></h2>
                        <div class="card-body">
                            <p class="lead">Best BBQ supplier in Town</p>
                            <a href="/about" class="btn btn-info">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Product Cards Section -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
            @foreach ($products as $product)
                <div class="col mb-4">
                    <div class="card h-100 shadow-sm">
                        <a href="/product/{{ $product->id }}">
                            <!-- Make the image clickable with a link to the detail view -->
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                class="card-img-top" style="object-fit: cover; height: 225px;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Price: Rp.{{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
