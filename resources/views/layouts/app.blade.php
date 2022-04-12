<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- Scripts -->
  <script type="text/javascript">
  // On page load or when changing themes, best to add inline in `head` to avoid FOUC
  if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
      '(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark')
  }
  </script>
  @livewireStyles
  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body
  class="font-sans antialiased font-normal bg-secondary-50 text-secondary-600 dark:bg-secondary-800 dark:text-secondary-100">
  <x-svg-background />
  <x-jet-banner />

  <div class="flex flex-col min-h-screen mx-auto bg-white border-l border-r max-w-7xl dark:bg-secondary-900/50">
    <!-- top -->

    <div class="bg-secondary-50/50 dark:bg-secondary-900/40 border-primary-500/20">
      @livewire('navigation-menu')
      <nav class="pl-0.5a md:pr-4 md:pl-0 border-b-2 main-menu">
        <div class="flex flex-wrap w-full h-full font-medium gap-5x text-secondary-500">
          <a href="{{ route('dashboard') }}" class="{{request()->routeIs('dashboard') ? 'active' : ''}}">
            <x-heroicon-o-home />
            Strona główna
          </a>

          <a href="{{ route('contract.index') }}" class="{{request()->routeIs('contract.index') ? 'active' : ''}}">
            <x-heroicon-o-collection />
            Kontrakty
          </a>

          <a href="{{route('profile.show')}}" class="{{request()->routeIs('profile.show') ? 'active' : ''}}">
            <x-heroicon-o-user />
            Profil
          </a>

        </div>

        <div class="relative z-0 w-96">
          <input type="text" id="site-search" name="search" class="peer" placeholder=" " />
          <label for="search"
            class="absolute text-sm text-secondary-500 dark:text-secondary-400 duration-300 transform -translate-y-4 scale-75 top-2 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
            <x-heroicon-o-search class="w-5 h-5 inline-block" />
            Wyszukaj
          </label>
          <label for="search"
            class="absolute text-sm text-secondary-500 dark:text-secondary-400 duration-300 transform -translate-y-4 scale-75 top-2 right-0 -z-10 origin-[0] peer-focus:hidden peer-focus:text-primary-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 ">[/]</label>
          <label for="search"
            class="absolute text-sm text-secondary-500 dark:text-secondary-400 duration-300 transform -translate-y-4 scale-75 top-2 hidden -z-10 origin-[0] peer-focus:inline peer-focus:right-0 peer-focus:text-primary-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 ">[esc]</label>

        </div>


      </nav>
    </div>

    <main class="flex flex-col flex-1 px-4 pb-12">

      <div
        class="flex flex-col items-start gap-4 my-6 md:flex-row md:items-center {{ isset($header) ? 'md:justify-between' : 'md:justify-end'}}">
        <!-- Page Heading -->
        @if (isset($header))
        <h2 class="text-xl font-semibold leading-tight capitalize text-secondary-600 dark:text-secondary-500">
          <span class="text-2xl text-extra-500 hidden">:..</span>
          {{ $header }}
        </h2>
        @endif
        <x-breadcrumbs />
      </div>

      <div class="{{isset($aside) ? 'flex flex-col flex-1 md:flex-row' : ''}}">
        @isset($aside)
        {{$aside}}
        @endif
        {{$slot}}
      </div>

    </main>
  </div>


  @stack('modals')

  @livewireScripts

</body>

</html>
