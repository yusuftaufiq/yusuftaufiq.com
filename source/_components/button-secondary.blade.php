<button {{ $attributes->merge([
  'class' => implode(' ', [
    'px-8',
    'py-3',
    'm-2',
    'text-lg',
    'border-2',
    'border-gray-800',
    'font-semibold',
    'rounded',
    'text-gray-800',
    'bg-gray-100',
    'transition',
    'duration-300',
    'hover:-translate-y-1',
    'hover:text-gray-100',
    'hover:bg-gray-800',
    'hover:border-gray-100',
    'active:-translate-y-1',
    'active:text-gray-100',
    'active:bg-gray-800',
    'active:border-gray-100',
    'dark:text-gray-800',
    'dark:bg-blue-400',
    'dark:hover:text-gray-800',
    'dark:hover:bg-gray-100',
    'dark:hover:border-gray-800',
    'dark:active:text-gray-800',
    'dark:active:bg-gray-100',
    'dark:active:border-gray-800',
    'rounded-xl',
  ])
]) }}>
  {{ $slot }}
</button>