<nav class="bg-sky-500"
  x-data="{ isOpen: false }"
  x-resize.document="isOpen = false"
>
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <div class="shrink-0">
          <x-logo />
        </div>
        <div class="flex items-baseline ml-4 space-x-4">
          <x-nav-link href="/" class="text-lg text-white">Norton CP School</x-nav-link>
        </div>
        <div class="hidden md:block">
          <div class="flex items-baseline ml-10 space-x-4">
            {{ $slot }}
          </div>
        </div>
      </div>
      <div class="flex items-center">
        <div class="hidden md:block">
          @guest
            <x-nav-link href="/login">Login</x-nav-link>
          @endguest
          @auth
            <x-nav-link href="/user">{{ Auth::user()->name_pref }}</x-nav-link>
          @endauth
        </div>
      </div>
      <div class="flex -mr-2 md:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false"
          @click="isOpen = !isOpen"
        >
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!-- Menu open: "hidden", Menu closed: "block" -->
          <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
            :class="{'hidden': isOpen, 'block': !isOpen }"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!-- Menu open: "block", Menu closed: "hidden" -->
          <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
            :class="{'block': isOpen, 'hidden': !isOpen }"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div :class="{'block': isOpen, 'hidden': !isOpen }" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      {{ $slot }}
    </div>
  </div>   
</nav>