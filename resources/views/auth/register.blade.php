<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- User Type (Student or Psychologist) -->
        <div class="mt-4">
            <x-input-label :value="__('I am')" />
            <div class="flex items-center mt-2">
                <input id="student" type="radio" name="user_type" value="student" checked
                    onclick="toggleCrpField(false); toggleInstitutionField(true);">
                <label for="student" class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Student') }}</label>
            </div>
            <div class="flex items-center mt-2">
                <input id="psychologist" type="radio" name="user_type" value="psychologist"
                    onclick="toggleCrpField(true); toggleInstitutionField(false);">
                <label for="psychologist"
                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Psychologist') }}</label>
            </div>
        </div>

        <!-- CRP Field (Hidden by Default) -->
        <div id="crp-field" class="mt-4" style="display: none;">
            <x-input-label for="crp" :value="__('CRP Number')" />
            <x-text-input id="crp" class="block mt-1 w-full" type="text" name="crp" :value="old('crp')"
                autocomplete="crp" />
            <x-input-error :messages="$errors->get('crp')" class="mt-2" />
        </div>

        <!-- Institution Field (Hidden by Default) -->
        <div id="institution-field" class="mt-4" style="display: block;">
            <x-input-label for="institution" :value="__('Institution')" />
            <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution"
                :value="old('institution')" autocomplete="institution" />
            <x-input-error :messages="$errors->get('institution')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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