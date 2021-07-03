<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomodation;
use App\Models\Rating;

class AccomodationController extends Controller
{
    public function index(){
        $accomodations = Accomodation::all();
        return view('accomodation.index', compact('accomodations'));
    }
    public function indexCreate(){
        return view('accomodation.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'category'=>'required',
            'city'=>'required|max:255',
            'address'=>'required',
        ]);
        $path=null;

        if($request->photo){
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
