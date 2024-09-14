<x-guest-layout>
    <div class="mx-auto w-full max-w-xs md:max-w-md">
        <h1 class="mb-10 text-2xl font-bold">Entrar</h1>

        <!-- Status da Sessão -->
        <x-auth-session-status class="mb-2" :status="session('status')" />

        <form method="POST" action="{{ route("login") }}">
            @csrf

            <!-- Endereço de Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />
                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-1"
                />
            </div>

            <!-- Senha -->
            <div class="mt-2">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input
                    id="password"
                    class="w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-1"
                />
            </div>

            <!-- Lembrar-me -->
            <!-- <div class="mt-2 block">
                <label for="remember_me" class="inline-flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-primary-600 shadow-sm focus:ring-primary-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-primary-600 dark:focus:ring-offset-gray-800"
                        name="remember"
                    />
                    <span class="ms-2 text-sm">{{ __("Lembrar-me") }}</span>
                </label>
            </div> -->

            <div class="mt-6 flex items-center justify-between">
                @if (Route::has("password.request"))
                    <a
                        class="rounded text-sm underline focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                        href="{{ route("password.request") }}"
                    >
                        {{ __("Esqueceu sua senha?") }}
                    </a>
                @endif

                <x-primary-button class="ms-3 h-8">
                    {{ __("Entrar") }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
