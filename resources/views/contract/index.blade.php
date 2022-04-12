<x-app-layout>
  <x-slot name="header">
    Lista kontraktów
  </x-slot>
  <x-slot name="aside">
    <x-contract.aside />
  </x-slot>
  <x-contract.table :contracts=$contracts />
</x-app-layout>
