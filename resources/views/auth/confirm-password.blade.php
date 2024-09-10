<x-guest-layout>
    <div class="w-full max-w-xs md:max-w-md mx-auto">

        <h1 class="text-2xl font-bold mb-10">Confirmar Senha</h1>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Esta é uma área segura da aplicação. Por favor, confirme sua senha antes de continuar.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Senha -->
            <div>
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>