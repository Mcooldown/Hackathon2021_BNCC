@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 shadow">
                    <div class="card-body my-3">
                        <h3>{{ auth()->user()->name }}</h3>
                        <p>Balance: Rp{{ auth()->user()->balance }}</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ route('home') }}">Create New Booking</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}">My Bookings</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}">Consultation with Travel Agent</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-body my-3">
                        <h3>My Bookings</h3>
                        <hr>
                        @foreach ($bookings as $booking)
                            <div class="card my-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img width="100%" src="/storage/images/{{ $booking->room->photo }}" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>{{ $booking->room->type }} - {{ $booking->room->accomodation->name }}
                                            </h3>
                                            <p>{{ $booking->room->accomodation->address }},
                                                {{ $booking->room->accomodation->city->name }},
                                                {{ $booking->room->accomodation->city->country }}</p>
                                            <hr>
                                            <p>{{ $booking->quantity }} Rooms <br>
                                                Check-in: {{ $booking->check_in }} <br>
                                                Check-out: {{ $booking->check_out }} <br>
                                                Booked at: {{ $booking->created_at }}
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('checkouts.create', $booking) }}"
                                                class="btn btn-primary">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
