<button
    {{
      $attributes->class([
        'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
        'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
        'hover:bg-lime-700 hover:border-lime-700 hover:text-white' => $variant === 'outline-lime',
        'bg-lime-500 border-lime-500 text-white hover:bg-lime-800 ' => $variant === 'lime',
        'bg-gray-900 border-gray-700 text-white hover:bg-gray-800 ' => $variant === 'dark',
        'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
      ])
    }}
>
    {{ $slot }}
</button>
