<header class="p-1 md:p-2 w-full z-10 fixed bg-gray-100 dark:bg-gray-800 border-b-2 dark:border-cyan-400">
  <nav class="navbar container flex justify-between mx-auto min-w-full">
    <input autocomplete="off" type="checkbox" name="hbr" id="hbr" class="hidden peer" aria-hidden="true" />
    <div class="p-4 h-fit flex justify-start space-x-3">
      <x-animated-container data-tippy-content="Y for Yusuf" tag="a" rel="noopener noreferrer" href="#" aria-label="Back to homepage" class="js-tippy">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
          class="w-8 h-8">
          <path class="a"
            d="m2.9 2.4h9.7l0.4 0.7c0.3 0.4 0.7 1.1 0.9 1.4 0.4 0.6 0.4 0.8-1.1 3l-0.8-1.2c-0.7-1.2-0.8-1.3-4.1-1.3l6.8 9.8v8.9h2.6v-8.8l3.3-4.8c1.8-2.6 3.2-4.8 3.2-4.9 0-0.1-0.7-0.2-3.1-0.2l-4.7 6.9-0.7-0.9c-0.3-0.4-0.6-1-0.6-1.2 0-0.2 1-1.9 4.7-7.4h4.7c2.6 0 4.7 0 4.7 0.1 0 0.1-1.9 3-8.8 12.9v10.9h-8v-10.8l-4.6-6.5z" />
          <path class="a" d="m8.8 15.4l-5.3 8.3 8.3 5.2-3.4 0.8-8.2-5.3 5.2-8.2z" />
          <path class="a" d="m26.6 16.2l5.1 8.2-8.2 5.3-3.4-0.8 8.3-5.2-5.2-8.3z" />
        </svg>
      </x-animated-container>
      <x-animated-container
        class="js-tippy js-dark-mode dark:hidden cursor-pointer"
        data-tippy-content="Toggle dark and light mode"
      >
        <i class="w-7 h-7 fas fa-moon"></i>
      </x-animated-container>
      <x-animated-container
        class="js-tippy js-light-mode hidden dark:inline cursor-pointer"
        data-tippy-content="Toggle dark and light mode"
      >
        <i class="w-7 h-7 fas fa-sun"></i>
      </x-animated-container>
    </div>
    <ul class="items-stretch space-y-8 mt-20 mb-8 md:mb-0 md:mt-0 hidden -ml-8 md:ml-auto md:space-y-0 md:space-x-3 md:flex peer-checked:block">
      @foreach ($page->siteSections->keys() as $item)
        <li class="flex items-center place-content-center pb-2 md:pb-0 px-4 border-b-2 dark:border-gray-100">
          <x-animated-container
            class="js-nav-item {{ $loop->index === 0 ? 'text-cyan-900 font-semibold dark:text-cyan-400 -translate-y-1 scale-110' : '' }}"
            tag="a" rel="noopener noreferrer" href="#"
          >
            {{ Illuminate\Support\Str::headline($item) }}
          </x-animated-container>
        </li>
      @endforeach
    </ul>
    <x-animated-container tag="label" for="hbr" class="
      md:hidden inline p-4 cursor-pointer h-fit
      peer-checked:text-cyan-900
      dark:peer-checked:text-cyan-400
      peer-checked:-translate-y-1
      peer-checked:scale-110
    ">
      <i class="fas fa-bars w-6 h-6"></i>
    </x-animated-container>
  </nav>
</header>
