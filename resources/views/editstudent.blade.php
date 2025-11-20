@extends('layout.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Student</h2>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">← Back</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST" class="card p-4 shadow-sm bg-white">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">No</label>
            <input type="text" name="no" class="form-control"
                   value="{{ $student->no }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control"
                   value="{{ $student->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control"
                   value="{{ $student->nim }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Major</label>
            <input type="text" name="major" class="form-control"
                   value="{{ $student->major }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control"
                   value="{{ $student->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No. HP</label>
            <input type="text" name="no_hp" class="form-control"
                   value="{{ $student->no_hp }}" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
</div>

@endsection