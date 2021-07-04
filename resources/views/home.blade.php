@extends('layouts.app')
@section('title', 'NginepKuy')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide landing" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/storage/assets/bgke1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/assets/bgke2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/assets/bgke3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/storage/assets/bgke4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev c-carousel-btn" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next c-carousel-btn" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
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
                                            <label for="city_id">City</label>
                                            <select class="form-select" name="city_id" id="city_id">
                                                <option value="">Choose...</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }},
                                                        {{ $city->country }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <label>Check-in</label>
                                            <input type="date" class="form-control" name="check_in" id="check_in" />
                                        </div>
                                        <div class="my-3">
                                            <label for="qty">Number of Reserved Rooms</label>
                                            <input type="number" min="1" name="qty" id="qty" class="form-control"
                                                placeholder="ex. 1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label>Place</label>
                                            <input type="text" placeholder="ex. Hotel ABC" class="form-control" name="place"
                                                id="place" />
                                        </div>
                                        <div class="my-3">
                                            <label>Check-out</label>
                                            <input type="date" class="form-control" name="check_out" id="check_out" />
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

    <div class="container">
        <div style="margin: 27rem 0 10rem 0;">
            <h1 class="text-teal fw-bold text-center">NginepKuy present in the midst of the COVID-19 pandemic that provides
                unique lodging in the form of villas, apartments, glamping, etc.</h1>

            <div class="row justify-content-between align-items-center" style="margin-top:10rem;">
                <div class="col-md-6 my-3">
                    <img src="/storage/assets/about1.jpg" class="rounded-30" alt="" width="100%">
                </div>
                <div class="col-md-5 my-3">
                    <h1 class="fw-bold text-teal">A platform that make your trip easier</h1>
                    <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis facere,
                        perferendis
                        quaerat deserunt numquam magni facilis laborum iusto cum a iste reprehenderit sunt quis quos
                        voluptate nisi placeat unde pariatur!</p>
                </div>
            </div>
        </div>
        <div style="margin:10rem 0;">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="/storage/assets/undraw2.svg" alt="" width="100%">
                </div>
                <div class="col-md-5 order-md-1">
                    <h1 class="fw-bold text-teal">Still find it difficult to plan your holiday?</h1>
                    <p class="mt-3">NginepKuy! present in the midst of the COVID-19 pandemic that provides
                        unique lodging in the form of villas, apartments, glamping, etc.</p>
                </div>
            </div>
        </div>

        <div style="margin: 10rem 0;">
            <h1 class="fw-bold text-teal">Our Recommendation for your Trip</h1>
            <p class="text-muted">Here are several recommendation for you</p>
            <hr>
            <div class="row">
                @foreach ($accomodations as $accomodation)
                    <div class="col-md-3">
                        <div class="card border-0 shadow rounded-30">
                            <div class="card-img-top">
                                <img src="/storage/images/{{ $accomodation->accomodation->photo }}" alt="" width="100%"
                                    style="border-radius: 30px 30px 0 0;">
                            </div>
                            <div class="card-body my-3">
                                <h5 class="text-teal fw-bold">{{ $accomodation->accomodation->name }}</h5>
                                <p class="text-muted">{{ $accomodation->accomodation->address }}
                                    <br>
                                    {{ $accomodation->accomodation->city->name }},
                                    {{ $accomodation->accomodation->city->country }}
                                    <br>
                                </p>
                                <span class="fw-bold text-dark">{{ $accomodation->total }} recommendations</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
