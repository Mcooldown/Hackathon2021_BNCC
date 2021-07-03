@extends('layouts.app')

@section('content')
    <div class="landing">
        <h2>
            Welcome To<br>
            NginepKuy!
        </h2>
    </div>

    <div class="pick-date">
        <form method="GET" action="{{ route('accomodations.index') }}" class="form-search">
            <div class="check-wrap">
                <h1>Booking Now</h1>
                <div class="d-flex justify-content-center line1">
                    <div>
                        <label>Check In Date</label>
                        <input type="date" class="form-control" name="check_in" id="check_in" />
                    </div>
                    <div>
                        <label>Check Out Date</label>
                        <input type="date" class="form-control" name="check_out" id="check_out" />
                    </div>
                </div>
                <div class="d-flex justify-content-center line2">
                    <div class="search-city justify-content-center">
                        <label>City, Hotel, Place to go</label>
                        <select class="form-select" name="city_id" id="city_id">
                            <option value="">Choose...</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="ms-4">
                        Rooms: <input type="number" min="0" name="qty" id="qty" class="form-control">
                    </div>
                </div>
                <div class="d-flex justify-content-center line3">
                    <div class="submit-search-city justify-content-center">
                        <input type="Submit" value="Submit" class="btn btn-secondary" />
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
