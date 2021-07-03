@extends('layouts.app')

@section('content')
    <table>
        <tr>
            @foreach ($accomodations as $accomodation)
                {{ $accomodation->name }}
                {{ $accomodation->category_id }}
                {{ $accomodation->city }}
                {{ $accomodation->address }}
            @endforeach
        </tr>
    </table>
@endsection
