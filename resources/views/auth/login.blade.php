@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="content-login">
    <div class="logo-login" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-easing="ease-in-out">
        <a href="#">
            <img src="/storage/assets/logo1.png" alt="" width="250px">
            <p>Your Safety is our Priority</p>
        </a>
    </div>
    <div class="content-wraper-login card border-0 shadow mt-3 " data-aos="zoom-in-left">
        <div class="card-body my-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="login-form">
                <div class="wraping-form">
                    <label for="username"><b>Email :</b></label>
                    <p>
                        <input type="Email" class="@error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
                    </p>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="password"><b>Password :</b></label>
                    <p>
                        <input type="password" class="@error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                    </p>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="d-grid">
                <p id="save" class="save-btn-register"><input type="submit" value="{{ __('Login') }}" class="button" onclick="return validateLogin()"></p>
            </div>
        </div>

        {{-- <div class="container">
    <div class="row justify-content-center w-auto login-div">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    @endsection
