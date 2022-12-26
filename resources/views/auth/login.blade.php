@extends('home')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                <div class="breadcrumbs-content d-flex justify-content-center border pt-40 rounded-2 pb-40 border-secondary border-1">
                    <form class="w-75" action="/login" method="POST">
                      @csrf
                      @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>  
                      @endif
                      @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ session('loginError') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>  
                      @endif
                      <!-- Username input -->
                      <div class="mb-3 row">
                          <label for="username" class="col-sm-2 col-form-label text-start" >Username</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" autofocus>
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
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password">
                            @error('password')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                      </div>
                      
                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                          <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                              <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                          </div>
                      
                          <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                          </div>
                        </div>
                      
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4 px-xl-5">Login</button>
                      
                        <!-- Register buttons -->
                        <div class="text-center">
                          <p>Belum memiliki akun? <a href="{{ route('register.index') }}">Register</a></p>    
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection     