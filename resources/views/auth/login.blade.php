@extends('layout.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $title }}</h1>
                        <ul class="breadcrumb-nav">
                            <li>Forward Chaining</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start About Area -->
    <section class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form class="card login-form inner-content"action="/login" method="POST">
                        <div class="card-body">
                            <div class="title">
                                <h3>Login</h3>
                                <p>Silahkan masukkan data dibawah ini.</p>
                            </div>
                            @csrf
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="input-head">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-user"></i></label>
                                    <input class="form-control @error('username') is-invalid @enderror" type="text"
                                        name="username" id="username" placeholder="Masukkan username anda" required>
                                    @error('username')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group input-group">
                                    <label><i class="lni lni-lock-alt"></i></label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" id="password" placeholder="Masukkan password anda" required>
                                    @error('password')
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="button">
                                <button class="btn" type="submit">Masuk</button>
                            </div>
                            <h4 class="create-account">Belum memiliki akun? <a href="/register">Daftar disini</a>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
