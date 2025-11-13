<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Illuminate\Routing\Controller ;
use App\Models\News;

class NewsController extends Controller 
{
    public function index()
    {
        return view('news',[
            "title" => "news",
            "newss"=> news::collectdata(),
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
