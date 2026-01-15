<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>@yield('title', 'Nikitos')</title>
</head>

<body class="bg-white text-gray-900">

  {{-- HEADER --}}
  @include('partials.header')

  @include('partials.login-modal')

  {{-- CONTENIDO --}}
  <main>
    @yield('content')
  </main>

  {{-- FOOTER --}}
  @include('partials.footer')

</body>
</html>
