@extends('dashboard.layouts.app')

@section('main')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Article</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-interface-6"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Article</a>
                </li>
            </ul>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <a href="{{ url('/article/create') }}" class="btn btn-primary btn-rounded">Add Article</a>
            </div>
        </div>

        {{-- @if ($errors->any())
            <div class="alert alert-warning font-weight-bold">
                    @foreach ($errors->all() as $error)
                <span>
                        <li>{{ $error }}</li>
                    @endforeach
                </span>
            </div>
        @endif --}}

        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col" width="15%">Date</th>
                                    <th scope="col">Title</th>
                                    {{-- <th scope="col">Image</th> --}}
                                    <th scope="col">Author</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel as $a)
                                <tr>
                                    <td class="text-center">{{ $a->created_at }}</td>
                                    <td>{{ $a->title }}</td>
                                    {{-- <td>
                                        <img src="{{ asset('storage/' . $a->image) }}" width="100px" alt="">
                                    </td> --}}
                                    <td>{{ $a->user->name }}</td>
                                    <td>{{ $a->category->name }}</td>
                                    <td class="text-center">
                                        @if ($a->status == 'publish')
                                            <span class="text-capitalize">{{ $a->status }}</span>
                                        @else
                                            <span class="text-capitalize text-danger">{{ $a->status }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ url("article/$a->slug") }}" method="POST">
                                            @csrf @method('DELETE')
                                            <a href="{{ url("/article/$a->slug/edit") }}" class="btn btn-primary btn-round btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-round btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            <span>Pagination Here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection