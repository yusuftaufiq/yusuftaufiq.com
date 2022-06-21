<x-section class="text-center">
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

  <p class="px-8 mt-8 mb-12 text-lg">Swipe or scroll down to see the next page.</p>

  <div class="flex flex-wrap justify-center align-center">
    <x-animated-container class="js-swiper-button-next group cursor-pointer">
      <i class="animate-bounce group-hover:animate-none fas fa-angle-double-down h-6 w-6"></i>
    </x-animated-container>
  </div>
</x-section>
