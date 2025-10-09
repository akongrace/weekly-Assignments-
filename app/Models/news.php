<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    private static $data_news = [
        [
            "title" => "Laravel Project Launch",
            "slug"=>"laravel-project-launch",
            "author" => "syntax fairy",
            "content" => "After 3 hours of debugging, the bug waved a white flag.peace restored to localhost!",
            "date" => "October 9, 2025",
        ],
        [
            "title" => "Coding Progress Update",
            "slug"=>"coding-progress-update",
            "author" => "Debug queen",
            "content" => "Another evening spent fixing one missing semicolon...but worth it for that sweet'it finally worked' moment!",
            "date" => "October 9, 2025",
        ],
    ];


    public static function collectdata()
    {
        return Self::$data_news;
    }

    public static function finddata($slugp)
    {
        $data_newss = Self::$data_news;

            $new_news = [];
        foreach($data_newss as $news)
        {
            if($news["slug"] === $slugp)
            {
                $new_news = $news;
            }
        }

        return $new_news;}

}