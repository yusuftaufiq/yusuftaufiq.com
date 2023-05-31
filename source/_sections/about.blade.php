<x-section class="md:flex-row md:space-x-8">
  <div class="flex flex-col space-y-4 text-center my-4">
    <x-section.title class="md:text-right">About Me</x-section.title>
    <p class="text-lg text-justify indent-8">{!! $page->siteSections->about->content !!}</p>
  </div>
</x-section>
