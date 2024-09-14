@props([
    "active",
])

@php
    $classes =
        $active ?? false
            ? "block w-full border-l-4 border-primary-400 bg-primary-50 py-2 pe-4 ps-3 text-start text-base font-medium transition duration-150 ease-in-out focus:border-primary-700 focus:bg-primary-100 focus:outline-none dark:border-primary-600 dark:bg-primary-900/50 dark:focus:border-primary-300 dark:focus:bg-primary-900"
            : "block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium transition duration-150 ease-in-out focus:border-gray-300 focus:bg-gray-50 dark:focus:border-gray-600 dark:focus:bg-gray-700";
@endphp

<a {{ $attributes->merge(["class" => $classes]) }}>
    {{ $slot }}
</a>
