@extends('home.layouts.app')

@section('main')
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
@endsection
