@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1> in {{ $city->name }}, {{ $city->country }}</h1>
        <p>{{ $qty }} Rooms</p>
        <p>{{ count($accomodations) }} accomodations found</p>
        <hr>
        @foreach ($accomodations as $accomodation)
            <div class="card my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/storage/images/{{ $accomodation->photo }}" width="100%" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $accomodation->name }}</h3>
                            <p>{{ $accomodation->category->category_name }}</p>
                        </div>
                        <div class="col-md-3">
                            <h3>Rp{{ $accomodation->cheaperRoom->price }}</h3>
                            <a href="{{ route('bookings.create') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <table>
        @foreach ($accomodations as $accomodation)
            <tr>
                {{ $accomodation->name }}
                {{ $accomodation->category_id }}
                {{ $accomodation->city }}
                {{ $accomodation->address }}
            </tr>
            <br>
        @endforeach
    </table> --}}
@endsection
