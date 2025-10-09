@extends('layouts.app')
@section('content')
<article>
        <h1>{{ $new_news["title"] }}</h1>
        <h3>{{ $new_news["author"] }}</h3>
        <p>{{ $new_news["content"] }}</p>
    </article>

    <a href="/news">back</a>
@endsection