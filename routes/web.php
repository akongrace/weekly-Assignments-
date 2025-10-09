<?php
use App\models\news;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=>'home',
        "welcome_message"=>"welcome to my space on the web"

    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title"=>'profile',
        'name'=>'code slayer',
        'studentid'=>'134002001',
        'major'=>'information Technology'

    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        "title"=>'contact',
        'address'=>' jalan coffee shop,jakarta',
        'email'=>'slayer@gmail.com',
        'phone'=>'089944887766',
    ]);
});
Route::get('/News', function () {
    
    return view('news',[
        "title"=> "news",
        "newss"=>news::collectdata(),
    ]);
});
Route::get('/News/{slug}', function ($slugp) {
    
    return view('singlenews',[
        "title"=> "news",
        "new_news"=>news::finddata($slugp),
    ]);
});


Route::get('/welcome', function () {
    return view('welcome',[
        "title"=>"welcome",
        "name"=>"MJ",
        "age"=>"28",
        "hobbies"=>["reading","football","modelling","travelling"]

    ]);
}); 
