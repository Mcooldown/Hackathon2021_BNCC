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
                                <input type="Email" name="email" id="email" placeholder="Email">
                            </p>
                            <label for="password"><b>Password :</b></label>
                            <p>
                                <input type="password" name="password" id="password" placeholder="Password">
                            </p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <p id="save" class="save-btn-register"><input type="submit" value="SIGN IN" class="button"></p>
                    </div>
                    <p class="register-btn"><b>Don't have an account?<a href="register.html"> Sign Up </a><b></p>
                </form>
            </div>
        </div>
    @endsection
