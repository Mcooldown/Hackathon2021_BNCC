@extends('layouts.app')
@section('title', 'Accomodation Search - NginepKuy')
@section('content')
    <div class="container py-5">

        <div class="header-accomodation">
            <div class="d-flex justify-content-between">
                <h1>Accomodation in {{ $city->name }}, {{ $city->country }}</h1>
                
            </div>
            <div class="d-flex justify-content-between">
                <p>{{ $_GET['qty'] }} Rooms - {{ count($accomodations) }} accomodations found</p>
                <p class="">Date : {{ date('d-m-Y', $check_in) }} - {{ date('d-m-Y', $check_out) }}</p>
            </div>
            <input type="hidden" id="province" value="{{ $city->province }}">
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
