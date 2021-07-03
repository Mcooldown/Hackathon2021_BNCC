@extends('layouts.app')

@section('content')
<table>
    @foreach ($historys as $history)
    <tr>
        {{ $history->booking()->room()->accomodation()->name }}
        {{ $history->booking()->check_in }}
        {{ $history->booking()->check_out }}
        {{ $history->booking()->quantity }}
        {{ $history->total_payment }}

    </tr>
    <br>
    @endforeach
</table>
@endsection
