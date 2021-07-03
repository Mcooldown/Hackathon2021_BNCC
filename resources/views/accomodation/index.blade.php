@extends('layouts.app')
@section('title', "Result")
@section('content')
    <div class="container py-5">

        <h1>Accomodation in {{ $city->name }}, {{ $city->country }}</h1>
        <p>{{ date('d-m-Y', $check_in) }} - {{ date('d-m-Y', $check_out) }}</p>
        <p>{{ $_GET['qty'] }} Rooms</p>

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
                            <a class="btn btn-primary"
                                href="{{ route('rooms.index', ['qty' => $_GET['qty'], 'accomodation_id' => $accomodation->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">CHOOSE</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
