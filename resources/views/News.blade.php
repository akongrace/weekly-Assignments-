@extends('layouts.app')

@section('title', 'News')

@section('content')
    <h1>NEWS CORNER</h1>

    @foreach ($news as $item)
    <article class="mt-5">
      <a href="#">
        <h2>{{ $item['title'] }}</h2>
</a>
        <p>{{ $item['content'] }}</p>
        <p>Author: {{ $item['author'] }}</p>
        <p>Date: {{ $item['date'] }}</p>
</article><BR><BR>

  <p>
    <strong>Today’s Highlight:</strong> Learning Laravel has been a rollercoaster, but every bug fixed feels like a small victory, Stay tuned for more updates, tips, and maybe even some behind the scenes of my coding journey 🚀
  </p>
<p>
    Thanks for stopping by, and remember, in the world of code, every day is an adventure!
</p>

@endforeach
@endsection