<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //function news
    public function news(){
        return view('news.news');
    }

    //function datail news
    public function datailnews(){
        return view('news.datailnews');
    }
}
