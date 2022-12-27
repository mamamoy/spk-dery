@extends('layout.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $title }}</h1>
                        {{-- <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Sign Up</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form class="card login-form inner-content" action="{{ route('register.index') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3>Form Registrasi</h3>
                                <p>Isi data dibawah ini untuk menambahkan data pasien.</p>
                            </div>
                            <div class="input-head">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-user"></i></label>
                                    <input class="form-control @error('username') is-invalid @enderror" name="username"
                                        id="username" type="text" placeholder="Masukkan username anda" required>
                                    @error('username')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-lock-alt"></i></label>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password"
                                        id="password" type="password" placeholder="Masukkan password anda" required>
                                    @error('password')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-user"></i></label>
                                    <input class="form-control  @error('usia') is-invalid @enderror" name="usia"
                                        id="usia" type="number" placeholder="Masukkan usia anda" required>
                                    @error('usia')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="or"><span>Jenis Kelamin</span></div>
                                <div class="d-flex justify-content-around">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki"
                                            value="laki-laki">
                                        <label class="form-check-label" for="lakilaki">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan"
                                            value="perempuan">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>


                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Buat Akun</button>
                            </div>
                            <h4 class="create-account">Sudah memiliki akun? <a href="/login">Masuk</a>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
