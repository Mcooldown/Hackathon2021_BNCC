@extends('layouts.app')

@section('title', 'Chat Consultations - NginepKuy')
@section('content')
<meta http-equiv="refresh" content="5">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                @include('include.sidebar')
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-body my-3">
                        <h3 class="fw-bold text-teal">Consultation - {{ $consultation->ota->name }}</h3>
                        <hr>
                        <div class="card mt-2 mb-4" id="chatting-box" style="width: 100%; height: 300px !important;overflow-y:scroll">
                            <div class="card-body">
                                <div class="text-center text-muted">-- Consultation started --</div>
                                @foreach ($chatConsultations as $chatConsultation)
                                    <div
                                        class="d-flex align-items-center
                                                                                                                                                                                                                                      {{ $chatConsultation->sender_id == auth()->user()->id ? 'justify-content-end' : '' }} my-2">
                                        <div class="{{ $chatConsultation->sender_id == auth()->user()->id ? 'order-2' : '' }}"
                                            style="border-radius:50%;width: 50px;height:50px;background:black"></div>
                                        <div
                                            class="{{ $chatConsultation->sender_id == auth()->user()->id ? 'order-1 me-3' : 'ms-3' }}">
                                            <div
                                                class="{{ $chatConsultation->sender_id == auth()->user()->id ? 'text-end' : '' }}">
                                                <small>{{ $chatConsultation->sender->name }}</small>
                                            </div>
                                            <div class="py-2 px-3 rounded-pill bg-primary text-white">
                                                {{ $chatConsultation->message }}</div>
                                        </div>
                                        <small style="font-size:11px;"
                                            class="align-self-end text-muted mx-2">{{ date('H:i', strtotime($chatConsultation->created_at)) }}</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @if (strtotime($consultation->end_time) <= time())
                            <p class="fw-bold text-danger">Consultation has been ended</p>
                        @else
                            <form action="{{ route('chat-consultations.store') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $consultation->id }}" name="consultation_id">
                                <div class="row">
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="message" id="message"
                                            placeholder="Type your message here">
                                    </div>
                                    <div class="col-2">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var chatbox = document.getElementById("chatting-box");
        chatbox.scrollTop = chatbox.scrollHeight;

        // function update(){
        //     $("#chatting-box").load(window.location.href +" #chatting-box");
        // }

        // setInterval(update(),3000);
    </script>
@endsection
