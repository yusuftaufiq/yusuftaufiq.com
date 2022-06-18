<section class="container h-full flex flex-col justify-center items-center mt-12 px-6 py-8 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
  <div class="js-typed-strings">
    @foreach ($page->siteSections->home->descriptions as $description)
      <h1 class="text-4xl font-bold leading-none sm:text-5xl">
        {{ $description }}
      </h1>
    @endforeach
  </div>

  <div class="block text-4xl font-bold leading-none sm:text-5xl">
    <span class="js-typed"></span>
  </div>

  <p class="px-8 mt-8 mb-12 text-lg">Click the continue button below or scroll down to see the next page.</p>

  <div class="flex flex-wrap justify-center">
    <x-button
      type="primary"
      class="js-tippy js-dark-mode dark:hidden"
      data-tippy-content="Are you a vampire?"
    >
      <i class="fas fa-moon"></i> Dark mode please
    </x-button>
    <x-button
      type="primary"
      class="js-tippy js-light-mode hidden dark:block"
      data-tippy-content="Let me guess, you are definitely not in a dark room"
    >
      <i class="fas fa-sun"></i> Prefer light mode
    </x-button>
    <x-button type="secondary" class="js-swiper-button-next group">
      <i class="animate-bounce group-hover:animate-none fas fa-sort-down"></i> Continue
    </x-button>
  </div>
</section>
