<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                {{ __("Dashboard") }}
            </h2>
            <a
                href="{{ route("test-applications.create") }}"
                class="inline-flex items-center rounded bg-blue-500 px-6 py-1.5 hover:bg-blue-600"
            >
                {{ __("Aplicar Teste") }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl">
            <Alert />
        </div>
    </div>
</x-app-layout>
