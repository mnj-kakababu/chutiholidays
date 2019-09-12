<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Top_package;
use App\Offer;
use App\Top_destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $top_packages = Top_package::all();
        $offers = Offer::all();
        $top_destinations = Top_destination::all();
        return view('welcome',compact('sliders','top_packages', 'offers','top_destinations'));
    }
}
