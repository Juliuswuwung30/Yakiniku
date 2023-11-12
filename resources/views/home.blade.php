@extends('layouts.navbar')

@section('layout_contect')
    <div class="container mt-5">
        <!-- About Section -->
        @if ($currentPage == 'All')
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <div class="maintxt pt-5 pb-5">
                        <h2 class="masthead-subheading"><strong>YAKINIKU AT HOME</strong></h2>
                        <p class="lead">Best BBQ supplier in Town</p>
                        <a href="/about" class="btn btn-info">Learn More</a>
                    </div>
                </div>
            </div>
        @endif

        <!-- Product Cards Section -->
        <div class="row mt-4">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
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
