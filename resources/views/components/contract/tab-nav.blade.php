<div
  class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 mb-10">
  <ul class="flex flex-wrap -mb-px tab">
    <li class="mr-2">
      <a href="{{route('contract.show', $id)}}"
        class="{{request()->routeIs('contract.show') ? 'active' : ''}}">Metryka</a>
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
      <a href="{{route('contract.edit', $id)}}"
        class="{{request()->routeIs('contract.edit') ? 'active' : ''}}">Ustawienia</a>
    </li>
  </ul>
</div>
