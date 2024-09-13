@props([
    "active",
])

@php
    $classes =
        $active ?? false
            ? "block w-full border-l-4 border-indigo-400 bg-indigo-50 py-2 pe-4 ps-3 text-start text-base font-medium transition duration-150 ease-in-out focus:border-indigo-700 focus:bg-indigo-100 focus:outline-none dark:border-indigo-600 dark:bg-indigo-900/50 dark:focus:border-indigo-300 dark:focus:bg-indigo-900"
            : "block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium transition duration-150 ease-in-out focus:border-gray-300 focus:bg-gray-50 dark:focus:border-gray-600 dark:focus:bg-gray-700";
@endphp

<a {{ $attributes->merge(["class" => $classes]) }}>
    {{ $slot }}
</a>
