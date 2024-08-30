<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enviar teste') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-6 sm:p-10 bg-white dark:bg-gray-800 shadow-lg sm:rounded-md border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2 text-center">
                    Compartilhe o teste com o paciente
                </h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4 text-center">
                    Envie o link abaixo para que o paciente possa acessar o teste:
                </p>
                <a href="{{ route('test-applications.show', $testApplication) }}" class="text-blue-600 hover:underline font-medium text-xl text-center block mb-4">
                    {{ route('test-applications.show', $testApplication) }}
                </a>
                <p class="mt-6 text-gray-700 dark:text-gray-300 text-center">
                    Ou peça ao paciente para escanear o código QR abaixo para acessar o teste diretamente em seu dispositivo:
                </p>
                <div class="mt-4 flex justify-center">
                    <div class="bg-gray-100 p-4 rounded-md shadow-md">
                        {!! $testApplication->qr_code !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>