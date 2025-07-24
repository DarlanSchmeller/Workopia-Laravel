@props([
    'url' => '/',
    'active' => false,
    'icon' => null,
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textColor' => 'text-black',
])

<a href="{{ $url }} {{ $attributes }}"
    class="{{ $bgClass }} {{ $hoverClass }} {{ $textColor }} px-4 py-2 rounded hover:shadow-md transition duration-300
    {{ $active ? 'text-yellow-1000 font-bold' : '' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }} "></i>
    @endif
    {{ $slot }}
</a>
