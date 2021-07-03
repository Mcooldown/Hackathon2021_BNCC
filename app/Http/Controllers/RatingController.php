<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function index(){
        return view('ratings.index');
    }

    public function store(Request $request){
        $request->validate([
            'star'=> 'required|numeric',
            'comment' => 'required|min:10',
            'accomodation_id' => 'required'
        ]);

        Rating::create([
            'star' => $request->star,
            'comment' => $request->comment,
            'accomodation_id' => $request->accomodation_id,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/');
    }
}
