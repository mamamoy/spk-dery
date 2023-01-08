@extends('layout.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $title }}</h1>
                        <ul class="breadcrumb-nav">
                            <li>User</li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Data Pasien</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service text-start">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" id="nama" value="{{$nama}}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="usia" value="{{$usia}}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="jenis_kelamin" value="{{$jenisKelamin}}" readonly>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Hasil Diagnosa</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service text-start">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Penyakit</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="nama" value="{{$penyakit}}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="usia" class="col-sm-2 col-form-label">Gejala</label>
                            <div class="col-sm-10">
                                @foreach ($gejala as $g)
                                    <ol>
                                    <li>{{$g['nama']}}</li>
                                    </ol>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Solusi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" id="jenis_kelamin" value="" readonly>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
