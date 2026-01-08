<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function create()
    {
        return view('addstudent', [
            'title' => 'Add Student Data'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'study_program' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Student::create($validated);

        return redirect()->route('student.index')
            ->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        return view('editstudent', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'study_program' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $student->update($validated);

        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')
            ->with('success', 'Student deleted successfully!');
    }
}