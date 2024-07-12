@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Search Results for: {{ $query }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Category</h3>
            @if($categories->isEmpty())
                <p>No categories found.</p>
            @else
                <ul class="list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item">
                            <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <h3>Product</h3>
            @if($products->isEmpty())
                <p>No products found.</p>
            @else
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                            <p>{{ $product->description }}</p>
                            <p>Price: {{ $product->price }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
