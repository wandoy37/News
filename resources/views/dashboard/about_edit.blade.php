@extends('dashboard.layouts.app')

@section('main')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">About</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-agenda"></i>
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
                <a href="{{ route('about') }}" class="btn btn-primary btn-rounded">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <form action="{{ url("admin/about/$about->id") }}" method="POST">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="descripton">Description</label>
                                <textarea class="form-control" name="description" id="descripton" rows="4">{{ old('name', $about->description ) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea class="form-control" name="visi" id="visi" rows="4">{{ old('name', $about->visi ) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea class="form-control" name="misi" id="misi" rows="4">{{ old('name', $about->misi ) }}</textarea>
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