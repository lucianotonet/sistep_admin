<x-guest-layout>
    <div class="mx-auto w-full max-w-xs md:max-w-md">
        <h1 class="mb-10 text-2xl font-bold">Verificar Email</h1>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Obrigado por se cadastrar! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos prazer em enviar outro.") }}
        </div>

        @if (session("status") == "verification-link-sent")
            <div
                class="mb-4 text-sm font-medium text-green-600 dark:text-green-400"
            >
                {{ __("Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.") }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route("verification.send") }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __("Reenviar E-mail de Verificação") }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route("logout") }}">
                @csrf

                <button
                    type="submit"
                    class="rounded text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                >
                    {{ __("Sair") }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>