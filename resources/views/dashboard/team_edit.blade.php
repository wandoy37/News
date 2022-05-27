@extends('dashboard.layouts.app')

@section('main')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Teams</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-user-5"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <span>{{ $team->name }}</span>
                </li>
            </ul>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <a href="{{ route('about') }}" class="btn btn-primary btn-rounded">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <form action="{{ url("/admin/team/$team->id") }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama lengkap.." value="{{ old('name', $team->name) }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Posisi / Jabatan</label>
                                <input type="text" class="form-control" name="position" id="position" placeholder="Nama lengkap.." value="{{ old('position', $team->position) }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Image</label>
                                    <br>
                                    @if ($team->image)
                                        <img src="{{ asset('storage/' . $team->image) }}" class="img-fluid mt-3 avatar avatar-xl avatar-img rounded-circle" width="100px" alt="image..">
                                    @else
                                        <img class="img-fluid mt-3 avatar avatar-xl avatar-img rounded-circle" src="{{ asset('storage/avatar/profile.jpg') }}" width="100px" alt="image..">
                                    @endif
                                    
                                    <input type="hidden" name="oldImage" value="{{ $team->image }}">
                                    <input type="file" name="image" class="form-control-file mt-2" id="image">
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