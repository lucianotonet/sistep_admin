<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full h-6" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Endereço de Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full h-6" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />
            <x-text-input id="password" class="block mt-1 w-full h-6" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Senha -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full h-6" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Tipo de Usuário (Estudante ou Psicólogo) -->
        <div class="mt-4">
            <x-input-label :value="__('Eu sou')" />
            <div class="flex items-center mt-2">
                <input id="student" type="radio" name="user_type" value="student" checked
                    onclick="toggleCrpField(false); toggleInstitutionField(true);">
                <label for="student" class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Estudante') }}</label>
            </div>
            <div class="flex items-center mt-2">
                <input id="psychologist" type="radio" name="user_type" value="psychologist"
                    onclick="toggleCrpField(true); toggleInstitutionField(false);">
                <label for="psychologist"
                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Psicólogo') }}</label>
            </div>
        </div>

        <!-- Campo CRP (Oculto por Padrão) -->
        <div id="crp-field" class="mt-4" style="display: none;">
            <x-input-label for="crp" :value="__('Número do CRP')" />
            <x-text-input id="crp" class="block mt-1 w-full h-6" type="text" name="crp" :value="old('crp')"
                autocomplete="crp" />
            <x-input-error :messages="$errors->get('crp')" class="mt-2" />
        </div>

        <!-- Campo Instituição (Oculto por Padrão) -->
        <div id="institution-field" class="mt-4" style="display: block;">
            <x-input-label for="institution" :value="__('Instituição')" />
            <x-text-input id="institution" class="block mt-1 w-full h-6" type="text" name="institution"
                :value="old('institution')" autocomplete="institution" />
            <x-input-error :messages="$errors->get('institution')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Já registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
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