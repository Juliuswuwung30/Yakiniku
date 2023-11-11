@extends('layouts.navbar')

@section('layout_contect')
    <div class="container">
        <!-- About -->
        @if ($currentPage == 'All')
            <div class="row">
                <div class="col-md-8 mx-auto text-center pt-5">
                    <div class="maintxt pt-5 pb-5">
                        <div class="masthead-subheading"><strong>YAKINIKU AT HOME</strong></div>
                        <p></p>
                        <div class="masthead-heading">Best BBQ supplier in Town</div>
                        <div>
                            <p></p>
                        <a href="/about">
                            <button type="button" class="btn btn-info">
                                Learn More
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <p></p>

        <!-- Product Cards -->
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <a href="/product/{{ $product->id }}">
                            <!-- Make the image clickable with a link to the detail view -->
                            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                class="bd-placeholder-img card-img-top" width="100%" height="225">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Price: {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
