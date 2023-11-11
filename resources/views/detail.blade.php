<!-- resources/views/product/detail.blade.php -->
@extends('layouts.navbar')
@section('layout_contect')
    <div class="container pt-5">
        <div class="row">
            <!-- Column for the image -->
            <div class="col-md-6">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                    class="bd-placeholder-img card-img-top" height="500">
            </div>
            <!-- Column for the text -->
            <div class="col-md-6">
                <h1 style="font-size: 50px;">{{ $product->name }}</h1>
                <div class="card-body">
                    <p style="font-size: 30px;">Description: {{ $product->description }}</p>
                    <p style="font-size: 30px;">Price: Rp.{{ $product->price }}</p>
                    <p style="font-size: 30px;">Type: {{ $product->type }}</p>

                    <!-- Buy button -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Buy
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Item Bought</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1>{{ $product->name }}</h1>
                                    <p>Description: {{ $product->description }}</p>
                                    <p>Price: Rp.{{ $product->price }}</p>
                                    <p>Type: {{ $product->type }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
