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
            <h1>Kantor Pusat News Berita Digital</h1>
            <div class="row row-cols-1 fs-5">
                <div class="col">
                    <p>
                        Jalan Gerilya RT.51 No.06, Sungai Pinang Dalam, Kalimantan Timur - Indonesia.
                    </p>
                </div>
                <div class="col">
                    <div class="mb-3 text-primary fw-bold">
                        <a href="tel:082148722747" class="text-decoration-none">
                            <i class="bi bi-telephone-inbound-fill"></i>
                            0821 4872 2747
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 text-primary fw-bold">
                        <i class="bi bi-mailbox"></i>
                        newsdigital@mail.com
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6760180133238!2d117.17386020000001!3d-0.4839141999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5d5f7e5c3f997%3A0x388faea3cbd43adb!2sJl.%20Gerilya%2C%20Kec.%20Sungai%20Pinang%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1653662053990!5m2!1sid!2sid" width="350" height="200" style="border:10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <a class="fs-1 px-2 link-primary" href="#!"><i class="bi-twitter"></i></a>
        </div>
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="#!"><i class="bi-facebook"></i></a>
        </div>
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="#!"><i class="bi-whatsapp"></i></a>
        </div>
        <div class="col-sm">
            <a class="fs-1 px-2 link-primary" href="#!"><i class="bi-instagram"></i></a>
        </div>
    </div>
</div>

    
@endsection