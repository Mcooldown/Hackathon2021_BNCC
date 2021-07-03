<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function create(Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            'accomodation_id' => 'required|integer',
            'type' =>'required|string',
            'photo' => 'image|max:10240',
            'description' => 'required|string',
            'slot' => 'required|integer',
            'price' => 'required|integer'
        ]);
        if($validator->fails()){
            return redirect(route('viewHome'))->withErrors($validator)->withInput();
        }

        $path = $request->file('room_photo')->store('assets');

        Room::create([
            'accomodation_id' => $request->accomodation_id,
            'type' => $request->type,
            'photo' => $path,
            'description' => $request->description,
            'slot' => $request->slot,
            'price' => $request->price
        ]);
        return redirect(route('viewHome'));
    }
}
