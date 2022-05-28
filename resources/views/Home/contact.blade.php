@extends('home.layouts.app')

@section('main')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder text-primary">Ada yang bisa di bantu ?</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1>{{ $contact->title }}</h1>
            <div class="row row-cols-1 fs-5">
                <div class="col">
                    <p>
                        {{ $contact->address }}
                    </p>
                </div>
                <div class="col">
                    <div class="mb-3 text-primary fw-bold">
                        <a href="tel:082148722747" class="text-decoration-none">
                            <i class="bi bi-telephone-inbound-fill"></i>
                            {{ $contact->telephone }}
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 text-primary fw-bold">
                        <i class="bi bi-mailbox"></i>
                        {{ $contact->email }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 text-center">
                <iframe src="{{ $contact->map }}" width="350" height="200" style="border:10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    {{-- Social Media --}}
    <div class="row">
        <div class="col-md text-center">
            <div class="fs-2">
                Have more questions?
            </div>
            <small class="fs-5 text-muted">Contact us at</small>
        </div>
    </div>
    <div class="row row-cols-4 text-center my-4">
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="{{ $contact->twitter }}"><i class="bi-twitter"></i></a>
        </div>
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="{{ $contact->facebook }}"><i class="bi-facebook"></i></a>
        </div>
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}"><i class="bi-whatsapp"></i></a>
        </div>
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="{{ $contact->instagram }}"><i class="bi-instagram"></i></a>
        </div>
    </div>
</div>

    
@endsection