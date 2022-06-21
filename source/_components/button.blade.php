@props(['type' => 'primary'])

@php
  $colors = [
    'primary' => implode(' ', [
      'border-gray-100',
      'text-gray-100',
      'bg-gray-800',
      'hover:text-gray-800',
      'hover:bg-gray-100',
      'hover:border-gray-800',
      'dark:text-gray-800',
      'dark:bg-gray-100',
      'dark:hover:text-gray-100',
      'dark:hover:bg-gray-800',
      'dark:hover:border-gray-100',
    ]),
    'secondary' => implode(' ', [
      'border-gray-800',
      'text-gray-800',
      'bg-gray-100',
      'hover:text-gray-100',
      'hover:bg-gray-800',
      'hover:border-gray-100',
      'dark:text-gray-800',
      'dark:bg-cyan-400',
      'dark:hover:text-gray-800',
      'dark:hover:bg-gray-100',
      'dark:hover:border-gray-800',
    ]),
  ];
@endphp

<button {{ $attributes->merge([
  'class' => implode(' ', [
    'px-8',
    'py-3',
    'm-2',
    'text-lg',
    'border-2',
    'font-semibold',
    'rounded',
    'transition',
    'duration-300',
    'hover:-translate-y-1',
    'rounded-xl',
    $colors[$type],
  ])
]) }}>
  {{ $slot }}
</button>
