@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->merge([
  'class' => implode(' ', [
    'transition',
    'ease-in-out',
    'delay-150',
    'duration-300',
    'hover:font-semibold',
    'hover:text-cyan-900',
    'hover:-translate-y-1',
    'hover:scale-110',
    'hover:dark:text-cyan-400',
  ])
]) }}>
  {{ $slot }}
</{{ $tag }}>
