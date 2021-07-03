<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomodation;
use App\Models\City;

class AccomodationController extends Controller
{
    public function index()
    {
        $accomodations = Accomodation::where('city_id', $_GET['city_id'])->get();
        $city = City::find($_GET['city_id']);
        $check_in = strtotime($_GET['check_in']);
        $check_out = strtotime($_GET['check_out']);
        $qty = $_GET['qty'];

        if($accomodations->count() == 0){
            return back()->with('error', 'there is no accomodation yet');
        }
        if($city == null){
            return back()->with('error', 'city cannot be null');
        }
        if($check_in == null){
            return back()->with('error', 'check in date cannot be null');
        }
        if($check_out == null){
            return back()->with('error', 'check out date cannot be null');
        }
        if($qty == null||$qty == 0){
            return back()->with('error', 'Rooms cannot be null');
        }
        if($check_in >= $check_out){
            return back()->with('error', 'Check in cannot be more than Check out');
        }
        return view('accomodation.index', compact('accomodations', 'city', 'check_in', 'check_out'));
    }

    public function indexCreate()
    {
        return view('accomodation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'photo' => 'image|max:10240',
            'city' => 'required|max:255',
            'address' => 'required',
        ]);
        $path = null;

        if ($request->photo) {
            $path = $request->file('photo')->store('images');
        }
        Accomodation::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'photo' => $path,
            'city' => $request->city,
            'address' => $request->address
        ]);


        return redirect('/');
    }
}
