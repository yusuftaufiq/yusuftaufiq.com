<x-section>
  <div class="my-2 flex flex-col space-y-4 text-center">
    <h2 class="text-2xl font-bold leading-none sm:text-4xl">Contacts</h2>
    <p class="text-lg text-center">Want to reach me on another site?</p>
  </div>
  <div class="grid grid-flow-col justify-center">
    @foreach ($page->siteSections->contacts as $contact)
      <a target="_blank" href="{{ $contact->link }}" class="col-span-full">
        <x-button type="secondary" class="flex flex-row px-4 py-3 m-2 space-x-2 justify-start w-full">
          <i class="si si-{{ $contact->icon }} h-7 w-7"></i>
          <span class="justify-self-stretch w-full">{{ $contact->name }}</span>
        </x-button>
      </a>
    @endforeach
  </div>
</x-section>
