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
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <h2 class="text-center mb-5">{{ $subtitle }}</h2>
                        <div class="d-block justify-content-around">
                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tambah-tab" data-bs-toggle="tab"
                                        data-bs-target="#tambah-tab-pane" type="button" role="tab"
                                        aria-controls="tambah-tab-pane" aria-selected="true">Tambah</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ubah-tab" data-bs-toggle="tab"
                                        data-bs-target="#ubah-tab-pane" type="button" role="tab"
                                        aria-controls="ubah-tab-pane" aria-selected="false">Ubah</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tambah-tab-pane" role="tabpanel"
                                    aria-labelledby="tambah-tab" tabindex="0">
                                    <form action="{{ route('penyakit.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3 row mt-3">
                                            <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode" name="kode"
                                                    placeholder="Kode Penyakit" value="{{ old('kode') }}">
                                                @error('kode')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nama_penyakit" class="col-sm-2 col-form-label">Nama Penyakit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_penyakit"
                                                    name="nama_penyakit" value="{{ old('nama_penyakit') }}"
                                                    placeholder="Nama Penyakit">
                                                @error('nama_penyakit')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="definisi" class="col-sm-2 col-form-label">Definisi</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="definisi" name="definisi" value="{{ old('definisi') }}"
                                                    placeholder="Deskripsi Definisi"></textarea>
                                                @error('definisi')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="solusi" name="solusi"
                                                    value="{{ old('solusi') }}" placeholder="Solusi">
                                                @error('solusi')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="mt-5 mb-3 text-center">
                                            <button type="submit" class="btn btn-success"><span
                                                    class="fa fa-bookmark align-middle"></span> |
                                                Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="ubah-tab-pane" role="tabpanel" aria-labelledby="ubah-tab"
                                    tabindex="0">
                                    <div class="table-responsive mt-3">
                                        <table class="table align-middle">
                                            <thead>
                                                <tr class="text-center">
                                                    <th scope="col">Kode</th>
                                                    <th scope="col">Nama Penyakit</th>
                                                    <th scope="col">Pilihan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider text-center">
                                                @foreach ($isi as $item)
                                                    <tr>
                                                        <td width="200">{{ $item['kode'] }}</td>
                                                        <td>{{ $item['nama_penyakit'] }}</td>
                                                        <td width="200">
                                                            <div class="d-flex justify-content-around">
                                                                <a href="/penyakit/{{ $item->id }}/edit"
                                                                    class="btn btn-outline-warning btn-sm">
                                                                    <span class="fa fa-pencil align-middle"
                                                                        title="Edit"></span> | Edit
                                                                </a>
                                                                <form method="POST"
                                                                    action="{{ route('penyakit.destroy', $item->id) }}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-sm"><span
                                                                            class="align-middle fa fa-trash"></span> |
                                                                        Hapus
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
