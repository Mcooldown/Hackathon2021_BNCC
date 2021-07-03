@extends('layouts.app')
@section('title', "Result")
@section('content')
    <div class="container py-5">

        <div class="header-accomodation">
            <h1>Accomodation in {{ $city->name }}, {{ $city->country }}</h1>
            <div class="d-flex justify-content-between">
                <p>{{ $_GET['qty'] }} Rooms - {{ count($accomodations) }} accomodations found</p>
                <p class="">Date : {{ date('d-m-Y', $check_in) }} - {{ date('d-m-Y', $check_out) }}</p>
            </div>
        </div>

        <hr>
        @foreach ($accomodations as $accomodation)
            <div class="card my-3 mb-4 ">
                <div class="card-body px-5">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="rounded" src="/storage/images/{{ $accomodation->photo }}" width="100%" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $accomodation->name }}</h3>
                            <p>{{ $accomodation->category->category_name }}</p>
                        </div>
                        <div class="col-md-3 text-end">
                            <h4>Rp {{ number_format($accomodation->cheaperRoom->price) }}</h4>
                            <a class="btn btn-hijau "
                                href="{{ route('rooms.index', ['qty' => $_GET['qty'], 'accomodation_id' => $accomodation->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">CHOOSE</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
