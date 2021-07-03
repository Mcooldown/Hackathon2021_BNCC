@extends('layouts.app')
@section('title', 'Rooms')
@section('content')
    <div class="container py-5">
        <a class="btn btn-hijau"
            href="{{ route('accomodations.index', ['qty' => $qty, 'city_id' => $accomodation->city->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">Back to accomodations</a>
        <div class="card my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="/storage/images/{{ $accomodation->photo }}" width="100%" alt="">
                    </div>
                    <div class="col-md-10">
                        <h3>{{ $accomodation->name }}</h3>
                        <p>Type: {{ $accomodation->category->category_name }}</p>
                        <p>{{ $accomodation->city->name }}, {{ $accomodation->city->country }}</p>
                        <p>{{ $accomodation->address }}</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2>Rooms</h2>
        @foreach ($rooms as $room)
            <div class="card my-2 mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/storage/images/{{ $room->photo }}" width="100%" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $room->type }}</h3>
                            <h5>Rp{{ number_format($room->price)  }}</h5>
                            <p>{{ $room->description }}</p>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                            <a class="btn btn-hijau"
                                href="{{ route('bookings.create', ['qty' => $qty, 'room_id' => $room->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">BOOK
                                THIS NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <table>
        @foreach ($rooms as $room)
            <tr>
                {{ $room->name }}
                {{ $room->category_id }}
                {{ $room->city }}
                {{ $room->address }}
            </tr>
            <br>
        @endforeach
    </table> --}}
@endsection
