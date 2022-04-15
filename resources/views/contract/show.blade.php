<x-app-layout>
  <x-slot name="header">
    Szczegóły kontraktu
  </x-slot>
  <x-contracts-list :activeId="$contract->id" />



  <div>

    <x-contract.tab-nav :id="$contract->id" />

    <x-contract.base-info :contract="$contract" />
  </div>


</x-app-layout>
