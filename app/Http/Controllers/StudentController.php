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

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('editstudent', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate ([
            'no' => 'required',
            'name' => 'required',
            'nim' => 'required|unique:students,nim,'.$id,
            'major' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }
}