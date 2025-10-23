<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>

  {{-- Link CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <nav>
      <ul class="navbar">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/profile') }}">Profile</a></li>
        <li><a href="{{ url('/news') }}">News</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    @yield('content')
  </main>

  <footer>
    <p>&copy; {{ date('Y') }} Akon Grace. All rights reserved.</p>
  </footer>
</body>
</html>
