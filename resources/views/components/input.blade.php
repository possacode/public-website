@props([
    'name',
    'label',
    'value',
    'placeholder'
])

<div>
    <label for="{{ $name }}" class="mb-3 block text-sm font-medium text-black dark:text-white">{{ $label }}</label>
    <input {{ $attributes }} id="{{ $name }}" name="{{ $name }}" value="{{ @old($name) ?? $value ?? '' }}" type="text" placeholder="{{ $placeholder ?? '' }}" class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
    @error($name)
    <span class="group block mt-2 tx-xs text-red-500">{{ $message }}</span>
    @enderror
</div>
