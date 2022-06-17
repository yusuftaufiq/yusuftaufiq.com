<button {{ $attributes->merge([
  'class' => implode(' ', [
    'px-8',
    'py-3',
    'm-2',
    'text-lg',
    'border-2',
    'font-semibold',
    'rounded',
    'text-gray-100',
    'bg-gray-800',
    'transition',
    'duration-300',
    'hover:-translate-y-1',
    'hover:text-gray-800',
    'hover:bg-gray-100',
    'hover:border-gray-800',
    'active:-translate-y-1',
    'active:text-gray-800',
    'active:bg-gray-100',
    'active:border-gray-800',
    'dark:text-gray-800',
    'dark:bg-gray-100',
    'dark:hover:text-gray-100',
    'dark:hover:bg-gray-800',
    'dark:hover:border-gray-100',
    'dark:active:text-gray-100',
    'dark:active:bg-gray-800',
    'dark:active:border-gray-100',
    'rounded-xl',
  ])
]) }}>
  {{ $slot }}
</button>
