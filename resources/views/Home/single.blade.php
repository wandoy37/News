@extends('home.layouts.app')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $artikel->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">{{ $artikel->created_at->format('d, M Y') }} author {{ $artikel->user->name }}</div>
                    <!-- Post categories-->
                    <a class="badge bg-info text-decoration-none link-light" href="{{ url('kategori/'. $artikel->category->slug) }}">{{ $artikel->category->name }}</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('storage/' . $artikel->image) }}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    {!! $artikel->content !!}
                </section>
            </article>
        </div> 
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form action="/">
                    <div class="input-group">
                            <input class="form-control" type="text" name="search" placeholder="Search artikel..." value="{{ old('search') }}"/>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($categories as $item)
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="/kategori/{{ $item->slug }}" class="badge bg-info text-decoration-none link-light">{{ $item->name }}</a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            @include('home.layouts.components.widget')
            @include('home.layouts.components.faq')
        </div>
    </div>
</div>

@endsection
