@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-xs']) }}>
    {{ $value ?? $slot }}
</label>
