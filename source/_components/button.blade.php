@props(['type' => 'primary'])

@php
  $colors = [
    'primary' => implode(' ', [
      'border-primary-100',
      'text-primary-100',
      'bg-primary-800',
      'hover:text-primary-800',
      'hover:bg-primary-100',
      'hover:border-primary-800',
      'dark:text-primary-800',
      'dark:bg-primary-100',
      'dark:hover:text-primary-100',
      'dark:hover:bg-primary-800',
      'dark:hover:border-primary-100',
    ]),
    'secondary' => implode(' ', [
      'border-primary-800',
      'text-primary-800',
      'bg-primary-100',
      'hover:text-primary-100',
      'hover:bg-primary-800',
      'hover:border-primary-100',
      'dark:text-primary-800',
      'dark:bg-primary-100',
      'dark:hover:text-primary-100',
      'dark:hover:bg-primary-800',
      'dark:hover:border-primary-100',
    ]),
  ];
@endphp

<button {{ $attributes->merge([
  'class' => implode(' ', [
    'text-lg',
    'border-2',
    'font-semibold',
    'rounded-lg',
    'transition',
    'duration-300',
    'hover:-translate-y-1',
    'rounded-xl',
    $colors[$type],
  ])
]) }}>
  {{ $slot }}
</button>
