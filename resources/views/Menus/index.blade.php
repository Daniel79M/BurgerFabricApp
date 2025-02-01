@extends('Layouts.base')

@section('content')
<div class="container">
    <h1>Notre Menu</h1>
    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>
        <div class="row">
            @foreach ($category->products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Prix : {{ $product->price }} FCFA</strong></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection