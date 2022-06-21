<section {{ $attributes->merge([
  'class' => implode(' ', [
    'container',
    'h-full',
    'flex',
    'flex-col',
    'justify-center',
    'items-center',
    'pt-[4.5rem]',
    'px-8',
    'my-auto',
    'mt-auto',
    'md:px-10',
    'lg:px-32',
  ]),
]) }}>
  {{ $slot }}
</section>
