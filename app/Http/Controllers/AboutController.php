<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //function about
    public function about(){
        return view('about.about');
    }

    //function datail about
    public function datailabout(){
        return view('about.datailabout');
    }
}
