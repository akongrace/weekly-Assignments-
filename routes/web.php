<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;



   Route::get('/', function () {
    return view('home');
   })->name('home');

    Route::get('/news', function () {
    $news = [
        [
            'slug' => 'laravel-journey',
            'title' => 'Learning Laravel: A Journey into Web Development',
            'content' => 'Laravel is powerful but emotionally demanding.',
            'author' => 'Gracie',
            'date' => '2025-01-08',
        ],
        [
            'slug' => 'Debugging-hell',
            'title' => 'Debugging Reality: Tales from the Trenches',
            'content' => 'If it works, don\'t touch it. If it doesn\'t, prepare for a wild ride or cry a little.',
            'author' => 'Akon',
            'date' => '2025-02-15',
        ],
        [
            'slug' => 'Web-Dev-Trends-2025',
            'title' => 'Top Web Development Trends to Watch in 2025',
            'content' => 'From AI integration to immersive experiences, 2025 is set to redefine the web landscape.',
            'author' => 'Sia',
            'date' => '2025-03-22',
        ],
    ];

    return view('news', compact('news'));
     })->name('news');

    Route::get('/contact', function () {
    return view('contact', [
        'email' => 'Hello@mywebsite.com',
        'phone' => '+6223-456-7890',
        'address' => 'Jaranguda Street, No. 123, Jakarta, Indonesia',
    ]);
    })->name('contact');


    Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('/student', [StudentController::class, 'index'])
    ->name('student.index');

Route::get('/student/create', [StudentController::class, 'create'])
    ->name('student.create');

Route::post('/student', [StudentController::class, 'store'])
    ->name('student.store');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])
    ->name('student.edit');

Route::put('/student/{student}', [StudentController::class, 'update'])
    ->name('student.update');

Route::delete('/student/{student}', [StudentController::class, 'destroy'])
    ->name('student.destroy');

Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');
Route::get('/profile', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('profile.edit');

});

require __DIR__.'/auth.php';