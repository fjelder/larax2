<x-app-layout>
  <x-slot name="header">
    {{__('Dashboard')}}
  </x-slot>
  <div class="flex flex-grow">
    <!-- section update to tickets -->


    <!-- section content -->
    <section aria-label="main content"
      class="flex min-h-0 flex-auto flex-col border-l dark:border-secondary-300/10 overflow-auto">
      <!-- content navigation -->
      <nav class="flex p-4">
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
              <div class="w-full max-w-xs rounded-md rounded-t-lg border bg-white shadow-lg">
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
        class="flex h-full min-h-0 flex-col border-t w-full">
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
        <tbody class="flex min-h-0 w-full flex-1 flex-col px-4">
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
      <footer aria-label="content footer" class="flex border-t bg-white p-3">footer</footer>
    </section>
  </div>

</x-app-layout>
