@extends('layouts.app')

@section('title', 'Chat Consultations - NginepKuy')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                @include('include.sidebar')
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-body my-3">
                        <h3 class="fw-bold text-teal">Your Consultations</h3>
                        <hr>
                        @foreach ($consultations as $consultation)
                            <div class="card my-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>
                                                @if (auth()->user()->id == $consultation->user_id)
                                                    {{ $consultation->ota->name }} -{{ $consultation->ota->ota_name }}
                                                @else
                                                    {{ $consultation->user->name }}
                                                @endif
                                            </h3>
                                            @if ($consultation->is_eligible == 0)
                                                <p class="text-danger">Not Eligible/ Waiting for confirmation</p>
                                            @else
                                                <p class="text-success">Eligible</p>
                                            @endif
                                            <p class=""></p>
                                            <p>
                                                @if ($consultation->start_time == null)
                                                    Please choose "Start" button to start your consultation
                                                @else
                                                    Finished at {{ $consultation->end_time }}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            @if ($consultation->start_time != null && strtotime($consultation->end_time) <= time())
                                                <p class="fw-bold text-danger">Consultation has been ended</p>
                                            @else
                                                <a href="{{ route('chat-consultations.show', $consultation) }}"
                                                    class="btn btn-primary">Start Consultation</a>
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
