@extends('home.layouts.app')

@section('main')
<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">
        <!-- Nested row for non-featured blog posts-->
        <div class="row">
            
            @foreach ($artikel as $item)
            <div class="col-lg-6">
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="{{ asset('storage/' . $item->image) }}" width="100px" /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $item->created_at->diffForHumans() }}</div>
                        <h2 class="card-title h4">{{ $item->title }}</h2>
                        <span class="badge badge-primary text-dark">{{ $item->status }}</span>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <hr class="my-0" />
        <div class="d-flex justify-content-center">
            <!-- Pagination-->
            <nav aria-label="Pagination" class="mt-2">
                {{ $artikel->links('pagination::bootstrap-4') }}
            </nav>
        </div>
    </div>
    <!-- Side widgets-->
    <div class="col-lg-4">
        <!-- Search widget-->
        <div class="card mb-4">
            <div class="card-header">Search</div>
            <div class="card-body">
                <form action="/">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search.." value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Categories widget-->
        <div class="card mb-4">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled mb-0">
                            @foreach ($category as $item)
                                <li><a href="#!" class="badge bg-info">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection