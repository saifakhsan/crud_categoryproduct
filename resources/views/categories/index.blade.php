@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2>Category List</h2>
            <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
            <a class="btn btn-success" href="{{ route('products.index') }}"> Show All Products</a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $index => $category)
        <tr>
            <td>{{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</td>
            <td>
                <a href="{{ route('categories.products', $category->id) }}">{{ $category->name }}</a>
            </td>
            <td>
                <form class="delete-form" onsubmit="return confirm('Are You Sure?')" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-button">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    <div class="mt-4">
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
