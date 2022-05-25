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
                <a href="{{ route('article') }}" class="btn btn-primary btn-rounded">Back</a>
            </div>
        </div>

        <form action="{{ url('admin/article') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-stats card-round">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title..." value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4 mt-2">
                                <div class="form-group">
                                    <label for="image">Images</label>
                                    <input type="file" name="image" class="form-control-file" id="image">
                                    @error('image')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="category">Category</label>
                            <br>
                            @error('category')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <select class="form-control" name="category">
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-stats card-round">
                        <div class="form-group">
                            <label for="summernote">Content</label>
                            <br>
                            @error('content')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <textarea name="content" type="text" id="summernote">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group d-flex justify-content-end pb-4 mr-4">
                            <input type="submit" name="status" value="publish" class="btn btn-info mr-4">
                            <input type="submit" name="status" value="draft" class="btn btn-warning mr-4">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection