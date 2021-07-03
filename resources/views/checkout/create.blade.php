@extends('layouts.app')


@section('title', 'Checkout')
@section('content')
    <div class="container py-5 my-5">
        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
        <input type="hidden" name="day" value="{{ $day }}">
        <div class="card my-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/storage/images/{{ $booking->room->photo }}" width="100%" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3>{{ $booking->room->type }} - {{ $booking->room->accomodation->name }}</h3>
                        <p>{{ $booking->room->accomodation->address }} |
                            {{ $booking->room->accomodation->city->name }},
                            {{ $booking->room->accomodation->city->country }}</p>
                        <p>{{ $booking->room->description }}</p>
                        <hr>
                        <p>Check-in: {{ $booking->check_in }} <br>
                            Check-out: {{ $booking->check_out }}
                        </p>
                        <p>Room Quantity: {{ $booking->quantity }}</p>
                        <p>Total Day: {{ $day }}</p>
                    </div>
                    <div class="col-md-3">
                        <p>Room Price: Rp{{ $booking->room->price * $booking->quantity * $day }}</p>
                        <p>Health Protocol Fee (per room):
                            Rp{{ $booking->room->accomodation->health_protocol_fee }} x {{ $booking->quantity }}
                        </p>
                        <h5>Grand Total:
                            Rp{{ $booking->room->price * $booking->quantity * $day + $booking->room->accomodation->health_protocol_fee * $booking->quantity }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mt-5">DO YOUR PAYMENT NOW</h3>
        <hr>
        <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Bank Transfer
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body my-4">
                        <form action="{{ route('checkouts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                            <input type="hidden" name="day" value="{{ $day }}">
                            <input type="hidden" name="payment_type" value="BNK">
                            <p>Total Payment:
                                Rp{{ $booking->room->price * $booking->quantity * $day + $booking->room->accomodation->health_protocol_fee * $booking->quantity }}
                            </p>
                            <p>Transfer to: 3892478923748 a/n Brian</p>
                            <hr>
                            <label for="transfer_proof">Upload your transfer proof</label>
                            <input type="file" class="form-control" name="transfer_proof">

                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">CHECKOUT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Cut Balance
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body mt-3">
                        <form action="{{ route('checkouts.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                            <input type="hidden" name="day" value="{{ $day }}">
                            <input type="hidden" name="payment_type" value="BAL">
                            <p>Your Balance: Rp{{ auth()->user()->balance }}</p>
                            <p>Total Payment:
                                Rp{{ $booking->room->price * $booking->quantity * $day + $booking->room->accomodation->health_protocol_fee * $booking->quantity }}
                            </p>
                            <div class="d-flex justify-content-end">
                                @if (auth()->user()->balance < $booking->room->price * $booking->quantity * $day + $booking->room->accomodation->health_protocol_fee * $booking->quantity)
                                    <h5 class="fw-bold text-danger">Not enough balance</h5>
                                @else
                                    <button type="submit" class="btn btn-primary">CHECKOUT BY YOUR BALANCE</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
