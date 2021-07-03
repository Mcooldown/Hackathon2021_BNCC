@extends('layouts.app')

@section('content')
    <div class="container py-5 my-5">

    </div>

    <table>
        @foreach ($accomodations as $accomodation)
            <tr>
                {{ $accomodation->name }}
                {{ $accomodation->category_id }}
                {{ $accomodation->city }}
                {{ $accomodation->address }}
            </tr>
            <br>
        @endforeach
    </table>
@endsection
