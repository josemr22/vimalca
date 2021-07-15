@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 sm:mb-1']) }}>
    {{ $value ?? $slot }}
</label>
