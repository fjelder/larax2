<x-app-layout>
  <x-slot name="header">
    Szczegóły kontraktu
  </x-slot>
  <x-contracts-list :activeId="$contract->id" />



  <div>

    <div
      class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mb-10">
      <ul class="flex flex-wrap -mb-px tab">
        <li class="mr-2">
          <a href="#" class="{{request()->routeIs('contract.show') ? 'active' : ''}}">Metryka</a>
        </li>
        <li class="mr-2">
          <a href="#" class="" aria-current="page">Dashboard</a>
        </li>
        <li class="mr-2">
          <a href="#" class="">Settings</a>
        </li>
        <li class="mr-2">
          <a href="#" class="">Contacts</a>
        </li>
        <li>
          <a class="disabled">Ustawienia</a>
        </li>
      </ul>
    </div>



    <div class="px-4">
      <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Metryka kontraktowa</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Podstawowe informacje kontraktowe</p>
      </div>
      <div class="border-t border-gray-200">
        <dl>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Indywidualny identyfikacyjny numer kontraktu</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4 font-semibold">ID: {{$contract->id}}</dd>
          </div>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Pełna nazwa zadania</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">{{$contract->taskName}}</dd>
          </div>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Skrócona nazwa kontraktu</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">{{$contract->shortName}}</dd>
          </div>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Numer umowy</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">{{$contract->contractNumber}}</dd>
          </div>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Data podpisania umowy</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">b/d</dd>
          </div>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">About</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">Fugiat ipsum ipsum deserunt culpa aute sint do
              nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit
              nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit
              deserunt qui eu.</dd>
          </div>
          <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">{{__('Attachments')}}</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">
              <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                  <div class="w-0 flex-1 flex items-center">
                    <!-- Heroicon name: solid/paper-clip -->
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                        clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2 flex-1 w-0 truncate"> resume_back_end_developer.pdf </span>
                  </div>
                  <div class="ml-4 flex-shrink-0">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                  </div>
                </li>
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                  <div class="w-0 flex-1 flex items-center">
                    <!-- Heroicon name: solid/paper-clip -->
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                        clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2 flex-1 w-0 truncate"> coverletter_back_end_developer.pdf </span>
                  </div>
                  <div class="ml-4 flex-shrink-0">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                  </div>
                </li>
              </ul>
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>


</x-app-layout>
