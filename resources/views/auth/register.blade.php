<x-guest-layout>
    <div class="mx-auto w-full max-w-xs md:max-w-md">
        <h1 class="mb-10 text-2xl font-bold">Registrar</h1>

        <form method="POST" action="{{ route("register") }}">
            @csrf

            <!-- Nome -->
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input
                    id="name"
                    class="w-full"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Endereço de Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
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
                    class="w-full"
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
                    class="w-full"
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

            <!-- Tipo de Usuário (Estudante ou Psicólogo) -->
            <div class="mt-4">
                <x-input-label :value="__('Eu sou')" />
                <div class="mt-2 flex items-center">
                    <input
                        id="student"
                        type="radio"
                        class="h-6 w-6 border border-black bg-white p-1"
                        name="user_type"
                        value="student"
                        checked
                        onclick="toggleCrpField(false); toggleInstitutionField(true);"
                    />
                    <label for="student" class="ml-2 text-sm">
                        {{ __("Estudante") }}
                    </label>
                </div>
                <div class="mt-2 flex items-center">
                    <input
                        id="psychologist"
                        type="radio"
                        class="h-6 w-6 border border-black bg-white p-1"
                        name="user_type"
                        value="psychologist"
                        onclick="toggleCrpField(true); toggleInstitutionField(false);"
                    />
                    <label for="psychologist" class="ml-2 text-sm">
                        {{ __("Psicólogo") }}
                    </label>
                </div>
            </div>

            <!-- Campo CRP (Oculto por Padrão) -->
            <div id="crp-field" class="mt-4" style="display: none">
                <x-input-label for="crp" :value="__('Número do CRP')" />
                <x-text-input
                    id="crp"
                    class="w-full"
                    type="text"
                    name="crp"
                    :value="old('crp')"
                    autocomplete="crp"
                />
                <x-input-error :messages="$errors->get('crp')" class="mt-2" />
            </div>

            <!-- Campo Instituição (Oculto por Padrão) -->
            <div id="institution-field" class="mt-4" style="display: block">
                <x-input-label for="institution" :value="__('Instituição')" />
                <x-text-input
                    id="institution"
                    class="w-full"
                    type="text"
                    name="institution"
                    :value="old('institution')"
                    autocomplete="institution"
                />
                <x-input-error
                    :messages="$errors->get('institution')"
                    class="mt-2"
                />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a
                    class="rounded text-sm underline focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                    href="{{ route("login") }}"
                >
                    {{ __("Já registrado?") }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __("Registrar") }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>

<script>
    function toggleCrpField(show) {
        const crpField = document.getElementById('crp-field');
        if (show) {
            crpField.style.display = 'block';
        } else {
            crpField.style.display = 'none';
        }
    }

    function toggleInstitutionField(show) {
        const institutionField = document.getElementById('institution-field');
        if (show) {
            institutionField.style.display = 'block';
        } else {
            institutionField.style.display = 'none';
        }
    }
</script>
