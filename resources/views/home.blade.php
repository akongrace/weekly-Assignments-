@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <h1>Welcome to My Space on the Web!</h1>
  <p>
    Hey there 👋 You have just landed on my little corner of the internet.  
    Here, you will find little fun stories, and a sprinkle of creativity.  
    Whether you came to know me better or just vibe around, make yourself feel at home.
  </p>
  <p>
    Do not forget to check out my <a href="{{ url('/profile') }}">profile</a> and say hi through the <a href="{{ url('/contact') }}">contact</a> page.
  </p>
@endsection
