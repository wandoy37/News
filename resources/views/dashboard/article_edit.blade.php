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
                    <a href="#">Article Edit</a>
                    @if ($artikel->status == 'publish')
                        <span class="badge text-capitalize">{{ $artikel->status }}</span>
                    @else
                    <span class="badge badge-danger text-capitalize">{{ $artikel->status }}</span>
                    @endif
                    
                </li>
            </ul>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <a href="{{ route('article') }}" class="btn btn-primary btn-rounded">Back</a>
            </div>
        </div>

        <form action="{{ url("/article/$artikel->id") }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PATCH')
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-stats card-round">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <br>
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title..." value="{{ old('title', $artikel->title) }}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    @if ($artikel->image)
                                        <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid mt-3" width="70px" alt="imageArticle">
                                    @else
                                        <img class="img-fluid mt-3 img-preview" width="70px" alt="imageArticle">
                                    @endif
                                </div>
                            </div>
                            <div class="col-4 mt-2">
                                <div class="form-group">
                                    <label for="image">Images</label>
                                    <br>
                                    @error('image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <input type="hidden" name="oldImage" value="{{ $artikel->image }}">
                                    <input type="file" name="image" class="form-control-file" id="image">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="category">Category</label>
                            <br>
                            <select class="form-control" name="category" id="category">
                                @foreach ($kategori as $item)
                                    @if (old($item->id, $artikel->category_id) == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
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
                            <textarea name="content" type="text" id="summernote">{{ old('content', $artikel->content) }}</textarea>
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