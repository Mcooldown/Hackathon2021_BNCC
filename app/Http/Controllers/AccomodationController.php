<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomodation;
use App\Models\City;
use App\Models\Rating;

class AccomodationController extends Controller
{
    public function index()
    {
        $accomodations = Accomodation::where('city_id', $_GET['city_id'])->get();
        $city = City::find($_GET['city_id']);
        $qty = $_GET['qty'];
        $check_in = strtotime('11-10-2021');
        $check_out = strtotime('13-10-2021');

        return view('accomodation.index', compact('accomodations', 'city', 'qty', 'check_in', 'check_out'));
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
