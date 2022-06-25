<x-section>
  <div class="my-2 flex flex-col space-y-4 text-center">
    <h2 class="text-2xl font-bold leading-none sm:text-4xl">Projects</h2>
    <p class="text-lg text-center">Here are the best projects I've ever worked on.</p>
  </div>
  <div class="w-full flex flex-row items-center">
    <div class="min-w-[1.75rem]">
      <x-button data-tippy-content="See previous projects" aria-label="See previous projects" type="primary" class="js-tippy projects-swiper-button-prev rounded-md w-full">
        <i class="fas fas fa-angle-left"></i>
      </x-button>
    </div>
    <div class="swiper js-swiper-projects">
      <div class="swiper-wrapper">
        @foreach ($page->siteSections->projects as $project)
          <div class="p-1 space-y-2 swiper-slide !h-auto">
            <div class="flex flex-col justify-between h-full rounded-lg border-2 border-gray-800 dark:border-gray-100 px-4 py-2">
              <div class="flex flex-col">
                <h3 class="text-xl font-semibold">{{ $project->title }}</h3>
                <p class="text-lg text-justify">{{ $project->description }}</p>
                <p class="text-lg text-justify">{{ $project->stacks->implode(' • ') }}</p>
              </div>
              <p class="text-lg mt-2 flex flex-row flex-wrap">
                @foreach ($project->links as $link)
                  <x-animated-container tag="a" href="{{ $link->url }}" class="mx-1">
                    <i class="align-middle inline-block si si-{{ $link->icon }} h-5 w-5"></i>&nbsp;{{ $link->name }}
                  </x-animated-container>
                @endforeach
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="min-w-[1.75rem]">
      <x-button data-tippy-content="See next projects" aria-label="See next projects" type="primary" class="js-tippy projects-swiper-button-next rounded-md w-full">
        <i class="fas fas fa-angle-right"></i>
      </x-button>
  </div>
</x-section>
