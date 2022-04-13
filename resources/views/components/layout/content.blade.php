<div class="flex flex-1 flex-col">
  <!-- section body top nav -->
  <nav aria-label="top bar" class="flex h-16 flex-none justify-between bg-white items-center">
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

    <a href="/" class="logo-quest">
      <p class="ml-2 text-3xl">
        <span class="text-4xl font-semibold">L</span>ara<span
          class="font-semibold text-extra-600/70 dark:text-primary-500/70">x2</span><span
          class="font-semibold text-extra-600 dark:text-primary-500">.</span>
      </p>
    </a>
    <!-- to bar right  -->
    <ul aria-label="top bar right" aria-orientation="horizontal" class="flex items-center px-8">
      <li class="relative">
        <input title="Search Bar" aria-label="search bar" role="search"
          class="w-4 cursor-pointer rounded-md py-2 pr-8 pl-4 placeholder-transparent transition-all duration-300 ease-in-out focus:w-64 focus:cursor-text focus:border-black focus:placeholder-gray-500"
          type="text" placeholder="Search Chi Desk Support" />
        <i class="pointer-events-none absolute top-0 right-0 flex h-full items-center pr-3">
          <svg class="mx-auto h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24">
            <path
              d="M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z" />
          </svg>
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

      <li class="ml-3 h-8 w-8">
        <button title="v2 REPL" aria-label="repl"
          class="focus:shadow-outline h-full w-full rounded-md bg-gray-600 text-white focus:outline-none">
          <i>
            <svg class="mx-auto h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24">
              <path
                d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-11 11v1.649l3.229 1.351-3.229 1.347v1.653l5-2.201v-1.599l-5-2.2zm-7 2.201v1.599l5 2.2v-1.653l-3.229-1.347 3.229-1.351v-1.649l-5 2.201z" />
            </svg>
          </i>
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

      <li class="ml-3 h-10 w-10">
        <button title="Page Menu" aria-label="page menu"
          class="focus:shadow-outline h-full w-full rounded-full border focus:outline-none">
          <img class="mx-auto h-full w-full rounded-full"
            src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/me.jpg" />
        </button>
      </li>
    </ul>
  </nav>

  <!-- section body header -->
  <header aria-label="page caption" class="flex h-16 flex-none items-center border-t bg-gray-100 px-4">
    <h1 id="page-caption" class="text-lg font-semibold">{{__('Dashboard')}}</h1>
  </header>

  <!-- main content -->
  <main class="flex min-h-0 flex-grow border-t">
    <!-- section update to tickets -->
    <section class="flex min-h-0 w-full max-w-sm flex-none flex-col overflow-auto bg-gray-100 p-4">
      <h1 class="mb-3 font-semibold">Lista kontraktów</h1>
      <ul>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1 font-semibold">
                Zgierz - Ozorków
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Aktualizacja: Piątek 22 kwietnia 2022r, 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
        <li>
          <article tabindex="0"
            class="mb-2 flex cursor-pointer rounded-md border bg-white p-3 text-gray-700 hover:border-green-500 focus:border-green-500 focus:outline-none">
            <span class="flex-none pt-1 pr-2">
              <img class="h-8 w-8 rounded-md"
                src="https://raw.githubusercontent.com/primarybrown/tailwind-zendesk-clone/master/public/assets/avatar.png" />
            </span>
            <div class="flex-1">
              <header class="mb-1">
                Tarun T <span class="font-semibold">commented</span> on
                <h1 class="inline">"RE: WPMS issue".</h1>
              </header>
              <p class="text-gray-600">Hi Mazhar, Please note this issue comes when user is not closing or logout
                sy…</p>
              <footer class="mt-2 text-sm text-gray-500">Friday 22:16</footer>
            </div>
          </article>
        </li>
      </ul>
    </section>

    <!-- section content -->
    <section aria-label="main content" class="flex min-h-0 flex-auto flex-col border-l">
      <!-- content navigation -->
      <nav class="flex bg-gray-100 p-4">
        <!-- open tickets nav -->
        <section aria-labelledby="open-tickets-tabs-label" class="mr-4 focus:outline-none">
          <label id="open-tickets-tabs-label" class="mb-1 block text-sm font-semibold">Open Tickets
            <span class="font-normal text-gray-700">(current)</span>
          </label>
          <ul class="flex">
            <li>
              <button
                class="flex w-24 flex-col items-center rounded-l-md border border-r-0 bg-white p-2 focus:bg-yellow-200 focus:outline-none">
                <p class="text-lg font-semibold">6</p>
                <p class="text-sm uppercase text-gray-600">You</p>
              </button>
            </li>
            <li>
              <button
                class="flex w-24 cursor-pointer flex-col items-center rounded-r-md border bg-white p-2 focus:bg-yellow-200 focus:outline-none">
                <p class="text-lg font-semibold">23</p>
                <p class="text-sm uppercase text-gray-600">Groups</p>
              </button>
            </li>
          </ul>
        </section>
        <!-- stats nav -->
        <section aria-labelledby="ticket-statistics-tabs-label" class="pb-2">
          <label id="ticket-statistics-tabs-label" class="mb-1 block text-sm font-semibold">Ticket Statistics <span
              class="font-normal text-gray-700">(this week)</span></label>
          <ul class="flex">
            <li>
              <button
                class="flex w-24 flex-col items-center rounded-l-md border border-r-0 bg-white p-2 focus:bg-yellow-200 focus:outline-none">
                <p class="text-lg font-semibold">16</p>
                <p class="text-sm uppercase text-gray-600">good</p>
              </button>
            </li>
            <li>
              <button
                class="flex w-24 flex-col items-center border border-r-0 bg-white p-2 focus:bg-yellow-200 focus:outline-none">
                <p class="text-lg font-semibold">2</p>
                <p class="text-sm uppercase text-gray-600">bad</p>
              </button>
            </li>

            <li>
              <button
                class="flex w-24 flex-col items-center rounded-r-md border bg-white p-2 focus:bg-yellow-200 focus:outline-none">
                <p class="text-lg font-semibold">32</p>
                <p class="text-sm uppercase text-gray-600">solved</p>
              </button>
            </li>
          </ul>
        </section>
      </nav>

      <!-- content caption -->
      <header class="flex items-center border-t bg-white py-1 px-4">
        <div class="flex">
          <h2 id="content-caption" class="font-semibold">Tickets requiring your attention (6)</h2>
          <span class="group relative ml-3">
            <button role="details" aria-controls="info-popup"
              class="border-b border-dotted border-primary-700 text-sm text-primary-700 focus:outline-none">What is
              this?</button>
            <div role="tooltip" id="info-popup"
              class="absolute right-0 z-50 mx-auto hidden translate-x-40 transform rounded-md rounded-t-lg pt-1 group-hover:block">
              <div class="w-full w-screen max-w-xs rounded-md rounded-t-lg border bg-white shadow-lg">
                <header class="rounded-t-lg bg-gray-300 px-4 py-2 font-semibold">People are waiting for replies!
                </header>
                <div class="border-t p-4">
                  <p class="mb-4">These are new or open tickets that are assigned to you, unassinged in your
                    group(s) or not assigned to any group.</p>
                  <p class="mb-1">They are ordered by priority and requester update date (oldest first).</p>
                </div>
              </div>
            </div>
          </span>
        </div>
        <div class="ml-auto">
          <button title="See available tickets in this view" aria-label="play"
            class="rounded-md border px-3 py-2 leading-none">Play</button>
        </div>
      </header>

      <!-- content overflow section 
                remove table and thead but keep tbody and change tbody to section, in order
                to have scrollable overflow section -->
      <table aria-describedby="info-popup" aria-label="open tickets"
        class="flex h-full min-h-0 w-full flex-col border-t">
        <thead class="flex w-full flex-col px-4">
          <tr class="flex border-b">
            <th class="w-24 py-3 pl-3 pr-1 text-left font-semibold">
              <input type="checkbox" name="" id="" />
            </th>
            <th class="w-24 truncate py-3 px-1 text-left font-semibold">ID</th>
            <th class="w-full max-w-xs truncate py-3 px-1 text-left font-semibold xl:max-w-lg">Subject</th>
            <th class="flex-1 truncate py-3 px-1 text-left font-semibold">Requester</th>
            <th class="flex-1 truncate py-3 px-1 text-left font-semibold">Requester updated</th>
            <th class="flex-1 truncate py-3 px-1 text-left font-semibold">Group</th>
            <th class="flex-1 truncate py-3 px-1 text-left font-semibold">Assignee</th>
          </tr>
        </thead>
        <tbody class="flex min-h-0 w-full flex-1 flex-col overflow-hidden px-4">
          <!-- low -->
          <tr class="flex border-b">
            <th class="flex-1 bg-gray-100 px-3 py-2 text-left" colspan="7">
              <h2 class="text-sm"><span class="mr-1 font-normal">Priority</span><span>Low</span></h2>
            </th>
          </tr>
          <tr role="row" class="flex cursor-pointer border-b hover:bg-primary-100">
            <td role="cell" headers="select" class="flex w-24 items-start py-3 pl-3 pr-1">
              <input class="mt-1" type="checkbox" />
              <div class="group relative ml-auto">
                <span style="
                          padding: 2px 5px;
                          font-size: 0.7rem;
                          position: relative;
                          bottom: 2px;
                        " class="rounded-sm bg-red-600 font-mono leading-none text-white">O</span>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Quo laudantium error corporis accusamus unde, labore
                        quidem non officiis.</h1>
                      <p class="mt-3">
                        Hi Team,
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit? ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold">Nico Braun</p>
                        <p class="ml-auto text-sm text-gray-700">Yesterday 10:33</p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="w-24 py-3 px-1">#12534</td>
            <td class="w-full max-w-xs py-3 px-1 xl:max-w-lg">
              <div class="group relative w-full">
                <p class="w-full truncate">Quo laudantium error corporis accusamus unde, labore quidem non officiis.
                </p>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Quo laudantium error corporis accusamus unde, labore
                        quidem non officiis.</h1>
                      <p class="mt-3">
                        Hi Team,
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit? ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold">Nico Braun</p>
                        <p class="ml-auto text-sm text-gray-700">Yesterday 10:33</p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="flex-1 truncate py-3 px-1">Marla Darsuz</td>
            <td class="flex-1 truncate py-3 px-1">Tuesday 09:56</td>
            <td class="flex-1 truncate py-3 px-1">UK Support</td>
            <td class="flex-1 truncate py-3 px-1">Nico Braun</td>
          </tr>
          <tr role="row" class="flex cursor-pointer border-b hover:bg-primary-100">
            <td role="cell" headers="select" class="flex w-24 items-start py-3 pl-3 pr-1">
              <input class="mt-1" type="checkbox" />
              <div class="group relative ml-auto">
                <span style="
                          padding: 2px 5px;
                          font-size: 0.7rem;
                          position: relative;
                          bottom: 2px;
                        " class="rounded-sm bg-red-600 font-mono leading-none text-white">O</span>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.</h1>
                      <p class="mt-3">
                        Hi, <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit consequatur natus aut
                        reiciendis nisi sed! Temporibus, quibusdam voluptates? ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold">Nico Braun</p>
                        <p class="ml-auto text-sm text-gray-700">Today 13:30</p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse tempora aliquam voluptates quibusdam quae debitis laboriosam iure ea quos.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="w-24 py-3 px-1">#12534</td>
            <td class="w-full max-w-xs py-3 px-1 xl:max-w-lg">
              <div class="group relative w-full">
                <p class="w-full truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.</h1>
                      <p class="mt-3">
                        Hi, <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit consequatur natus aut
                        reiciendis nisi sed! Temporibus, quibusdam voluptates? ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold">Nico Braun</p>
                        <p class="ml-auto text-sm text-gray-700">Today 13:30</p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse tempora aliquam voluptates quibusdam quae debitis laboriosam iure ea quos.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="flex-1 truncate py-3 px-1">Jim Beam</td>
            <td class="flex-1 truncate py-3 px-1">Friday 10:29</td>
            <td class="flex-1 truncate py-3 px-1">UK Support</td>
            <td class="flex-1 truncate py-3 px-1">Nico Braun</td>
          </tr>
          <tr role="row" class="flex cursor-pointer border-b hover:bg-primary-100">
            <td role="cell" headers="select" class="flex w-24 items-start py-3 pl-3 pr-1">
              <input class="mt-1" type="checkbox" />
              <div class="group relative ml-auto">
                <span style="
                          padding: 2px 5px;
                          font-size: 0.7rem;
                          position: relative;
                          bottom: 2px;
                        " class="rounded-sm bg-yellow-400 font-mono leading-none text-black">N</span>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-yellow-400 px-3 py-1 text-xs uppercase leading-none text-black">New</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Excepturi at labore vel accusamus exercitationem quam,
                        amet provident!</h1>
                      <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit consequatur
                        natus aut reiciendis nisi sed! Temporibus, quibusdam voluptates? ...</p>
                    </section>
                    <footer class="mt-4 hidden">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold"></p>
                        <p class="ml-auto text-sm text-gray-700"></p>
                      </div>
                      <p class="mt-2"></p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="w-24 py-3 px-1">#12534</td>
            <td class="w-full max-w-xs py-3 px-1 xl:max-w-lg">
              <div class="group relative w-full">
                <p class="w-full truncate">Excepturi at labore vel accusamus exercitationem quam, amet provident!
                </p>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-yellow-400 px-3 py-1 text-xs uppercase leading-none text-black">New</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Excepturi at labore vel accusamus exercitationem quam,
                        amet provident!</h1>
                      <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit consequatur
                        natus aut reiciendis nisi sed! Temporibus, quibusdam voluptates? ...</p>
                    </section>
                    <footer class="mt-4 hidden">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold"></p>
                        <p class="ml-auto text-sm text-gray-700"></p>
                      </div>
                      <p class="mt-2"></p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="flex-1 truncate py-3 px-1">Paul Ferrez</td>
            <td class="flex-1 truncate py-3 px-1">Today 13:45</td>
            <td class="flex-1 truncate py-3 px-1">-</td>
            <td class="flex-1 truncate py-3 px-1">-</td>
          </tr>
          <tr role="row" class="flex cursor-pointer border-b hover:bg-primary-100">
            <td role="cell" headers="select" class="flex w-24 items-start py-3 pl-3 pr-1">
              <input class="mt-1" type="checkbox" />
              <div class="group relative ml-auto">
                <span style="
                          padding: 2px 5px;
                          font-size: 0.7rem;
                          position: relative;
                          bottom: 2px;
                        " class="rounded-sm bg-red-600 font-mono leading-none text-white">O</span>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">impedit possimus praesentium voluptatum omnis assumenda
                        rem autem magni consequatur nostrum distinctio unde.</h1>
                      <p class="mt-3">
                        Hi Team,
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit? ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold">Nico Braun</p>
                        <p class="ml-auto text-sm text-gray-700">Yesterday 10:33</p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="w-24 py-3 px-1">#12534</td>
            <td class="w-full max-w-xs py-3 px-1 xl:max-w-lg">
              <div class="group relative w-full">
                <p class="w-full truncate">impedit possimus praesentium voluptatum omnis assumenda rem autem magni
                  consequatur nostrum distinctio unde.</p>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Low)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">impedit possimus praesentium voluptatum omnis assumenda
                        rem autem magni consequatur nostrum distinctio unde.</h1>
                      <p class="mt-3">
                        Hi Team,
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit? ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold">Nico Braun</p>
                        <p class="ml-auto text-sm text-gray-700">Yesterday 10:33</p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="flex-1 truncate py-3 px-1">Sara Dechicco</td>
            <td class="flex-1 truncate py-3 px-1">Thursday 09:22</td>
            <td class="flex-1 truncate py-3 px-1">UK Support</td>
            <td class="flex-1 truncate py-3 px-1">Nico Braun</td>
          </tr>
          <!-- medium -->
          <tr class="flex border-b">
            <th class="flex-1 bg-gray-100 px-3 py-2 text-left" colspan="7">
              <h2 class="text-sm">
                <span class="mr-1 font-normal">Priority</span>
                <span>Medium</span>
              </h2>
            </th>
          </tr>
          <tr role="row" class="flex cursor-pointer border-b hover:bg-primary-100">
            <td role="cell" headers="select" class="flex w-24 items-start py-3 pl-3 pr-1">
              <input class="mt-1" type="checkbox" />
              <div class="group relative ml-auto">
                <span style="
                          padding: 2px 5px;
                          font-size: 0.7rem;
                          position: relative;
                          bottom: 2px;
                        " class="rounded-sm bg-yellow-400 font-mono leading-none text-black">N</span>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-yellow-400 px-3 py-1 text-xs uppercase leading-none text-black">New</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Medium)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Excepturi at labore vel accusamus exercitationem
                        assumenda ex incidunt eum quam, amet provident!</h1>
                      <p class="mt-3">
                        Hi, <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit consequatur natus aut
                        reiciendis nisi sed! Temporibus, quibusdam voluptates? ...
                      </p>
                    </section>
                    <footer class="mt-4 hidden">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold"></p>
                        <p class="ml-auto text-sm text-gray-700"></p>
                      </div>
                      <p class="mt-2"></p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="w-24 py-3 px-1">#12534</td>
            <td class="w-full max-w-xs py-3 px-1 xl:max-w-lg">
              <div class="group relative w-full">
                <p class="w-full truncate">Excepturi at labore vel accusamus exercitationem assumenda ex incidunt
                  eum quam, amet provident!</p>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-yellow-400 px-3 py-1 text-xs uppercase leading-none text-black">New</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Medium)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Excepturi at labore vel accusamus exercitationem
                        assumenda ex incidunt eum quam, amet provident!</h1>
                      <p class="mt-3">
                        Hi, <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit consequatur natus aut
                        reiciendis nisi sed! Temporibus, quibusdam voluptates? ...
                      </p>
                    </section>
                    <footer class="mt-4 hidden">
                      <p class="text-gray-600"></p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p class="font-semibold"></p>
                        <p class="ml-auto text-sm text-gray-700"></p>
                      </div>
                      <p class="mt-2">Dolore odio error inventore sint et dolorum asperiores exercitationem,
                        quisquam esse tempora aliquam voluptates quibusdam quae debitis laboriosam iure ea quos.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="flex-1 truncate py-3 px-1">Freddy Murro</td>
            <td class="flex-1 truncate py-3 px-1">Today 12:13</td>
            <td class="flex-1 truncate py-3 px-1">-</td>
            <td class="flex-1 truncate py-3 px-1">-</td>
          </tr>
          <tr role="row" class="flex cursor-pointer border-b hover:bg-primary-100">
            <td role="cell" headers="select" class="flex w-24 items-start py-3 pl-3 pr-1">
              <input class="mt-1" type="checkbox" />
              <div class="group relative ml-auto">
                <span style="
                          padding: 2px 5px;
                          font-size: 0.7rem;
                          position: relative;
                          bottom: 2px;
                        " class="rounded-sm bg-red-600 font-mono leading-none text-white">O</span>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Medium)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Odit consequatur natus aut reiciendis nisi sed!</h1>
                      <p class="mt-3">
                        Hi, <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, quibusdam voluptates?
                        ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p aria-label="commenter" class="font-semibold">Nico Braun</p>
                        <p aria-label="time" class="ml-auto text-sm text-gray-700">Today 06:34</p>
                      </div>
                      <p aria-label="comment" class="mt-2">Quos explicabo sed nisi totam dolores deleniti blanditiis
                        culpa dolor provident perferendis sapiente corrupti repudiandae ea dolore.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="w-24 py-3 px-1">#12534</td>
            <td class="w-full max-w-xs py-3 px-1 xl:max-w-lg">
              <div class="group relative w-full">
                <p class="w-full truncate">Odit consequatur natus aut reiciendis nisi sed!</p>
                <!-- dropdown -->
                <span
                  class="absolute top-0 z-50 ml-4 mt-10 hidden w-screen max-w-lg rounded-md border bg-white p-6 text-gray-900 shadow-lg group-hover:block">
                  <article>
                    <header>
                      <div>
                        <span
                          class="rounded-sm bg-red-600 px-3 py-1 text-xs uppercase leading-none text-white">Open</span>
                        <span class="ml-2 text-gray-700">Incident #12534</span>
                        <span class="ml-1">(Medium)</span>
                      </div>
                    </header>
                    <section class="mt-5">
                      <h1 class="mt-3 text-sm font-semibold">Odit consequatur natus aut reiciendis nisi sed!</h1>
                      <p class="mt-3">
                        Hi, <br />
                        <br />
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error accusantium molestias fugit
                        commodi doloremque. <br /><br />
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, quibusdam voluptates?
                        ...
                      </p>
                    </section>
                    <footer class="mt-4">
                      <p class="text-gray-600">Latest Comments</p>
                      <hr class="mt-1" />
                      <div class="mt-3 flex">
                        <p aria-label="commenter" class="font-semibold">Nico Braun</p>
                        <p aria-label="time" class="ml-auto text-sm text-gray-700">Today 06:34</p>
                      </div>
                      <p aria-label="comment" class="mt-2">Quos explicabo sed nisi totam dolores deleniti blanditiis
                        culpa dolor provident perferendis sapiente corrupti repudiandae ea dolore.</p>
                    </footer>
                  </article>
                </span>
                <!-- end dropdown -->
              </div>
            </td>
            <td class="flex-1 truncate py-3 px-1">Carla Sandaers</td>
            <td class="flex-1 truncate py-3 px-1">Today 08:13</td>
            <td class="flex-1 truncate py-3 px-1">-</td>
            <td class="flex-1 truncate py-3 px-1">-</td>
          </tr>
          <!-- high -->
          <tr class="flex hidden border-b">
            <th class="flex-1 bg-gray-100 px-3 py-2 text-left" colspan="7">
              <h2 class="text-sm">
                <span class="mr-1 font-normal">Priority</span>
                <span>High</span>
              </h2>
            </th>
          </tr>
        </tbody>
      </table>

      <!-- content footer, currently hidden -->
      <footer aria-label="content footer" class="flex hidden border-t bg-white p-3">footer</footer>
    </section>
  </main>
</div>
