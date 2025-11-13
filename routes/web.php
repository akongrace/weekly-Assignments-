<?php
use App\models\news;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home',[
        "title"=>'Home',
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
Route::get('/news', [newsController::class, 'index']);
Route::get('/news/{slug}', [newsController::class, 'showdata']);


Route::get('/student', [StudentController::class, 'index'])->name('student');

    

Route::get('/welcome', function () {
    return view('welcome',[
        "title"=>"welcome",
        "name"=>"MJ",
        "age"=>"28",
        "hobbies"=>["reading","football","modelling","travelling"]

    ]);
}); 
Route::get('/student', [StudentController::class, 'index'] )->name('student');

Route::get('/addstudent', [StudentController::class, 'addstudent'] )->name('addstudent');

Route::post('/insertdata', [StudentController::class, 'insertdata'] )->name('insertdata');