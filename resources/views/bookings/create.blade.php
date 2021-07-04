@extends('layouts.app')

@section('title', 'Bookings - NginepKuy')
@section('content')
    <div class="container py-5 mb-5">
        <a class="btn btn-hijau btn-lg rounded-pill"
            href="{{ route('rooms.index', ['qty' => $qty, 'accomodation_id' => $room->accomodation->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">Back
            to accomodations</a>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value="{{ $_GET['room_id'] }}">
            <div class="card my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded" src="/storage/images/{{ $room->photo }}" width="100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <h3>{{ $room->type }} - {{ $room->accomodation->name }}</h3>
                            <p>{{ $room->accomodation->address }} | {{ $room->accomodation->city->name }},
                                {{ $room->accomodation->city->country }}</p>
                            <hr>
                            <p><b>Check-in:</b>
                                <input type="hidden" class="border-0" readonly value="{{ $_GET['check_in'] }}"
                                    name="check_in">
                                {{ $_GET['check_in'] }}
                            </p>
                            <p> <b>Check-out:</b>
                                <input type="hidden" class="border-0" readonly value="{{ $_GET['check_out'] }}"
                                    name="check_out">
                                {{ $_GET['check_out'] }}
                            </p>
                            <p><b>Description</b><br>{{ $room->description }}</p>
                            <p>Room Quantity: <input type="text" class="border-0" readonly value="{{ $_GET['qty'] }}"
                                    name="quantity"></p>
                            <h5><b>Price per Night:</b> Rp{{ $room->price }}</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">

                <button type="submit" class="btn btn-hijau">CREATE BOOKING</button>
            </div>
        </form>
    </div>
@endsection
