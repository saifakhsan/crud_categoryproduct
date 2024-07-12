@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 my-4">
            <h2>Add New Category</h2>
        </div>
    </div>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <div class="alert alert-danger mt-2">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </form>
</div>
@endsection
