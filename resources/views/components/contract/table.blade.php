<div class="relative w-full overflow-x-auto sm:rounded-lg">
  <div class="p-4">
    <label for="table-search" class="sr-only">Wyszukaj</label>
    <div class="relative mt-1">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd"></path>
        </svg>
      </div>
      <input type="text" id="table-search" class="table-text-input" placeholder="Wyszukaj kontrakt">
    </div>
  </div>

  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="p-4">
          <div class="flex items-center">
            <input id="checkbox-all-search" type="checkbox"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-all-search" class="sr-only">checkbox</label>
          </div>
        </th>
        <th scope="col" class="px-6 py-3">
          Id
        </th>
        <th scope="col" class="px-6 py-3">
          Skrócona nazwa kontraktu
        </th>
        <th scope="col" class="px-6 py-3 hidden lg:table-cell">
          Nazwa zadania
        </th>
        <th scope="col" class="px-6 py-3">
          Numer umowy
        </th>
        <th scope="col" class="px-6 py-3">
          Stadium kontraktu
        </th>
        <th scope="col" class="px-6 py-3">
          <span class="sr-only">Edit</span>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($contracts as $contract)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <td class="w-4 p-4">
          <div class="flex items-center">
            <input id="checkbox-table-search-1" type="checkbox"
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
          </div>
        </td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
          {{$contract->id}}
        </td>
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
          {{$contract->shortName}}
        </td>
        <td class="px-6 py-4 hidden lg:table-cell text-xs">
          {{$contract->taskName}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-xs">
          {{$contract->contractNumber}}
        </td>
        <td
          class="px-6 py-4 text-xxs text-secondary-600 dark:text-secondary-300 tracking-wide font-semibold text-center uppercase">

          @switch($contract->contractStudyId)
          @case(1)

          <p
            class="text-xxs border-2 rounded-tl-lg rounded-br-lg  px-1 py-0.5 bg-red-400/20 border-red-500/10 shadow-sm">
            {{ getStudyContract($contract->contractStudyId) }}
          </p>
          @break

          @case(2)
          <p class="border-2 rounded-tl-lg rounded-br-lg px-1 py-0.5 bg-green-400/20 border-green-500/10 shadow-sm">
            {{ getStudyContract($contract->contractStudyId) }}
          </p>
          @break

          @case(3)
          <p class="border-2 rounded-tl-lg rounded-br-lg px-1 py-0.5 bg-orange-400/20 border-orange-500/10 shadow-sm">
            {{ getStudyContract($contract->contractStudyId) }}
          </p>
          @break

          @default
          <span class="">
            {{ getStudyContract($contract->contractStudyId) }}
          </span>
          @endswitch

        </td>
        <td class="">
          <a href="{{route('contract.show', $contract->id)}}" class="text-primary-400 hover:text-primary-600 ">
            <x-heroicon-o-chevron-double-down
              class="w-5 h-5 inline-block hover:-rotate-90 transition-all duration-300" />
          </a>

        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  <div class="my-6">
    {{$contracts->links() }}
  </div>
</div>
