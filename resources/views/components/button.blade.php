@props([
    'tag' => 'button',
    'href',
])


@if($tag === 'a')
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-md bg-primary py-2 px-6 text-center font-medium text-white hover:bg-opacity-90']) }}
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-md bg-primary py-2 px-6 text-center font-medium text-white hover:bg-opacity-90']) }}
        {{ $attributes }}
    >
        {{ $slot }}
    </button>
@endif

