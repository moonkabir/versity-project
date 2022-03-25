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
    //------academic view----------
    public function academic(){
        return view('front-end.academic.academic');
    }
    //------image gallery view----------
    public function image_gallery(){
        return view('front-end.gallery.image-gallery.image-gallery');
    }
    //------video gallery view----------
    public function video_gallery(){
        return view('front-end.gallery.video-gallery.video-gallery');
    }
    //------contact view----------
    public function contact(){
        return view('front-end.contact.contact');
    }
}
