<x-section class="md:flex-row md:space-x-8 mt-12 md:mt-auto">
  <img
    src="{{ $page->siteSections->about->image }}"
    data-tippy-content="That's me"
    alt="That's me"
    class="js-tippy block object-none object-center rounded-full h-48 w-48 my-4">
  <div class="flex flex-col space-y-4 text-center my-4">
    <h2 class="text-4xl font-bold leading-none md:text-right">About Me</h2>
    <p class="text-lg text-justify indent-8">{!! $page->siteSections->about->content !!}</p>
    <div class="text-center md:text-right">
      <x-button type="primary" class="js-swiper-button-next group">
        <i class="animate-bounce group-hover:animate-none fas fa-sort-down"></i> Continue
      </x-button>
    </div>
  </div>
</x-section>
