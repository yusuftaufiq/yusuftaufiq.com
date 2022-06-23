<x-section class="text-center">
  <div class="my-2 flex flex-col space-y-4 text-center">
    <h2 class="text-2xl font-bold leading-none sm:text-4xl">Skills</h2>
    <p class="text-lg text-center">You can also switch tabs from <b>proficient</b> to <b>familiar</b> if you want to know what other skills I have.</p>
  </div>
  <div class="my-2 grid grid-cols-7">
    <div class="flex justify-center col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start">
      @foreach ($page->siteSections->skills->keys() as $category)
        <button class="p-2 m-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3 dark:border-gray-100 dark:text-gray-100">
          <x-animated-container
            tag="span"
            data-target="#js-tab-{{ $category }}"
            class="text-base js-nav-link {{ $loop->index === 0 ? 'font-semibold text-cyan-900 -translate-y-1 scale-110 dark:text-cyan-400' : '' }}">
            {{ \Illuminate\Support\Str::headline($category) }}
          </x-animated-container>
        </button>
      @endforeach
    </div>
    @foreach ($page->siteSections->skills as $category => $skills)
      <div id="js-tab-{{ $category }}" class="{{ $loop->index === 0 ? 'flex' : 'hidden' }} col-span-full md:col-span-6 js-tab-pane w-full h-full flex-row items-center">
        <x-button type="primary" class="{{ $category }}-swiper-button-prev">
          <i class="h-4 w-6 fas fas fa-angle-left"></i>
        </x-button>
        <div class="swiper js-swiper-skills" data-category="{{ $category }}">
          <div class="swiper-wrapper">
            @foreach ($skills->chunk(2) as $skills)
              <div class="swiper-slide flex flex-col space-y-3">
                @foreach ($skills as $skill)
                  <div class="flex flex-col items-center mx-2">
                    <div class="rounded-lg border-2 border-gray-800 dark:border-gray-100 p-2 w-28 h-28">
                      <i class="si si-{{ $skill->icon }}"></i>
                    </div>
                    <h3 class="text-center text-base font-semibold">{{ $skill->name }}</h3>
                  </div>
                @endforeach
              </div>
            @endforeach
          </div>
        </div>
        <x-button type="primary" class="{{ $category }}-swiper-button-next">
          <i class="h-4 w-6 fas fas fa-angle-right"></i>
        </x-button>
      </div>
    @endforeach
  </div>
</x-section>
