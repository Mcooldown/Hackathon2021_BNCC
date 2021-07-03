@extends('layouts.app')

@section('content')
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
