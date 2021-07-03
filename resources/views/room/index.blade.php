@extends('layouts.app')

@section('content')
    <table>
        @foreach ($rooms as $room)
            <tr>
                <img src="{{ asset('storage/'.$room->photo) }}" alt=" {{ $room->photo  }}" height="250px" width=300px/>
                {{ $room->accomodation_id }}
                {{ $room->type }}
                {{ $room->description }}
                {{ $room->slot }}
                {{ $room->price }}
            </tr>
            <br>
        @endforeach
    </table>


@endsection
