@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->merge([
  'class' => implode(' ', [
    'transition',
    'ease-in-out',
    'delay-150',
    'duration-300',
    'hover:text-cyan-900',
    'hover:-translate-y-1',
    'hover:scale-110',
    'active:text-cyan-900',
    'active:-translate-y-1',
    'active:scale-110',
    'hover:dark:text-cyan-400',
    'active:dark:text-cyan-400',
  ])
]) }}>
  {{ $slot }}
</{{ $tag }}>
