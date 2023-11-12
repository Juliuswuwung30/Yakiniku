@extends('layouts.navbar')

@section('layout_contect')
    <div class="container">
        <div class="row mt-5 p-5">
            <!-- Image column -->
            <div class="col-md-6">
                <img src="{{ url('/images/logo1.png') }}" alt="Additional Image">
            </div>

            <!-- Content column -->
            <div class="col-md-6">
                <h1 class="display-2 pb-3 text-center"><u><strong>Yakiniku At Home</strong></u></h1>
                <p class="lead">Sebuah bisnis daging slice frozen dari Bojonegoro, ada bermacam-macam daging seperti ayam, sapi, ikan, bebek, dan bermacam-macam snack.</p>
                <p class="lead">Ada juga produk-produk homemade seperti sauce yakiniku yang menambah kenikmatan saat BBQ.</p>

                <h2 class="mb-4"><strong>Contact Us</strong></h2>
                <p class="lead">For any further questions or more information please contact us on WhatsApp!</p>
                <ul class="d-flex align-items-center list-unstyled">
                    <li>
                        <img src="{{ url('/images/logowa.png') }}" alt="Contact Image" style="width: 50px; height: 50px;">
                    </li>
                    <li class="ms-3 d-flex align-items-center">
                        <a href="https://wa.me/6285261731111">
                            <p>WhatsApp (Fransiska)</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
