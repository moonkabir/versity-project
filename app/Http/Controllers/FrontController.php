<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //------home view----------
    public function home_view(){
        return view('front-end.home.home');
    }
    //------about view----------
    public function about(){
        return view('front-end.about.about');
    }
    //------administration view----------
    public function administration(){
        return view('front-end.administration.administration');
    }
    //------about view----------
    public function academic(){
        return view('front-end.academic.academic');
    }
}
