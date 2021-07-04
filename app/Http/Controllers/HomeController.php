<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = City::all();
        return view('home', compact('cities'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function covidinfo()
    {
        return view('covid.index');
    }

    public function covidnews()
    {
        return view('covid.news');
    }

    public function term()
    {
        return view('term');
    }

    public function about()
    {
        return view('about');
    }
}
