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
                    <a href="#">Category</a>
                </li>
            </ul>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#exampleModalCenter">
                    Add Category
                </button>
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
            <div class="col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col" width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->slug }}</td>
                                    <td class="text-center">
                                        <form action="{{ url("category/$d->id") }}" method="POST">
                                            @csrf @method('DELETE')
                                            <a href="{{ url("/category/$d->id/edit") }}" class="btn btn-primary btn-round btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-round btn-sm">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $data->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('/category') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name Category</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name category">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection