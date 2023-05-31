<x-section class="text-center">
  <div class="my-2 flex flex-col space-y-4 text-center">
    <x-section.title>Skills</x-section.title>
    <p class="text-lg text-center">Able to work with the following technology stacks:</p>
  </div>
  <div class="my-2 grid grid-cols-7">
    <div class="flex col-span-full md:col-span-7 js-tab-pane w-full h-full flex-row items-center">
      <x-swiper.horizontal-nav type="previous" label="See previous skills" class="skills-swiper-button-prev"/>
      <div class="swiper js-swiper-skills">
        <div class="swiper-wrapper">
          @foreach ($page->siteSections->skills->chunk(2) as $skills)
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
      <x-swiper.horizontal-nav type="next" label="See next skills" class="skills-swiper-button-next"/>
    </div>
  </div>
</x-section>
