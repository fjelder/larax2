<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
  <div class="font-sans text-gray-900 antialiased relative min-h-screen flex">
    @php
    $path = 'img/login_background'.rand(1,2).'.jpg'
    @endphp
    <div class="hidden md:block bg-cover bg-center min-h-full min-w-full"
      style="background-image: url({{Storage::url($path)}})">
    </div>
    <div class="md:w-1/2 w-full md:absolute md:right-0 border-l-4 border-primary-700/90">
      {{ $slot }}
    </div>
  </div>

</body>

</html>
