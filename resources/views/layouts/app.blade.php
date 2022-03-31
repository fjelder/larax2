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

  <div class="min-h-screen mx-auto bg-white border-l border-r max-w-7xl dark:bg-secondary-900/50 flex flex-col">
    <!-- top -->

    <div class="bg-secondary-50/50 dark:bg-secondary-900/40 border-primary-500/20">
      @livewire('navigation-menu')
      <nav class="main-menu px-4 border-b-2">
        <div class="flex flex-wrap w-full h-full gap-5 font-medium text-secondary-500">
          <a href="" class="active">
            <x-heroicon-o-home />
            Strona główna
          </a>

          <a href="" class="">
            <x-heroicon-o-collection />
            Kontrakty
          </a>

          <a href="" class="">
            <x-heroicon-o-database />
            Link 3
          </a>

        </div>
        <input type="text" id="site-search" name="search" class="" placeholder="Wyszukaj...[/] [esc]">
      </nav>
    </div>

    <main class="flex flex-col flex-1 px-4 pb-12">

      <x-breadcrumbs />
      {{$slot}}
      @isset($aside)
      <div class="flex flex-col flex-1 md:flex-row">

        <x-aside />

        <x-table-contract />

      </div>
      @endif

    </main>
  </div>

  <div class="min-h-screen bg-gray-100 hidden">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>

  @stack('modals')

  @livewireScripts

</body>

</html>
