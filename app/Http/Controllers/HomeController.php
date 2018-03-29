<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //function home
    public function home(){
        return view('layouts.index');
    }

    //function contact
    public function contact(){
        return view('layouts.contact');
    }
}
