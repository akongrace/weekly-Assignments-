<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home', [
        "title" => 'Home',
        "welcome_message" => "welcome to my space on the web"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => 'profile',
        'name' => 'code slayer',
        'studentid' => '134002001',
        'major' => 'information Technology'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => 'contact',
        'address' => 'jalan coffee shop,jakarta',
        'email' => 'slayer@gmail.com',
        'phone' => '089944887766',
    ]);
});



Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{slug}', [NewsController::class, 'showdata']);

Route::middleware(['auth'])->group(function () {

    Route::get('/student', [StudentController::class, 'index'])->name('student');
    Route::get('/addstudent', [StudentController::class, 'addstudent'])->name('addstudent');
    Route::post('/insertdata', [StudentController::class, 'insertdata'])->name('insertdata');
    Route::get('/editstudent/{id}', [StudentController::class, 'edit'])->name('editstudent');
    Route::post('/updatedata/{id}', [StudentController::class, 'update'])->name('updatedata');
    Route::get('/deletedata/{id}', [StudentController::class, 'deletedata'])->name('deletedata');

});


Route::get('/welcome', function () {
    return view('welcome', [
        "title" => "welcome",
        "name" => "Musa",
        "age" => "28",
        "hobbies" => ["reading","football","modelling","travelling"]
    ]);
});