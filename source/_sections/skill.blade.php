<x-section class="text-center">
  <div class="my-2 flex flex-col space-y-4 text-center">
    <h2 class="text-2xl font-bold leading-none sm:text-4xl">Skills</h2>
    <p class="text-center">You can also switch tabs from <b>proficient</b> to <b>familiar</b> if you want to know what other skills I have.</p>
  </div>
  <div class="my-2 grid grid-cols-6 space-x-4">
    <div class="flex justify-center col-span-full md:col-span-1 md:flex-col md:justify-start md:items-start">
      @foreach ($page->siteSections->skills->keys() as $category)
        <button class="p-2 m-2 border-b-2 md:border-l-2 md:border-b-0 md:py-3 dark:border-gray-100 dark:text-gray-100">
          <x-animated-container
            tag="span"
            data-target="#js-tab-{{ $category }}"
            class="js-nav-link {{ $loop->index === 0 ? 'font-semibold text-cyan-900 -translate-y-1 scale-110 dark:text-cyan-400' : '' }}">
            {{ \Illuminate\Support\Str::headline($category) }}
          </x-animated-container>
        </button>
      @endforeach
    </div>
    @foreach ($page->siteSections->skills as $category => $skills)
      <div id="js-tab-{{ $category }}" class="{{ $loop->index === 0 ? 'grid' : 'hidden' }} grid-cols-5 col-span-full md:col-span-5 overflow-x-auto js-tab-pane">
        <div class="min-w-[24rem] sm-h:min-w-fit grid gap-x-5 gap-y-3 md:gap-y-5 grid-rows-2 sm-h:grid-rows-none grid-flow-col sm-h:grid-flow-row grid-cols-2 md:grid-cols-3 col-span-full">
          @foreach ($skills as $skill)
            <div data-tippy-content="{{ $skill->name }}" class="js-tippy flex flex-col items-center">
              <div class="rounded-lg border-2 border-gray-800 dark:border-gray-100 p-2 w-28 h-28">
                <i class="si si-{{ $skill->icon }}"></i>
              </div>
              <h5 class="text-center text-base font-semibold">{{ $skill->name }}</h5>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</x-section>
