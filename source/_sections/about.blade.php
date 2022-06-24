<x-section class="md:flex-row md:space-x-8">
  <img
    loading="lazy"
    src="{{ $page->siteSections->about->image }}"
    data-tippy-content="That's me"
    alt="That's me"
    class="border-2 border-gray-800 dark:border-gray-100 js-tippy hidden md:block xs-h:block object-cover object-center rounded-full h-44 w-44 sm:h-56 sm:w-56 my-4">
  <div class="flex flex-col space-y-4 text-center my-4">
    <h2 class="text-2xl sm:text-4xl font-bold leading-none md:text-right">About Me</h2>
    <p class="text-lg text-justify indent-8">{!! $page->siteSections->about->content !!}</p>
  </div>
</x-section>
