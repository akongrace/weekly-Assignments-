@extends('layouts.main')

@section('content')

<h1 class="text-center">Student Data</h1>

<div class="row mt-4">

    <a href="{{ route('student.create') }}" class="btn btn-success mb-3">
        Add Student
    </a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NIM</th>
                <th>Major</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Access</th>
            </tr>
        </thead>

        <tbody>
            @php $i = 1; @endphp

            @foreach ($students as $student)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->study_program }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection