@props(["disabled" => false])

<input
    {{ $disabled ? "disabled" : "" }}
    {!! $attributes->merge(["class" => "w-full text-black border-black dark:border-white dark:bg-white focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded shadow-inner"]) !!}
/>
