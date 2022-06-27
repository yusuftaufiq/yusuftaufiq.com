<div class="min-w-[1.75rem] min-h-[2.5rem]">
  <x-button
    aria-label="{{ $attributes->get('label') }}"
    data-tippy-content="{{ $attributes->get('label') }}"
    type="primary"
    class="{{ $attributes->get('class') }} js-tippy rounded-md w-full"
  >
    @switch($attributes->get('type'))
      @case('previous')
        <i class="fas fas fa-angle-left"></i>
        @break
      @case('next')
        <i class="fas fas fa-angle-right"></i>
        @break
    @endswitch
  </x-button>
</div>
