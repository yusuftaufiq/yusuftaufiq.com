<section {{ $attributes->merge([
  'class' => implode(' ', [
    'container',
    'h-full',
    'flex',
    'flex-col',
    'justify-center',
    'items-center',
    'pt-[4.5rem]',
    'px-5',
    'md:px-8',
    'mx-auto',
    'my-auto',
    'mt-auto',
    'md:px-10',
    'lg:px-32',
  ]),
]) }}>
  {{ $slot }}
</section>
