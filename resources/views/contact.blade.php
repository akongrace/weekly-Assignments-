@extends('layouts.app')

@section('title', '$title')

@section('content')
  <h1>Let’s Get in Touch (aka Connect!)</h1>
  <p>
    Don’t be shy — I would love to hear from you! Here are a few ways to reach out to me:
  </p>
  <ul>
    <li><strong>Email:</strong> {{$email}}</li>
    <li><strong>Phone:</strong>{{$phone}}</li>
    <li><strong>address>:</strong> {{$address}}</li>
  </ul>

  <p>
    You can also drop me a quick message below.  
    I promise I’ll get back to you faster than a <code>php artisan serve</code> command hihi 😄.
  </p>
@endsection
