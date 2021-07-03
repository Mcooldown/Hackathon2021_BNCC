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
                                <input type="Email" class="@error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="Email">
                            </p>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password"><b>Password :</b></label>
                            <p>
                                <input type="password" class="@error('password') is-invalid @enderror" name="password"
                                    id="password" placeholder="Password">
                            </p>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid">
                        <p id="save" class="save-btn-register"><input type="submit" value="{{ __('Login') }}"
                                class="button" onclick="return validateLogin()"></p>
                    </div>
            </div>
        @endsection
