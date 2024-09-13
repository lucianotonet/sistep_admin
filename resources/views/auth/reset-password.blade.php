<x-guest-layout>
    <div class="mx-auto w-full max-w-xs md:max-w-md">
        <h1 class="mb-10 text-2xl font-bold">Redefinir Senha</h1>
        <form method="POST" action="{{ route("password.store") }}">
            @csrf

            <!-- Token de Redefinição de Senha -->
            <input
                type="hidden"
                name="token"
                value="{{ $request->route("token") }}"
            />

            <!-- Endereço de Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="mt-1 block w-full"
                    type="email"
                    name="email"
                    :value="old('email', $request->email)"
                    required
                    autofocus
                    autocomplete="username"
                />
                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2"
                />
            </div>

            <!-- Senha -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />
                <x-text-input
                    id="password"
                    class="mt-1 block w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                />
                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />
            </div>

            <!-- Confirmar Senha -->
            <div class="mt-4">
                <x-input-label
                    for="password_confirmation"
                    :value="__('Confirmar Senha')"
                />

                <x-text-input
                    id="password_confirmation"
                    class="mt-1 block w-full"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <x-input-error
                    :messages="$errors->get('password_confirmation')"
                    class="mt-2"
                />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <x-primary-button>
                    {{ __("Redefinir Senha") }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
