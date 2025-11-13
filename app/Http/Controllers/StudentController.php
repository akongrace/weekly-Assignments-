<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index ()
    {

        $data = Student::all();
        
        return view('Student', compact('data'), [
            "title" => " Student Data ",
            
        ]);
    }

    public function addstudent ()
    {
        return view('addstudent', [
            "title" => "Add student Data",
        ]);
    }

    public function insertdata(Request $request)
    {
        /// insert data to data
        Student::create($request -> all());

        return redirect()->route('student')->with('success', 'Data successfully added!');
    }
}
