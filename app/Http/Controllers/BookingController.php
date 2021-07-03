<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Room $room)
    {
        return view('bookings.create', compact('room'));
    }

    public function store()
    {
        request()->validate([
            'quantity' => 'required|integer',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'room_id' => request('room_id'),
            'quantity' => request('quantity'),
            'check_in' => request('check_in'),
            'check_out' => request('check_out'),
        ]);

        return redirect('/')->with('success', 'Booking created');
    }
}
