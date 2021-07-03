@extends('layouts.app')
@section('title', 'Rooms - NginepKuy')
@section('content')
    <div class="container py-5">
        <a class="btn btn-hijau"
            href="{{ route('accomodations.index', ['qty' => $qty, 'city_id' => $accomodation->city->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">Back to accomodations</a>
        <div class="card my-2">
            <div class="card-body">
                <div class="d-flex">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/storage/images/{{ $accomodation->photo }}" width="100%" alt="">
                        </div>
                        <div class="col-md-10">
                            <input type="hidden" id="province" value="{{ $accomodation->city->province }}">
                            <h3>{{ $accomodation->name }}</h3>
                            <p>Type: {{ $accomodation->category->category_name }}</p>
                            <p>{{ $accomodation->city->name }}, {{ $accomodation->city->country }}</p>
                            <p>{{ $accomodation->address }}</p>
                        </div>
                    </div>
                    <div class="accomodation-rating">
                        Rating:
                        @php
                            $total=0;
                        @endphp
                        @foreach ($ratings as $rating)
                            @php
                                $total+=$rating->star
                            @endphp
                        @endforeach
                        @php
                            if($ratings->count() != 0){
                                echo $total/$ratings->count()."/5";
                            }
                            else {
                                echo "4.9"
                            }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2>Rooms</h2>
        @foreach ($rooms as $room)
            <div class="card my-2 mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/storage/images/{{ $room->photo }}" width="100%" alt="">
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $room->type }}</h3>
                            <h5>Rp{{ number_format($room->price)  }}</h5>
                            <p>{{ $room->description }}</p>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                            <a class="btn btn-hijau"
                                href="{{ route('bookings.create', ['qty' => $qty, 'room_id' => $room->id, 'check_in' => $check_in, 'check_out' => $check_out]) }}">BOOK
                                THIS NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        var provinsiName = [""];
        var kasusPositif = 0;
        var color = [""];

        const Http = new XMLHttpRequest();
        const url='https://indonesia-covid-19.mathdro.id/api/provinsi';
        Http.open('GET', url);
        Http.send();
        Http.onreadystatechange = () => {
            if (Http.readyState == 4 && Http.status == 200) {
                var coronaData = JSON.parse(Http.responseText);
                for (var i = 0; i < coronaData.data.length; i++) {
                    provinsiName[i]=coronaData.data[i].provinsi;
                    kasusPositif=parseInt(coronaData.data[i].kasusPosi);
                    if(kasusPositif < 12099){
                    color[i]="green"
                    }else if(kasusPositif >= 12099 && kasusPositif < 24198){
                    color[i]="yellow"
                    }else if(kasusPositif >= 24198 && kasusPositif < 36297){
                    color[i]="orange"
                    }else if(kasusPositif >= 36297 && kasusPositif < 48396){
                    color[i]="red"
                    }else{
                    color[i]="black"
                    }
                }
            }
            for(let i=0; i<provinsiName.length; i++){
                if(document.getElementById("province").value == provinsiName[i]){
                    console.log(color[i]);
                }
            }
        }
    </script>
@endsection
