@extends('layouts.app')

@section('content')
<div class="landing">
    <h2>
        Welcome To<br>
        NginepKuy!
    </h2>
</div>


<div class="pick-date">
    <form action="" class="form-search">
        <div class="check-wrap">
            <h1>Booking Now</h1>
            <div class="d-flex justify-content-center line1">
                <div>
                    <label>Check In Date</label>
                    <input type="date" class="form-control"/>
                </div>
                <div>
                    <label>Check Out Date</label>
                    <input type="date" class="form-control"/>
                </div>
            </div>
            <div class="d-flex justify-content-center line2">
                <div class="search-city justify-content-center">
                    <label>City, Hotel, Place to go</label>
                    <input type="text" class="form-control search-city-input"/>
                </div>
            </div>
            <div class="d-flex justify-content-center line3">
                <div class="submit-search-city justify-content-center">
                    <input type="Submit" value="Submit" class="btn btn-secondary"/>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
