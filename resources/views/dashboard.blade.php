<x-app-layout>
  <x-slot name="header">
    {{ __('Dashboard') }}
  </x-slot>

  <x-contracts-list :activeId="1" />
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <x-jet-welcome />
      </div>
    </div>
  </div>
</x-app-layout>
