@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Product List</h2>
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered my-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $index => $product)
        <tr>
            <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <form class="delete-form" onsubmit="return confirm('Are You Sure?')" action="{{ route('products.destroy', $product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a class="btn btn-secondary" href="{{ route('categories.index') }}">Back To Categories</a>
</div>
<div class="d-flex justify-content-center">
    {{ $products->links('pagination::bootstrap-5') }}
</div>
@endsection
