@props([
  'route',
  'icon' => null,
])

@php
    $isActive = request()->routeIs($route);
@endphp

<a
  wire:navigate
  href="{{ route($route) }}"
  {{ $attributes->merge([
    'class' => 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg focus:outline-hidden ' . 
    ($isActive 
      ? 'bg-gray-100 text-gray-900' 
      : 'text-gray-800 hover:bg-gray-100 focus:bg-gray-100')
    ]) 
  }}
>
  @if ($icon)
    <x-dynamic-component :component="$icon" class="h-4 w-4" />
  @endif
  {{ $slot }}
</a>