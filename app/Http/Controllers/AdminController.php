<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        $checkouts = Checkout::where('payment_type','LIKE','BNK')->where('is_success','0')->get();




        return view('admin.index', compact('checkouts'));
    }

    public function accept($id){
        Checkout::find($id)->update([
            'is_success' => '1'
        ]);
        return back();
    }

    public function decline($id)
    {
        Checkout::find($id)->update([
            'is_success' => '3'
        ]);
        return back();
    }
}
