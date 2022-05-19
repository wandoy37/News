@extends('home.layouts.app')

@section('main')
<div class="col-lg-8">
    <div class="row">
        @foreach ($artikel as $a)
        <div class="col-lg-6">
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="{{ asset('storage/' . $a->image) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $a->created_at->diffForHumans() }}</div>
                    <span class="badge bg-info text-decoration-none link-light">{{ $a->category->name }}</span>
                    <h2 class="card-title h4">{{ $a->title }}</h2>
                    <a class="btn btn-primary" href="{{ url("/artikel/$a->slug") }}">Read more →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0 mb-2" />
        <div class="d-flex justify-content-center">
            {{ $artikel->links('pagination::bootstrap-4') }}
        </div>
    </nav>
</div> 
@endsection
