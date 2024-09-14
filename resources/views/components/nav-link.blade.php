@props([
    "active",
])

@php
    $classes =
        $active ?? false
            ? "inline-flex items-center border-b-2 border-primary-400 px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:border-primary-700 focus:outline-none dark:border-primary-600"
            : "inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:border-gray-300 dark:focus:border-gray-700";
@endphp

<a {{ $attributes->merge(["class" => $classes]) }}>
    {{ $slot }}
</a>
