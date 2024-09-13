<x-app-layout>
    <x-slot name="header">
        <h2
            class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
        >
            {{ __("Enviar teste") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div
                class="border border-gray-200 bg-white p-6 shadow-lg dark:border-gray-700 dark:bg-gray-800 sm:rounded-md sm:p-10"
            >
                <h3
                    class="mb-2 text-center text-lg font-semibold text-gray-800 dark:text-gray-200"
                >
                    Compartilhe o teste com o paciente
                </h3>
                <p class="mb-4 text-center text-gray-700 dark:text-gray-300">
                    Envie o link abaixo para que o paciente possa acessar o
                    teste:
                </p>
                <a
                    href="{{ route("test-applications.show", $testApplication) }}"
                    class="mb-4 block text-center text-xl font-medium text-blue-600 hover:underline"
                >
                    {{ route("test-applications.show", $testApplication) }}
                </a>
                <p class="mt-6 text-center text-gray-700 dark:text-gray-300">
                    Ou peça ao paciente para escanear o código QR abaixo para
                    acessar o teste diretamente em seu dispositivo:
                </p>
                <div class="mt-4 flex justify-center">
                    <div class="rounded-md bg-gray-100 p-4 shadow-md">
                        {!! $testApplication->qr_code !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
