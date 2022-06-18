<section {{ $attributes->merge([
  'class' => implode(' ', [
    'container',
    'h-full',
    'flex',
    'flex-col',
    'justify-center',
    'items-center',
    'px-8',
    'py-auto',
    'my-auto',
    'mx-auto',
    'md:px-10',
    'lg:px-32',
  ]),
]) }}>
  {{ $slot }}
</section>
