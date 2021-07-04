@extends('layouts.app')

@section('title', 'About Us')
@section('content')

<div class="box-term">
    <div class="card border-0 shadow mt-3 term-container">
        <h1>
            About Us!
        </h1>
        <hr>    
       <div class="term-content">
            <div class="terms">
                Welcome to NginepKuy!, your number one source for all Staycation things. We're dedicated to providing you
                <br>the very best of price, with an emphasis on safety, simplicity and effectiveness.
                <br><br>
                Founded in 2021 by BucinDev, NginepKuy! was first created at the BNCC Technoscape 2021 Hackathon
                <br>event. When BucinDev first started out, we passion for building best website and drove us to start their our
                <br>own business.
                <br><br>
                We hope you enjoy our services as much as we enjoy offering them to you. If you have any questions or
                <br>comments, please don't hesitate to contact us.
                <br><br>
                Sincerely,
                <br>
                BucinDev
            </div>
       </div>
    </div>
    <div class="card border-0 shadow mt-3 term-container">
        <h1 class="m-auto">
            Our Team!
        </h1>
        <hr>
        <div class="term-content">
           <div class="terms-bucindev">
                <div class="profile-bucindev">
                    <img src="/storage/assets/vincent.jpg" alt="">
                    <p>Vincent Hadinata</p>
                </div>
                <div class="profile-bucindev">
                    <img src="/storage/assets/ricky.jpg" alt="">
                    <p>Ricky</p>
                </div>
                <div class="profile-bucindev">
                    <img src="/storage/assets/brian.jpg" alt="">
                    <p>Brian Karnadi Japar</p>
                </div>
                <div class="profile-bucindev">
                    <img src="/storage/assets/kevin.jpg" alt="">
                    <p>Kevin Nathanael Taufiek</p>
                </div>
           </div>
       </div>
    </div>
</div>

@endsection

