@extends('dashboard.layouts.app')

@section('main')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Category</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-shapes"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Category Edit</a>
                </li>
            </ul>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <a href="{{ route('category') }}" class="btn btn-primary btn-rounded">Back</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-warning font-weight-bold">
                    @foreach ($errors->all() as $error)
                <span>
                        <li>{{ $error }}</li>
                    @endforeach
                </span>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <form action="{{ url("/category/$categories->id") }}" method="POST">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name Category</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name category" value="{{ old('name', $categories->name) }}">
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection