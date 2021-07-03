<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Accomodation;

class AccomodationController extends Controller
{
    public function index(){
        $accomodations = Accomodation::all();
        return view('', compact('accomodations'));
    }

    public function store(Request $request){
        $path = $request->file('foto_barang')->store('image_assets');
        Accomodation::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'photo' => $path,
            'city' => $request->city,
            'address' => $request->address
        ]);
    }
}
