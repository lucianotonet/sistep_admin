<button
    {{ $attributes->merge(["type" => "submit", "class" => "text-white inline-flex items-center px-6 py-1.5 bg-gray-800 dark:bg-gray-200 border border-transparent rounded font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"]) }}
>
    {{ $slot }}
</button>
