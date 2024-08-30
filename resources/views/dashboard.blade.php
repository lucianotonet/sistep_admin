<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('test-applications.create') }}" class="inline-flex items-center px-6 py-1.5 bg-blue-500 text-white rounded hover:bg-blue-600">
                {{ __('Aplicar Teste') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Bem-vindo ao SISTEP!                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
