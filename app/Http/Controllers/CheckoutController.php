<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Checkout;
use Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request){
        $book = Booking::find($request->booking_id);
        $payment = $book->room()->price;
        $payment = $payment * $book->quantity;

        // $cin = date_create('10/16/2003');
        // $cout = date_create('11/16/2003');
        // $payment = date_diff($cin,$cout);
        // dd($payment);

        $cin = date_create($book->check_in);
        $cout = date_create($book->check_out);

        $payment *= date_diff($cin,$cout);

        Checkout::create([
            'booking_id' => $request->booking_id,
            'total_payment' => $payment,
            'user_id'=> Auth::user()->id
        ]);
        return redirect('/home');
    }

    public function history(){
        $historys = Checkout::where('user_id',Auth::user()->id)->get();

        return view('checkout.history',compact($historys));
    }
}
