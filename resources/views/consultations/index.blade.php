@extends('layouts.app')

@section('title', 'Travel Agent Consultation')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                @include('include.sidebar')
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-body my-3">
                        <h3 class="fw-bold" style="color:#00E1A4">Travel Agent Consultation</h3>
                        <p class="text-muted">Select your travel agent (Consultation Duration: 1 hour)</p>
                        <hr>
                        @foreach ($consultants as $consultant)
                            <div class="card my-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>{{ $consultant->name }}
                                            </h3>
                                            <p>{{ $consultant->ota_name }}</p>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end align-items-start">
                                            <a href="{{ route('consultations.create', $consultant->id) }}"
                                                class="btn btn-success">
                                                Choose this agent
                                            </a>
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
