<x-section class="text-center">
  <div class="js-typed-strings">
    @foreach ($page->siteSections->home->descriptions as $description)
      <h1 class="text-4xl font-bold leading-none sm:text-5xl">
        {!! $description !!}
      </h1>
    @endforeach
  </div>

  <div class="block text-4xl font-bold leading-none sm:text-5xl">
    <span class="js-typed"></span>
  </div>

  <p class="px-8 mt-8 mb-12 text-lg">
    <span class="js-introducing-myself">Please wait a moment until I finish introducing myself.</span>
    <span class="hidden js-finished-introducing-myself">Swipe or scroll down to see the next page.</span>
  </p>

  <div class="flex flex-wrap justify-center align-center">
    <x-button aria-label="Skip animation" type="primary" class="js-introducing-myself js-skip-typed-animation px-8 py-3 m-2">Skip Animation</x-button>
    <x-animated-container class="hidden js-finished-introducing-myself js-swiper-button-next group cursor-pointer">
      <i class="animate-bounce group-hover:animate-none fas fa-angle-double-down h-6 w-6"></i>
    </x-animated-container>
  </div>
</x-section>
