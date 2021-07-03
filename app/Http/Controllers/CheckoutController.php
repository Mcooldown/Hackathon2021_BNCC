<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckoutController extends Controller
{
    public function create(Booking $booking)
    {

        return redirect('/home');
    }

    public function store()
    {
        $booking = Booking::find(request('booking_id'));
        $day = intval(round((strtotime($booking->check_out) - strtotime($booking->check_in)) / (60 * 60 * 24)));
        $totalPayment = $booking->room->price * $booking->quantity * $day;

        if (request()->payment_type == 'BAL') {
            User::find(auth()->user()->id)->update([
                'balance' => auth()->user()->balance - $totalPayment,
            ]);
        } else {
        }
    }

    public function history()
    {
        $historys = Checkout::where('user_id', Auth::user()->id)->get();

        return view('checkout.history', compact('historys'));
    }
}
