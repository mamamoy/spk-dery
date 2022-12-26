@extends('home')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="breadcrumbs-content d-flex justify-content-center border pt-40 rounded-2 pb-40 border-secondary border-1">
                    <form class="w-75" action="{{ route('register.index') }}" method="POST">
                        @csrf
                        <p class="fs-4 fw-bold mb-30 text-white">ISI DATA PASIEN</p>
                        <!-- Username input -->
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label text-start">Username</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" autofocus required>
                              @error('username')
                                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>
                      
                        <!-- Password input -->
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" required>
                              @error('password')
                                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>

                        <!-- Usia input -->
                        <div class="mb-3 row">
                            <label for="usia" class="col-sm-2 col-form-label text-start">Usia</label>
                            <div class="col-sm-10 ">
                              <input type="number" class="form-control  @error('usia') is-invalid @enderror" name="usia" id="usia" ">
                              @error('usia')
                                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>
                        {{-- Jenis kelamin --}}
                        <div class="d-flex gap-4 mb-30">
                            <p>
                                Jenis Kelamin
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="laki-laki">
                                <label class="form-check-label" for="lakilaki">
                                Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">
                                Perempuan
                                </label>
                            </div>
                             
                            
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4  px-xl-5">Register</button>
                      
                        <!-- Register buttons -->
                        <div class="text-center">
                          <p>Sudah memiliki akun? <a href='/login'>Login</a></p>    
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection     