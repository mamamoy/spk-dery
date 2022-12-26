@extends('home')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="breadcrumbs-content">
                    <div class="d-flex align-center justify-content-center mb-45 mt-100">
                        <p class="fs-4 fw-bold text-white ">SELAMAT DATANG DI SISTEM PAKAR DIAGNOSA PENYAKIT BALITA BERBASIS WEBSITE</p>
                    </div>
                    <div class="d-flex align-center justify-content-center gap-4 mb-110">
                        <a href="/login" type="button" class="btn btn-primary btn-lg">Login</a>
                        <a href="{{ route('register.index') }}" type="button" class="btn btn-outline-primary btn-lg">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection     