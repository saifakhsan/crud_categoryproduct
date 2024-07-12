@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Category: {{ $category->name }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h4>Products in this Category:</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category->products as $key => $product)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            <a class="btn btn-secondary" href="{{ route('categories.index') }}"> Back to Categories</a>
        </div>
    </div>
</div>
@endsection
