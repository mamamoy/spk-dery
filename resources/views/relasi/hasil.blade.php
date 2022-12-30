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
                            <h4>Nama Penyakit</h4>
                            <div class="col-6 ms-5 mb-5">
                                <select class="form-control select2" name="relasi_penyakit" id="relasi_penyakit"
                                    style="width: 100%;">
                                    <option value="">Pilih Penyakit</option>
                                    @foreach ($penyakit as $p)
                                        <option value="{{ $p->id }}">
                                            {{ $p->kode }} - {{ $p->nama_penyakit }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <h4>Daftar Gejala</h4>
                        <div class="col-6 ms-5 mb-5">
                            <ul class="list-group list-group-flush listOrder">

                            </ul>
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#relasi_penyakit").on('change', function() {
            var relasi_penyakit = $("#relasi_penyakit").val();
            // console.log(relasi_penyakit);

            $.ajax({
                type: 'POST',
                url: "{{ route('ajaxRequest.post') }}",
                data: {
                    relasi_penyakit: relasi_penyakit
                },

                success: function(data) {
                    // console.log(data);
                    $(".listOrder").html(data);
                }
            });
        });
    </script>
@endpush
