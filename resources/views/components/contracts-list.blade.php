  <section
    class="w-96 flex-none lg:flex min-h-full flex-col overflow-auto p-4 bg-secondary-50 dark:bg-secondary-900/50 hidden">
    <h1 class="mb-3 font-semibold">Bieżący kontrakt</h1>
    <div>
      <article tabindex="-1" class="mb-2 flex items-start cursor-pointer rounded-sm border bg-white p-3 text-secondary-700 hover:border-extra-500 focus:border-extra-500 focus:outline-none 
          {{($currentContract->id == $activeId) ? 'border-primary-700' : ''}}">
        <div
          class="border rounded-full bg-secondary-100 text-base p-1 mr-4 h-8 w-8 flex items-center justify-center font-medium font-r">
          {{$currentContract->id}}
        </div>

        <div class=" flex-1">
          <header class="mb-1 font-semibold">
            {{$currentContract->shortName}}
          </header>
          <p class="text-gray-600">{{Str::of($currentContract->taskName)->limit(45)}}</p>
          <footer class="mt-2 text-xs text-gray-500">Aktualizacja: {{$currentContract->updated_at}}</footer>
        </div>
      </article>
    </div>
    <div class="border-b"></div>
    <h1 class="my-3 font-semibold">Lista kontraktów</h1>
    <ul>
      @foreach($contracts as $contract)
      @if($contract->id !== $currentContractId)
      <a href="{{route('contract.show', $contract->id)}}">
        <li>
          <article tabindex="{{$loop->iteration}}"
            class="mb-2 flex items-start cursor-pointer rounded-sm border bg-white p-3 text-secondary-700 hover:border-extra-500 focus:border-extra-500 focus:outline-none">
            <div
              class="border rounded-full bg-secondary-100 text-base p-1 mr-4 h-8 w-8 flex items-center justify-center font-medium font-r">
              {{$contract->id}}
            </div>

            <div class=" flex-1">
              <header class="mb-1 font-semibold">
                {{$contract->shortName}}
              </header>
              <p class="text-gray-600">{{Str::of($contract->taskName)->limit(45)}}</p>
              <footer class="mt-2 text-xs text-gray-500">Aktualizacja: {{$contract->updated_at}}</footer>
            </div>
          </article>
        </li>
      </a>
      @endif
      @endforeach
    </ul>
  </section>
