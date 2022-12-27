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
                            <form action="{{ route('gejala.update', $isi->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row mt-3">
                                    <label for="kode_gejala" class="col-sm-2 col-form-label">Kode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kode_gejala" name="kode_gejala"
                                            placeholder="Kode Gejala" value="{{ $isi->kode_gejala }}">
                                        @error('kode_gejala')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama_gejala" class="col-sm-2 col-form-label">Gejala</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_gejala" name="nama_gejala"
                                            value="{{ $isi->nama_gejala }}" placeholder="Deskripsi Gejala">
                                        @error('nama_gejala')
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
