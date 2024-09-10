<x-guest-layout>
    <div class="w-full max-w-xs md:max-w-md mx-auto">

        <h1 class="text-2xl font-bold mb-10">Esqueceu sua senha?</h1>

        <div class="mb-4 text-sm">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um link para redefinição de senha que permitirá que você escolha uma nova.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Enviar link de redefinição de senha') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>