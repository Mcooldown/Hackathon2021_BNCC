<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('create', 'store');
    }

    public function create()
    {
        $qty = $_GET['qty'];
        $check_in = $_GET['check_in'];
        $check_out = $_GET['check_out'];
        $room = Room::find($_GET['room_id']);
        return view('bookings.create', compact('room', 'qty', 'check_in', 'check_out'));
    }

    public function store()
    {
        Booking::create([
            'user_id' => auth()->user()->id,
            'room_id' => request('room_id'),
            'quantity' => request('quantity'),
            'check_in' => date('d-m-Y', request('check_in')),
            'check_out' => date('d-m-Y', request('check_out')),
        ]);

        return redirect('/')->with('success', 'Booking created');
    }
}
