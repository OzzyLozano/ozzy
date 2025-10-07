<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('css-links')
  <title>@yield('title', 'Default Title')</title>
</head>
<body>
  @yield('navbar')

  <main>
    @yield('content')
  </main>

  @yield('footer')

  <script defer src="{{ asset('js/script.js') }}?v={{ filemtime(public_path('js/script.js')) }}"></script>
</body>
</html>
