@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide landing" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
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

    <div class="pick-date p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 shadow px-3" style="border-radius: 30px">
                        <div class="card-body my-3">
                            <h2 class="fw-bold" style="color:#00E1A4">Where do you want to go?</h2>
                            <p class="text-muted">Your safety, our priority</p>
                            <hr>
                            <form method="GET" action="{{ route('accomodations.index') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label>Check-in</label>
                                            <input type="date" class="form-control" name="check_in" id="check_in" />
                                        </div>
                                        <div class="my-3">
                                            <label>Check-out</label>
                                            <input type="date" class="form-control" name="check_in" id="check_in" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="city_id">City, Hotel, Place to go</label>
                                            <select class="form-select" name="city_id" id="city_id">
                                                <option value="">Choose...</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <label for="qty">Number of Reserved Rooms</label>
                                            <input type="number" min="1" name="qty" id="qty" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input class="search-city-submit" type="Submit" value="Search "
                                        class="btn btn-secondary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about"></div>

@endsection
