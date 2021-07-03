@extends('layouts.app')

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
                                            <img width="100%" src="/storage/images/{{ $checkout->booking->room->photo }}"
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
                                                Check-in: {{ $checkout->booking->check_in }} <br>
                                                Check-out: {{ $checkout->booking->check_out }} <br>
                                            </p>
                                            <p>
                                                Transaction Time: {{ $checkout->created_at }} <br>
                                                Grand Total: Rp{{ $checkout->total_payment }} <br>
                                                Status:
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
