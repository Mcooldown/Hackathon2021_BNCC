<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Accomodation $accomodation)
    {
        return view('bookings.create', compact('accomodation'));
    }

    public function store()
    {
        request()->validate([
            ''
        ]);
    }
}
