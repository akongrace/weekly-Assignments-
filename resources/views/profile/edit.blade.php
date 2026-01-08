@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">My Profile</h1>

    <div class="card p-4" style="max-width: 600px;">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>

        <hr>

        <p class="text-muted">
            This account is used to access student data, news, and dashboard features.
        </p>

        <a href="{{ route('dashboard') }}" class="btn btn-primary">
            Back to Dashboard
        </a>
    </div>
</div>
@endsection