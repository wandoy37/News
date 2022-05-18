@extends('home.layouts.app')

@section('main')
<div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">

        <article>
            <!-- Post header-->
            <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1">{{ $artikel->title }}</h1>
                <!-- Post meta content-->
                <div class="fst-italic text-muted mb-2">
                    <span >{{ $artikel->created_at->format('d, M Y') }}</span> 
                    <span>author {{ $artikel->user->name }}</span>
                    
                </div>
                <!-- Post categories-->
                <a class="badge bg-info text-decoration-none link-light" href="#!">{{ $artikel->category->name }}</a>
            </header>
            <!-- Preview image figure-->
            <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
            <!-- Post content-->
            <section class="mb-5">
                {!! $artikel->content !!}
            </section>
        </article>

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