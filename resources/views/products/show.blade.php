@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Product: {{ $product->name }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><a href="{{ route('categories.show', $product->category->id) }}">{{ $product->category->name }}</a></td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-secondary mt-3" href="{{ route('products.index') }}">Back To Products</a>
        </div>
    </div>
</div>
@endsection
