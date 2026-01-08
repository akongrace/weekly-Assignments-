<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Illuminate\Routing\Controller ;
use App\Models\News;

class NewsController extends Controller 
{
    public function index()
    {
      $news = [
        'slug' => 'Laravel-Journey',
        'title' => 'Learning Laravel: A Journey into Web Development',
        'content' => 'Learn Laravel step by step with practical examples and projects',
        'author' => 'Gracie',
        'date' => '2024-01-01',
      ];
    
        return view('news', compact('news'), [
            'title' => 'News Page',
        ]);
        }
}
