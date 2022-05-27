@extends('home.layouts.app')

@section('main')
<!-- Header-->
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">About Us</h1>
                    <p class="lead fw-normal text-muted mb-4">{{ $about->description }}</p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<div class="text-center my-5">
    <h1 class="fw-bolder mb-3">Visi & Misi</h1>
</div>


<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('home/img/vision.png') }}" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Visi</h2>
                <p class="lead fw-normal text-muted mb-0">{{ $about->visi }}</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('home/img/mision.png') }}" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Misi</h2>
                <p class="lead fw-normal text-muted mb-0">{{ $about->misi }}</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            @foreach ($team as $team)
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    @if ($team->image)
                        <img src="{{ asset('storage/' . $team->image) }}" class="img-fluid mt-3 avatar avatar-xl avatar-img rounded-circle" width="100px" alt="image..">
                    @else
                        <img class="img-fluid mt-3 avatar avatar-xl avatar-img rounded-circle" src="{{ asset('storage/avatar/profile.jpg') }}" width="100px" alt="image..">
                    @endif
                    <h5 class="fw-bolder">{{ $team->name }}</h5>
                    <div class="fst-italic text-muted">{{ $team->position }}</div>
                </div>
            </div>
            @endforeach
            
            {{-- <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                    <h5 class="fw-bolder">Arden Vasek</h5>
                    <div class="fst-italic text-muted">CFO</div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
    
@endsection