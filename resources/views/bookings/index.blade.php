@extends('layouts.app')

@section('title', 'Bookings - NginepKuy')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                @include('include.sidebar')
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
                                            @if ($booking->checkout->id)
                                                <p class="text-success">Already checkout</p>
                                            @else
                                                <a href="{{ route('checkouts.create', $booking) }}"
                                                    class="btn btn-primary">Checkout</a>
                                            @endif
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
