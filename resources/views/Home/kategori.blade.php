@extends('home.layouts.app')

@section('main')

@include('home.layouts.components.banner')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">

                <div class="mb-2">
                    <h2>Berita berdasarkan kategori : {{ $category }}</h2>
                </div>

                <hr class="my-0 mb-4" />

                @forelse ($artikel as $a)
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/' . $a->image) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $a->created_at->diffForHumans() }}</div>
                            <span class="badge bg-info">
                                <a href="/kategori/{{ $a->category->slug }}" class="text-decoration-none link-light">{{ $a->category->name }}</a>
                            </span>
                            <h2 class="card-title h4">{{ $a->title }}</h2>
                            <a class="btn btn-primary" href="{{ url("/artikel/$a->slug") }}">Read more →</a>
                        </div>
                    </div>
                </div>
                @empty
                    <h3 class="text-center mb-4 text-muted">Berita tidak di temukan !!!</h3>
                @endforelse

                {{-- @foreach ($artikel as $a)
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/' . $a->image) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $a->created_at->diffForHumans() }}</div>
                            <span class="badge bg-info">
                                <a href="/kategori/{{ $a->category->slug }}" class="text-decoration-none link-light">{{ $a->category->name }}</a>
                            </span>
                            <h2 class="card-title h4">{{ $a->title }}</h2>
                            <a class="btn btn-primary" href="{{ url("/artikel/$a->slug") }}">Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach --}}
                
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0 mb-2" />
                <div class="d-flex justify-content-center">
                    {{-- {{ $artikel->links('pagination::bootstrap-4') }} --}}
                </div>
            </nav>
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
