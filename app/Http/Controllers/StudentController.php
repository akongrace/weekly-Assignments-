<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index ()
    {

        $data=Student::all();
        
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
    $validated = $request->validate([
        'name' => 'required',
        'nim' => 'required',
        'studey_program' => 'required',
        'email' => 'required|email',
        'no_hp' => 'required'
    ]);

    Student::create($validated);

    return redirect()->route('student')->with('success', 'Data successfully added!');
}


    public function edit($id)
    {
        $data =student::find($id);

        return view('editstudent', compact('data'), [
            "title" => "Edit Student Data",
        ]);

    }

    public function update(Request $request, $id)
    {
        $data  = Student::find($id);


        $data->update($request->all());

        return redirect()->route('student')->with('success', 'Student updated successfully!');
    }

    public function deletedata($id)
    {
        Student ::where('id', $id)->delete();
       

        return redirect()->back()->with('success', 'Data deleted successfully!');
    }
}

