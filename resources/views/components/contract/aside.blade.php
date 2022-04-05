<aside class="flex gap-4 py-4 border-b md:border-r md:block">
  <a href="{{route('contract.index')}}" class="{{  request()->routeIs('contract.index') ? 'active' : ''}}">
    <x-heroicon-o-table />
  </a>
  <a href="{{route('contract.create')}}" class="{{  request()->routeIs('contract.create') ? 'active' : ''}}">
    <x-heroicon-o-plus />
  </a>
</aside>
