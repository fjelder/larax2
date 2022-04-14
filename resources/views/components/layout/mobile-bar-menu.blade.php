<div x-data="{mobileMenuOpen: false}">
  <div class="min-h-16 md:hidden flex justify-between items-center px-6 py-2">
    <a href="/" class="logo">
      <p class="ml-2 text-3xl">
        <span class="text-4xl font-semibold">L</span>ara<span class="font-semibold text-extra-600/70">x2</span><span
          class="font-semibold text-extra-600">.</span>
      </p>
    </a>

    <div class="hidden cursor-pointer" x-cloak :class="{ 'hidden': mobileMenuOpen }" @click="mobileMenuOpen = true">
      <x-heroicon-o-menu class="h-6 w-6 text-secondary-900" />
    </div>

    <div class="hidden cursor-pointer" x-cloak :class="{ 'hidden': ! mobileMenuOpen }" @click="mobileMenuOpen = false">
      <x-heroicon-s-x class="h-6 w-6 text-extra-700" />
    </div>
  </div>

  <div class="fixed bg-secondary-100 h-full z-50 border-t p-2" x-cloak x-show="mobileMenuOpen"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum pariatur optio dignissimos eaque consequatur sunt,
    temporibus ab magnam fuga reiciendis provident ea facere omnis amet ratione recusandae. Neque, perspiciatis eos.
  </div>
</div>
