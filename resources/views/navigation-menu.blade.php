<header>
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
