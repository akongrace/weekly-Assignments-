<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Illuminate\Routing\Controller ;

class NewsController extends Controller 
{
    public function index()
    {
        return view('news',[
            "title" => "news",
            "newslist"=> news::getdata(),
        ]);
    }
    public function showdata($slug)
    {
        return view('singlenews',[
            "title" => "news details",
            "singlenews"=> news::finddata($slug),
        ]);
    }
}
