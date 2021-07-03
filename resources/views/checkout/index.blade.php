@extends('layouts.app')

@section('title', 'My Checkouts')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                @include('include.sidebar')
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-body my-3">
                        <h3>My Checkouts</h3>
                        <hr>
                        @foreach ($checkouts as $checkout)
                            <div class="card my-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img width="100%" class="rounded" src="/storage/images/{{ $checkout->booking->room->photo }}"
                                                alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3>{{ $checkout->booking->room->type }} -
                                                {{ $checkout->booking->room->accomodation->name }}
                                            </h3>
                                            <p>{{ $checkout->booking->room->accomodation->address }},
                                                {{ $checkout->booking->room->accomodation->city->name }},
                                                {{ $checkout->booking->room->accomodation->city->country }}</p>
                                            <hr>
                                            <p>{{ $checkout->booking->quantity }} Rooms <br>
                                                <b>Check-in: </b>{{ $checkout->booking->check_in }} <br>
                                                <b>Check-out: </b>{{ $checkout->booking->check_out }} <br>
                                            </p>
                                            <p>
                                                <b>Transaction Time: </b>{{ $checkout->created_at }} <br>
                                                <b>Grand Total: </b>Rp {{ number_format($checkout->total_payment) }} <br>
                                                <b>Status:</b>
                                                @if ($checkout->is_success == 1)
                                                    <span class="text-success fw-bold">Success</span>
                                                @elseif($checkout->is_success == 0)
                                                    <span class="text-warning fw-bold">Pending</span>
                                                @else
                                                    <span class="text-danger fw-bold">Failed</span>
                                                @endif
                                            </p>
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
