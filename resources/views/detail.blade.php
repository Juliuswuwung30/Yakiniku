<!-- resources/views/product/detail.blade.php -->



    <div class="container">
        <h1>{{ $product->name }} Detail</h1>

        <div class="card mb-4 shadow-sm">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
                <p>Description: {{ $product->description }}</p>
                <p>Price: {{ $product->price }}</p>
                <p>Type: {{ $product->type }}</p>

            </div>
        </div>
    </div>

