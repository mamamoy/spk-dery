@extends('layout.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $title }}</h1>
                        <ul class="breadcrumb-nav">
                            <li>Admin</li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="content wow fadeInRight" data-wow-delay=".4s">
                        <h2 class="text-center mb-5">{{ $subtitle }}</h2>
                        <div class="d-block justify-content-around">
                            <div class="align-middle mb-4">
                                <a href="{{ route('penyakit.index') }}" class="btn btn-secondary ">
                                    <span class="fa fa-arrow-left" title="Edit"></span> | Kembali
                                </a>
                            </div>
                            <form action="{{ route('penyakit.update', $isi->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row mt-3">
                                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kode" name="kode"
                                            placeholder="Kode Penyakit" value="{{ $isi->kode }}">
                                        @error('kode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama_penyakit" class="col-sm-2 col-form-label">Nama Penyakit</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit"
                                            value="{{ $isi->nama_penyakit }}" placeholder="Nama Penyakit">
                                        @error('nama_penyakit')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="definisi" class="col-sm-2 col-form-label">Definisi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="definisi" name="definisi"
                                            value="{{ $isi->definisi }}" placeholder="Deskripsi Definisi"
                                            style="height: 100px">
                                        @error('definisi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="solusi" name="solusi"
                                            value="{{ $isi->solusi }}" placeholder="Solusi">
                                        @error('solusi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" value="{{ $isi->id }}">
                                <div class="mt-5 mb-3 text-center">
                                    <button type="submit" class="btn btn-success"><span
                                            class="fa fa-bookmark align-middle"></span> |
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
