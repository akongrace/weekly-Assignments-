@extends('layouts/main')

@section('content')
    <h1>add student Data</h1>
    <div class="card">
        <div class="card-body bg-ocean">
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" placeholder="full name" class="form-control">
        </div><br>
        <div class="mb-3">
            <label for="nim" class="form-label">student registration number(Nim)</label>
            <input type="number" name="nim" id="nim" placeholder="Full NIM" class="form-control" >
        </div><br>
        <div class="mb-3">
            <label for="prodi" class="form-label">Study program</label>
            <input type="text" name="Major" id="Major" placeholder="Study program " class="form-control">
        </div><br>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" >
        </div><br>
        <div class="mb-3">
            <label for="nohp" class="form-label">No Hp</label>
            <input type="number" name="nohp" id="nohp" placeholder="Handphone number" class="form-control">
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
@endsection