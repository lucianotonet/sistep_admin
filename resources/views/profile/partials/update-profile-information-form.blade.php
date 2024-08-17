<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        @if ($user->hasVerifiedEmail())

            <!-- User Type (Student or Psychologist) -->
            <div class="mt-4">
                <x-input-label :value="__('I am')" />
                <div class="flex items-center mt-2">
                    <input id="student" type="radio" name="user_type" value="student" {{ old('user_type', auth()->user()->user_type) === 'student' ? 'checked' : '' }}
                        onclick="toggleCrpField(false); toggleInstitutionField(true);">
                    <label for="student" class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Student') }}</label>
                </div>
                <div class="flex items-center mt-2">
                    <input id="psychologist" type="radio" name="user_type" value="psychologist" {{ old('user_type', auth()->user()->user_type) === 'psychologist' ? 'checked' : '' }}
                        onclick="toggleCrpField(true); toggleInstitutionField(false);">
                    <label for="psychologist"
                        class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Psychologist') }}</label>
                </div>
            </div>

            <!-- CRP Field (Hidden by Default) -->
            <div id="crp-field" class="mt-4" style="display: {{ old('user_type', auth()->user()->user_type) === 'psychologist' ? 'block' : 'none' }};">
                <x-input-label for="crp" :value="__('CRP Number')" />
                <x-text-input id="crp" name="crp" type="text" class="mt-1 block w-full" :value="old('crp', auth()->user()->crp)" autocomplete="crp" />
                <x-input-error class="mt-2" :messages="$errors->get('crp')" />
            </div>

            <!-- Institution Field (Hidden by Default) -->
            <div id="institution-field" class="mt-4" style="display: {{ old('user_type', auth()->user()->user_type) === 'student' ? 'block' : 'none' }};">
                <x-input-label for="institution" :value="__('Institution')" />
                <x-text-input id="institution" name="institution" type="text" class="mt-1 block w-full" :value="old('institution', auth()->user()->institution)" autocomplete="institution" />
                <x-input-error class="mt-2" :messages="$errors->get('institution')" />
            </div>
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    </form>
</section></section>

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
