@extends('layouts.app')

@section('title', 'Profile')

@section('content')
  <h1>Who Am I?</h1>
  <div class="profile-picture">
    <img src = "https://cdn.kwork.com/pics/t3/82/31378922-65b941a618cd5.jpg" alt ="profile picture" width="200" height="200">
    <h2> Name:{{$name}}</h2>
  <p>student ID: {{$studentid}}</p>
  <p>{{$major}}</p>
  
  <p>
    Hi,welcome to my little world <strong></strong>,i am an IT student who is learning, exploring, and coding her way into the tech world.  
    I am passionate about <em>web development, cybersecurity, software engineering</em> and building projects that make me fall in love with technology even more every day.
  </p>
  <p>
    When I am not coding, you will probably find me listening to music, laughing with friends, or chasing my glow-up goals like working out.  
    This profile page is just a little introduction, but trust me, there is a lot more to discover.
  </p>
  
@endsection

