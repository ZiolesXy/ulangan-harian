@props([
    'icon',
    'href',
    'label',
])

@php
    $isActive = request()->is(ltrim($href, '/')); // cocokkan path sekarang dengan href
@endphp

<a href="{{ url($href) }}"
   class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 group
          {{ $isActive ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
    <i class="{{ $icon }} text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
    <span class="ml-3">{{ $label }}</span>
</a>
