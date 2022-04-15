<div>
  <!-- mobile section top nav -->
  <x-layout.mobile-bar-menu />

  <!-- section body top nav -->
  <nav aria-label="top bar"
    class="hidden md:flex min-h-16 justify-between dark:bg-secondary-800 items-center flex-wrap">
    <!-- top bar left -->
    <ul aria-label="top bar left" aria-orientation="horizontal" class="flex">
      <!-- add button -->
      <li class="group relative">
        <button aria-controls="add" aria-expanded="false" aria-haspopup="listbox"
          class="flex h-full items-center px-4 text-sm">
          <i>
            <svg class="mx-auto h-3 w-3 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path d="M24 10h-10v-10h-2v10h-10v2h10v10h2v-10h10z" />
            </svg>
          </i>
          <span class="ml-2">Dodaj</span>
        </button>
        <span class="absolute hidden p-1 group-hover:block">
          <ul id="add" role="listbox"
            class="w-dropdown-large w-screen max-w-md rounded-md border bg-white py-2 leading-relaxed shadow-lg outline-none focus:outline-none">
            <li role="separator" class="mb-2">
              <label class="block px-4 py-3 font-semibold"> Nowy </label>
              <hr />
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              Korespondencja
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">Projekt
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              Organization</li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">Search
            </li>
            <li role="separator" class="mb-2">
              <label class="block px-4 py-3 font-semibold">Ostatnio oglądane</label>
              <hr />
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              <div class="flex">
                <div class="pr-2">
                  <span style="padding: 2px 5px; font-size: 0.7rem;"
                    class="rounded-sm bg-red-600 font-mono leading-none text-white">O</span>
                </div>
                <div class="flex-1">
                  <p>Vertias - ams opps issue</p>
                  <p class="text-gray-600">
                    <span>#ticket/14352</span>
                    <span class="mx-1 font-black">&#183;</span>
                    <span>Nico Braun</span>
                  </p>
                </div>
              </div>
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              <div class="flex">
                <div class="pr-2">
                  <span style="padding: 2px 5px; font-size: 0.7rem;"
                    class="rounded-sm bg-yellow-400 font-mono leading-none text-black">N</span>
                </div>
                <div class="flex-1">
                  <p>Vertias - ams opps issue</p>
                  <p class="text-gray-600">
                    <span>#ticket/14352</span>
                    <span class="mx-1 font-black">&#183;</span>
                    <span>Nico Braun</span>
                  </p>
                </div>
              </div>
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              <div class="flex">
                <div class="pr-2">
                  <span style="padding: 2px 5px; font-size: 0.7rem;"
                    class="rounded-sm bg-gray-500 font-mono leading-none text-white">S</span>
                </div>
                <div class="flex-1">
                  <p>Vertias - ams opps issue</p>
                  <p class="text-gray-600">
                    <span>#ticket/14352</span>
                    <span class="mx-1 font-black">&#183;</span>
                    <span>Nico Braun</span>
                  </p>
                </div>
              </div>
            </li>
            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              <div class="flex">
                <div class="pr-2">
                  <span style="padding: 2px 5px; font-size: 0.7rem;"
                    class="rounded-sm bg-primary-600 font-mono leading-none text-white">P</span>
                </div>
                <div class="flex-1">
                  <p>Vertias - ams opps issue</p>
                  <p class="text-gray-600">
                    <span>#ticket/14352</span>
                    <span class="mx-1 font-black">&#183;</span>
                    <span>Nico Braun</span>
                  </p>
                </div>
              </div>
            </li>

            <li role="option"
              class="my-1 cursor-pointer px-6 py-1 hover:bg-primary-100 focus:bg-primary-100 focus:outline-none">
              <div class="flex">
                <div class="pr-2">
                  <span style="padding: 2px 5px; font-size: 0.7rem;"
                    class="rounded-sm bg-gray-800 font-mono leading-none text-white">H</span>
                </div>
                <div class="flex-1">
                  <p>Vertias - ams opps issue</p>
                  <p class="text-gray-600">
                    <span>#ticket/14352</span>
                    <span class="mx-1 font-black">&#183;</span>
                    <span>Nico Braun</span>
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </span>
      </li>
    </ul>

    <a href="/" class="logo">
      <x-logo class="mx-auto h-16 w-16" />
      <p class="ml-2 text-3xl">
        <span class="text-4xl font-semibold">L</span>ara<span class="font-semibold text-extra-600/70">x2</span><span
          class="font-semibold text-extra-600">.</span>
      </p>
    </a>
    <!-- to bar right  -->
    <ul aria-label="top bar right" aria-orientation="horizontal" class="flex items-center px-8">
      <li class="relative">
        <input id="searchInput" title=" Search Bar" aria-label="search bar" role="search"
          class="searchInput w-0 bg-secondary-100 cursor-pointer rounded-md py-2 pr-8 pl-4 placeholder-transparent transition-all duration-500 ease-in-out focus:w-96 focus:cursor-text focus:placeholder-secondary-500 focus:outline-none  focus:ring-extra-200 focus:ring-1 focus:bg-secondary-50 focus:border-0"
          type="text" placeholder="Wyszukaj [/] [esc]" onfocusout="inputSearchCheckClass(this)" />
        <i class="pointer-events-none absolute top-0 right-0 flex h-full items-center pr-3">
          <x-heroicon-o-search class="mx-auto h-6 w-6" />
        </i>
      </li>

      <li class="ml-3 h-8 w-8">
        <button title="Notifications" aria-label="notifications"
          class="focus:shadow-outline h-full w-full rounded-md bg-gray-600 text-white focus:outline-none">
          <i>
            <svg class="mx-auto h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path
                d="M15.137 3.945c-.644-.374-1.042-1.07-1.041-1.82v-.003c.001-1.172-.938-2.122-2.096-2.122s-2.097.95-2.097 2.122v.003c.001.751-.396 1.446-1.041 1.82-4.667 2.712-1.985 11.715-6.862 13.306v1.749h20v-1.749c-4.877-1.591-2.195-10.594-6.863-13.306zm-3.137-2.945c.552 0 1 .449 1 1 0 .552-.448 1-1 1s-1-.448-1-1c0-.551.448-1 1-1zm3 20c0 1.598-1.392 3-2.971 3s-3.029-1.402-3.029-3h6z" />
            </svg>
          </i>
        </button>
      </li>

      <!-- dark theme toggle -->
      <li class="hidden ml-3 h-8 w-8">
        <button id="theme-toggle" type="button"
          class="focus:shadow-outline h-full w-full rounded-md bg-gray-600 text-white focus:outline-none">
          <svg id="theme-toggle-dark-icon" class="hidden mx-auto h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
          <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
              fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </button>
      </li>

      <li class="ml-3 h-8 w-8">
        <button title="Products" aria-label="chi desk products"
          class="focus:shadow-outline h-full w-full rounded-md focus:outline-none">
          <i class="text-gray-600">
            <svg class="mx-auto h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path d="M11 11h-11v-11h11v11zm13 0h-11v-11h11v11zm-13 13h-11v-11h11v11zm13 0h-11v-11h11v11z" />
            </svg>
          </i>
        </button>
      </li>

      <li class="ml-3">
        <!-- Settings Dropdown -->
        <div class="relative">
          <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <button
                class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                  alt="{{ Auth::user()->name }}" />
              </button>
              @else
              <span class="inline-flex rounded-md">
                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                  {{ Auth::user()->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </span>
              @endif
            </x-slot>

            <x-slot name="content">
              <!-- Account Management -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
              </div>

              <x-jet-dropdown-link href="{{ route('profile.show') }}">
                {{ __('Profile') }}
              </x-jet-dropdown-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                {{ __('API Tokens') }}
              </x-jet-dropdown-link>
              @endif

              <div class="border-t border-gray-100"></div>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                  {{ __('Log Out') }}
                </x-jet-dropdown-link>
              </form>
            </x-slot>
          </x-jet-dropdown>
        </div>
      </li>
    </ul>
  </nav>

</div>
<header class="hidden">
  <div class="px-4 border-b border-primary-500/20">
    <div class="flex flex-row items-center justify-between h-16 mx-auto max-w-7xl">
      <a href="/" class="logo">
        <x-logo class="h-9 w-9" />
        <p class="ml-2 text-3xl">
          <span class="text-4xl font-semibold">L</span>ara<span
            class="font-semibold text-primary-600/70 dark:text-primary-500/70">x2</span><span
            class="font-semibold text-primary-600 dark:text-primary-500">.</span>
        </p>
      </a>

      <div class="flex items-center gap-2">
        <button id="theme-toggle" type="button" class="btn">
          <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
          <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
              fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </button>
        <!-- Teams Dropdown -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="relative ml-3">
          <x-jet-dropdown align="right" width="60">
            <x-slot name="trigger">
              <span class="inline-flex rounded-md">
                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                  {{ Auth::user()->currentTeam->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </span>
            </x-slot>

            <x-slot name="content">
              <div class="w-60">
                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                  {{ __('Team Settings') }}
                </x-jet-dropdown-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                  {{ __('Create New Team') }}
                </x-jet-dropdown-link>
                @endcan

                <div class="border-t border-gray-100"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" />
                @endforeach
              </div>
            </x-slot>
          </x-jet-dropdown>
        </div>
        @endif
        <!-- Settings Dropdown -->
        <div class="relative ml-3">
          <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <button
                class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                  alt="{{ Auth::user()->name }}" />
              </button>
              @else
              <span class="inline-flex rounded-md">
                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                  {{ Auth::user()->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </span>
              @endif
            </x-slot>

            <x-slot name="content">
              <!-- Account Management -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
              </div>

              <x-jet-dropdown-link href="{{ route('profile.show') }}">
                {{ __('Profile') }}
              </x-jet-dropdown-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                {{ __('API Tokens') }}
              </x-jet-dropdown-link>
              @endif

              <div class="border-t border-gray-100"></div>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                  {{ __('Log Out') }}
                </x-jet-dropdown-link>
              </form>
            </x-slot>
          </x-jet-dropdown>
        </div>


      </div>
    </div>
  </div>
</header>
<nav x-data="{ open: false }" class="hidden bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class="flex items-center shrink-0">
          <a href="{{ route('dashboard') }}">
            <x-jet-application-mark class="block w-auto h-9" />
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
          </x-jet-nav-link>
        </div>
      </div>

      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <!-- Teams Dropdown -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="relative ml-3">
          <x-jet-dropdown align="right" width="60">
            <x-slot name="trigger">
              <span class="inline-flex rounded-md">
                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                  {{ Auth::user()->currentTeam->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </span>
            </x-slot>

            <x-slot name="content">
              <div class="w-60">
                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                  {{ __('Team Settings') }}
                </x-jet-dropdown-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                  {{ __('Create New Team') }}
                </x-jet-dropdown-link>
                @endcan

                <div class="border-t border-gray-100"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" />
                @endforeach
              </div>
            </x-slot>
          </x-jet-dropdown>
        </div>
        @endif

        <!-- Settings Dropdown -->
        <div class="relative ml-3">
          <x-jet-dropdown align="right" width="48">
            <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <button
                class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                  alt="{{ Auth::user()->name }}" />
              </button>
              @else
              <span class="inline-flex rounded-md">
                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                  {{ Auth::user()->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </span>
              @endif
            </x-slot>

            <x-slot name="content">
              <!-- Account Management -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
              </div>

              <x-jet-dropdown-link href="{{ route('profile.show') }}">
                {{ __('Profile') }}
              </x-jet-dropdown-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                {{ __('API Tokens') }}
              </x-jet-dropdown-link>
              @endif

              <div class="border-t border-gray-100"></div>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                  {{ __('Log Out') }}
                </x-jet-dropdown-link>
              </form>
            </x-slot>
          </x-jet-dropdown>
        </div>
      </div>

      <!-- Hamburger -->
      <div class="flex items-center -mr-2 sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
      <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-jet-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
      <div class="flex items-center px-4">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div class="mr-3 shrink-0">
          <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
            alt="{{ Auth::user()->name }}" />
        </div>
        @endif

        <div>
          <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
          <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
        </div>
      </div>

      <div class="mt-3 space-y-1">
        <!-- Account Management -->
        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
          {{ __('Profile') }}
        </x-jet-responsive-nav-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
          :active="request()->routeIs('api-tokens.index')">
          {{ __('API Tokens') }}
        </x-jet-responsive-nav-link>
        @endif

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf

          <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
            {{ __('Log Out') }}
          </x-jet-responsive-nav-link>
        </form>

        <!-- Team Management -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="border-t border-gray-200"></div>

        <div class="block px-4 py-2 text-xs text-gray-400">
          {{ __('Manage Team') }}
        </div>

        <!-- Team Settings -->
        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
          :active="request()->routeIs('teams.show')">
          {{ __('Team Settings') }}
        </x-jet-responsive-nav-link>

        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
          {{ __('Create New Team') }}
        </x-jet-responsive-nav-link>
        @endcan

        <div class="border-t border-gray-200"></div>

        <!-- Team Switcher -->
        <div class="block px-4 py-2 text-xs text-gray-400">
          {{ __('Switch Teams') }}
        </div>

        @foreach (Auth::user()->allTeams() as $team)
        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
        @endforeach
        @endif
      </div>
    </div>
  </div>
</nav>
