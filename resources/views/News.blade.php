@extends('layouts.app')

@section('title', 'News')

@section('content')
    <h1>News Corner</h1>

    @foreach ($newss as $news)
    <article class="mt-5">
      <a href="/news/{{$news['slug']}}">
        <h2>{{ $news['title'] }}</h2>
</a>
        <p>{{ $news['content'] }}</p>
        <p>Author: {{ $news['author'] }}</p>
        <p>Date: {{ $news['date'] }}</p>
</article>


    <p>Welcome to the news corner! This is where I will share updates, projects, and stories.</p>

   <p>Welcome to the news corner! This is where I will share updates, projects, and stories about tech, life, and everything in between.
  </p>
  <p>
    <strong>Today’s Highlight:</strong> Learning Laravel has been a rollercoaster, but every bug fixed feels like a small victory, Stay tuned for more updates, tips, and maybe even some behind the scenes of my coding journey 🚀
  </p>
<p>
    Thanks for stopping by, and remember, in the world of code, every day is an adventure!
</p>

@endforeach
@endsection