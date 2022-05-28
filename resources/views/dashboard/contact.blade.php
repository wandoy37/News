@extends('dashboard.layouts.app')

@section('main')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Contact</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-book-open"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="title" name="title" class="form-control" id="title" placeholder="Title.." value="{{ old('title', $contact->title) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="address" name="address" class="form-control" id="address" placeholder="Address.." value="{{ old('address', $contact->address) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="telephone">Telephone</label>
                                        <input type="telephone" name="telephone" class="form-control" id="telephone" placeholder="Telephone.." value="{{ old('telephone', $contact->telephone) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email.." value="{{ old('email', $contact->email) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="map">Map</label>
                                        <input type="map" name="map" class="form-control" id="map" placeholder="map.." value="{{ old('map', $contact->map) }}">
                                        <div class="my-2">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6760180133238!2d117.17386020000001!3d-0.4839141999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df5d5f7e5c3f997%3A0x388faea3cbd43adb!2sJl.%20Gerilya%2C%20Kec.%20Sungai%20Pinang%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1653662053990!5m2!1sid!2sid" width="350" height="200" style="border:10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="twitter" name="twitter" class="form-control" id="twitter" placeholder="twitter.." value="{{ old('twitter', $contact->twitter) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="facebook" name="facebook" class="form-control" id="facebook" placeholder="Facebook.." value="{{ old('facebook', $contact->facebook) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="whatsapp">Whatsapp</label>
                                        <input type="whatsapp" name="whatsapp" class="form-control" id="whatsapp" placeholder="Whatsapp.." value="{{ old('whatsapp', $contact->whatsapp) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="instagram" name="instagram" class="form-control" id="instagram" placeholder="Instagram.." value="{{ old('instagram', $contact->instagram) }}">
                                    </div>
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection