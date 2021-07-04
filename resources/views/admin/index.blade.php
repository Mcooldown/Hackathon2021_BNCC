@extends('layouts.app')
@section('title', 'Confirm User Checkouts')
@section('content')
    <div class="container">
        <h1>Checkout Confirmation</h1>
        <table class="table">
            <tr>
                <th>Booking ID</th>
                <th>User</th>
                <th>Total Payment</th>
                <th>Transfer Proof</th>
                <th>Action</th>
            </tr>
            @foreach ($checkouts as $checkout)
            <tr>
                <td>{{ $checkout->booking_id }}</td>
                <td>{{ $checkout->user->name }}</td>
                <td>{{ $checkout->total_payment }}</td>
                <td><img src="/storage/proof/{{ $checkout->transfer_proof }}" width="100px" alt="Transfer Proof"></td>
                <td>
                    <a href="{{ route('admin.accept', $checkout->id) }}"><button type="button" class="btn btn-hijau">Accept</button></a>
                    <a href="{{ route('admin.decline', $checkout->id) }}"><button type="button" class="btn btn-danger">Decline</button></a>
                </td>
            </tr>
            @endforeach
        </table>
        {{-- <h1>OTA Confirmation</h1>
        <table class="table">
            <tr>
                <th>Booking ID</th>
                <th>User</th>
                <th>Total Payment</th>
                <th>Transfer Proof</th>
                <th>Action</th>
            </tr>
            @foreach ($checkouts as $checkout)
            <tr>
                <td>{{ $checkout->booking_id }}</td>
                <td>{{ $checkout->user->name }}</td>
                <td>{{ $checkout->total_payment }}</td>
                <td><img src="/storage/proof/{{ $checkout->transfer_proof }}" width="100px" alt="Transfer Proof"></td>
                <td>
                    <a href="{{ route('admin.accept', $checkout->id) }}"><button type="button" class="btn btn-hijau">Accept</button></a>
                    <a href="{{ route('admin.decline', $checkout->id) }}"><button type="button" class="btn btn-danger">Decline</button></a>
                </td>
            </tr>
            @endforeach
        </table> --}}
    </div>
@endsection
