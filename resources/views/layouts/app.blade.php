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

  function inputSearchCheckClass(element) {
    if (element.value !== '') {
      element.classList.add("input-with-value");
      element.classList.remove("input-without-value");
    } else {
      element.classList.remove("input-with-value");
      element.classList.add("input-without-value");
    }

  }
  </script>
  @livewireStyles
  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <style>
  [x-cloak] {
    display: none !important;
  }

  </style>
</head>

<body
  class="font-sans antialiased font-normal bg-secondary-100 text-secondary-600 dark:bg-secondary-800 dark:text-secondary-100">
  <x-jet-banner />
  @livewire('navigation-menu')
  <div class="flex h-full w-full overflow-hidden">
    <!-- section body side nav -->
    <nav aria-label="side bar" aria-orientation="vertical"
      class="md:flex flex-none flex-col items-center border-r dark:border-secondary-300/10 text-center bg-secondary-900 text-secondary-400 hidden">
      <div class="flex h-16 w-full items-center ">
        <img class="mx-auto h-6 w-6 hidden"
          src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/leaves.png" />
        <x-logo class="mx-auto h-12 w-12" />
      </div>

      <ul class="">
        <li>
          <a title="Home" href="{{route('home') }}"
            class="flex h-16 w-full items-center bg-secondary-700 px-6 text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M12 6.453l9 8.375v9.172h-6v-6h-6v6h-6v-9.172l9-8.375zm12 5.695l-12-11.148-12 11.133 1.361 1.465 10.639-9.868 10.639 9.883 1.361-1.465z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Views" href="#views" class="flex h-16 w-full items-center px-6 hover:text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M18.546 3h-13.069l-5.477 8.986v9.014h24v-9.014l-5.454-8.986zm-3.796 12h-5.5l-2.25-3h-4.666l4.266-7h10.82l4.249 7h-4.669l-2.25 3zm-9.75-4l.607-1h12.787l.606 1h-14zm12.18-3l.607 1h-11.573l.607-1h10.359zm-1.214-2l.606 1h-9.144l.607-1h7.931z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Customer Lists" href="#customer-lists" class="flex h-16 w-full items-center px-6 hover:text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Reporting" href="#reporting" class="flex h-16 w-full items-center px-6 hover:text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path d="M5 19h-4v-4h4v4zm6 0h-4v-8h4v8zm6 0h-4v-13h4v13zm6 0h-4v-19h4v19zm1 2h-24v2h24v-2z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Admin" href="{{route('profile.show')}}"
            class=" flex h-16 w-full items-center px-6 hover:text-white">

            <x-heroicon-s-cog class="h-6 w-6 fill-current" />
          </a>
        </li>
      </ul>

      <div class="mt-auto flex h-16 w-full items-center">
        <img style="filter: invert(85%);" class="mx-auto h-8 w-10"
          src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/chi.png" />
      </div>
    </nav>

    <!-- content -->
    <x-layout.content />
  </div>

  <div class="flex flex-col min-h-screen mx-auto bg-white border-l border-r max-w-7xl dark:bg-secondary-900/50 hidden">
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
