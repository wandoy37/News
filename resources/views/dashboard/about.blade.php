@extends('dashboard.layouts.app')

@section('main')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">About</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-interface-6"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">About</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <table class="table">
                            <tbody class="text-center">
                                <tr>
                                    <td class="col-4">
                                        <small class="text-muted">Lasted Updated </small> <br>{{ $about->updated_at->format('d, M Y') }} <br>{{ $about->updated_at->format('H:i') }}
                                    </td>
                                    <td class="col-4">
                                        <a href="{{ url('/about') }}" class="text-decoration-none text-dark">About Us</a>
                                    </td>
                                    <td class="col-4">
                                        <form action="{{ url("admin/about/$about->id") }}">
                                            <a href="{{ url("admin/about/$about->id/edit") }}" class="btn btn-primary btn-round btn-sm">Edit</a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection