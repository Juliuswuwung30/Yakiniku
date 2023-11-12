@extends('layouts.navbar')

@section('layout_contect')
    <div class="container mt-5">
        <div class="row p-3">
            <!-- Image column (on smaller screens) -->
            <div class="col-12 d-md-none mb-3">
                <img src="{{ url('/images/logo1.png') }}" alt="Additional Image" class="img-fluid">
            </div>

            <!-- Content column -->
            <div class="col-md-6">
                <h1 class="display-2 pb-3 text-center"><u><strong>Yakiniku At Home</strong></u></h1>
                <p class="lead">Sebuah bisnis daging slice frozen dari Bojonegoro, ada bermacam-macam daging seperti ayam, sapi, ikan, bebek, dan bermacam-macam snack.</p>
                <p class="lead">Ada juga produk-produk homemade seperti sauce yakiniku yang menambah kenikmatan saat BBQ.</p>

                <!-- Contact section -->
                <h2 class="mb-4"><strong>Contact Us</strong></h2>
                <p class="lead">For any further questions or more information please contact us on WhatsApp!</p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <img src="{{ url('/images/logowa.png') }}" alt="Contact Image" style="width: 50px; height: 50px;">
                        <a href="https://wa.me/6285261731111" class="ms-3">
                            <p>WhatsApp (Fransiska)</p>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Image column (on larger screens) -->
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ url('/images/logo1.png') }}" alt="Additional Image" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
