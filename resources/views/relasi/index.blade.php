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
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">{{ $namaPenyakit }}</option>
                                    <option value="2">{{ $namaPenyakit }}</option>
                                    <option value="3">{{ $namaPenyakit }}</option>
                                </select>
                            </div>
                            <h4>Daftar Gejala</h4>
                            <div class="table-responsive ms-5">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="100">1</th>
                                            <td>{{ $gejala }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
