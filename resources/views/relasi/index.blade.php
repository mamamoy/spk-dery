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
                        <form action="{{ route('relasi.store') }}" method="POST">
                            @csrf

                            <h2 class="text-center mb-5">{{ $subtitle }}</h2>
                            <div class="d-block justify-content-around">
                                <h4>Nama Penyakit</h4>
                                <div class="col-6 ms-5 mb-5">
                                    <select class="form-control select2" name="relasi_penyakit" style="width: 100%;">
                                        <option value="">Pilih Penyakit</option>
                                        @foreach ($penyakit as $p)
                                            <option value="{{ $p->id }}">
                                                {{ $p->kode }} - {{ $p->nama_penyakit }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <h4>Daftar Gejala</h4>
                                <div class="col-6 ms-5 mb-5">

                                    <select class="select2-multiple form-control" name="relasi_gejala[]" multiple="multiple"
                                        style="width: 100%">
                                        {{-- <option value="">Pilih Gejala</option> --}}
                                        @foreach ($gejala as $g)
                                            <option value="{{ $g->id }}">
                                                {{ $g->kode_gejala }} - {{ $g->nama_gejala }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
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
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2({
                // width: 'resolve',
                placeholder: 'Pilih Gejala',
                allowClear: true,
            });
        });
    </script>
@endpush
