@extends('layouts.navbar')
@section('layout_contect')
    
<div class="container">
        <div class="masthead-subheading">YAKINIKU AT HOME</div>
        <div class="masthead-heading text-uppercase">Best BBQ supplier in Town</div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Learn More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sebuah bisnis daging slice frozen dari Bojonegoro, ada bermacam-macam daging seperti ayam, sapi dan
                        ikan. Ada juga produk2 homemade seperti sauce yakiniku yg menambah kenikmatan saat BBQ.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <h1> Best Sellers</h1>

    @endsection
