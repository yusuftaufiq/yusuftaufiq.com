<x-section>
  <div class="my-2 flex flex-col space-y-4 text-center">
    <x-section.title>Projects</x-section.title>
    <p class="text-lg text-center">Here are the best open source projects I've ever worked on:</p>
  </div>
  <div class="w-full flex flex-row items-center">
    <x-swiper.horizontal-nav type="previous" label="See previous projects" class="projects-swiper-button-prev"/>
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
    <x-swiper.horizontal-nav type="next" label="See next projects" class="projects-swiper-button-next"/>
  </div>
</x-section>
