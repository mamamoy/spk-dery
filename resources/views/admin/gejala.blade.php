@extends('home')

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
                                    <form>
                                        <div class="mb-3 row mt-3">
                                            <label for="kodeGejala" class="col-sm-2 col-form-label">Kode</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kodeGejala" name="kodeGejala"
                                                    placeholder="Kode Gejala" value="{{ old('kodeGejala') }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                                    value="{{ old('deskripsi') }}" placeholder="Deskripsi Gejala">
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
                                                <tr>
                                                    <td width="200">{{ $kode }}</td>
                                                    <td>{{ $deskripsi }}</td>
                                                    <td width="200">
                                                        <div class="d-flex justify-content-around">
                                                            <a href="" class="btn btn-outline-warning btn-sm">
                                                                <span class="fa fa-pencil align-middle"
                                                                    title="Edit"></span> | Edit
                                                            </a>
                                                            <form method="POST" action="">
                                                                @csrf
                                                                {{-- @method('delete') --}}
                                                                <button type="submit"
                                                                    class="btn btn-outline-danger btn-sm"><span
                                                                        class="align-middle fa fa-trash"></span> | Hapus
                                                                </button>
                                                            </form>
                                                        </div>
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
            </div>
        </div>
    </section>
@endsection
