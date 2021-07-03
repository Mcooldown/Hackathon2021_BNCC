@extends('layouts.app')
@section('title', "Home")
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide landing" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="/storage/assets/bg.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block marginHome">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/storage/assets/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block marginHome">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/storage/assets/bg3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block marginHome">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="pick-date">
        <form method="GET" action="{{ route('accomodations.index') }}" class="form-search">
            <div class="card border-0 shadow mt-3 check-wrap">
                <div class="card-body my-3">
                    <h1>Booking Now</h1>
                    <div class="d-flex justify-content-center line1">
                        <div class="booking-item">
                            <label>Check In Date</label>
                            <input type="date" class="form-control" name="check_in" id="check_in" />
                        </div>
                        <div class="booking-item">
                            <label>Check Out Date</label>
                            <input type="date" class="form-control" name="check_out" id="check_out" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center line2">
                        <div class="search-city justify-content-center city-list booking-item">
                            <label>City, Hotel, Place to go</label>
                            <select class="form-select" name="city_id" id="city_id">
                                <option value="">Choose...</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="booking-item">
                            Rooms: <input type="number" min="0" name="qty" id="qty" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center line3">
                        <div class="submit-search-city justify-content-center">
                            <input class="search-city-submit" type="Submit" value="Search" class="btn btn-secondary" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="about">

    </div>

@endsection
