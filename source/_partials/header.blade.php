<header class="p-4">
  <input autocomplete="off" type="checkbox" name="hbr" id="hbr" class="hidden peer" aria-hidden="true" />
  <nav class="navbar peer-checked:navbar-active container flex justify-between md:h-16 mx-auto">
    <a rel="noopener noreferrer" href="#" aria-label="Back to homepage" class="flex justify-start p-4 tw-animated">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
        class="w-8 h-8 dark:text-blue-400">
        <path class="a"
          d="m2.9 2.4h9.7l0.4 0.7c0.3 0.4 0.7 1.1 0.9 1.4 0.4 0.6 0.4 0.8-1.1 3l-0.8-1.2c-0.7-1.2-0.8-1.3-4.1-1.3l6.8 9.8v8.9h2.6v-8.8l3.3-4.8c1.8-2.6 3.2-4.8 3.2-4.9 0-0.1-0.7-0.2-3.1-0.2l-4.7 6.9-0.7-0.9c-0.3-0.4-0.6-1-0.6-1.2 0-0.2 1-1.9 4.7-7.4h4.7c2.6 0 4.7 0 4.7 0.1 0 0.1-1.9 3-8.8 12.9v10.9h-8v-10.8l-4.6-6.5z" />
        <path class="a" d="m8.8 15.4l-5.3 8.3 8.3 5.2-3.4 0.8-8.2-5.3 5.2-8.2z" />
        <path class="a" d="m26.6 16.2l5.1 8.2-8.2 5.3-3.4-0.8 8.3-5.2-5.2-8.3z" />
      </svg>
    </a>
    <ul class="items-stretch space-y-8 mt-20 md:mt-0 hidden navbar-menu-list md:space-y-0 md:space-x-3 md:flex">
      @foreach ($navigationItems as $item)
        <x-navigation-item :link="$item->get('link')" :title="$item->get('title')" />
      @endforeach
    </ul>
    <label for="hbr" class="navbar-toggle flex justify-end p-4 md:hidden tw-animated">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </label>
  </nav>
</header>
