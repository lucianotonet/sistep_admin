<x-app-layout>
    <div class="py-4 mb-auto">
        <div class="mx-auto max-w-5xl space-y-6 sm:px-6 lg:px-8">
            <div class="py-8 px-4 flex items-center justify-between">
                <h2 class="text-3xl font-bold leading-tight">{{ __("Aplicar teste") }}</h2>                
            </div>
            <div
                class="bg-black/5 p-4 shadow dark:bg-white/5 sm:rounded-md sm:p-8"
            >
                <form
                    method="POST"
                    action="{{ route("test-applications.store") }}"
                >
                    @csrf
                    @method("POST")
                    <div class="w-full space-y-12">
                        <div
                            class="grid grid-cols-1 gap-x-10 gap-y-10 border-b border-gray-900/10 pb-8 md:grid-cols-3"
                        >
                            <div class="">
                                <h2
                                    class="text-2xl font-semibold leading-7 "
                                >
                                    Tipo de teste
                                </h2>
                                <p class="mt-1 text-sm leading-tight">
                                    Selecione o teste a ser aplicado.
                                </p>
                            </div>

                            <div
                                class="grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6 md:col-span-2"
                            >
                                <div class="sm:col-span-3">
                                    <label
                                        for="test"
                                        class="hidden text-sm font-medium leading-6 "
                                    >
                                        Tipo
                                    </label>
                                    <div class="mt-2">
                                        <select
                                            id="test_id"
                                            name="test_id"
                                            class="block w-full rounded border-0 py-1.5 dark:text-background shadow-inner ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:max-w-xs sm:text-sm sm:leading-6"
                                        >
                                            <option disabled selected>
                                                Selecione um teste
                                            </option>
                                            @foreach ($tests as $test)
                                                <option
                                                    value="{{ $test->id }}"
                                                    {{ old("test_id") == $test->id ? "selected" : "" }}
                                                >
                                                    {{ $test->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error("test_id")
                                            <span class="text-sm text-red-500">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="grid grid-cols-1 gap-x-10 gap-y-10 border-b border-gray-900/10 pb-8 md:grid-cols-3"
                        >
                            <div class="">
                                <h2
                                    class="text-2xl font-semibold leading-7 "
                                >
                                    Paciente
                                </h2>
                                <p class="mt-1 text-sm leading-tight">
                                    Selecione um paciente da lista para aplicar
                                    o teste, ou cadastre um novo. Você também
                                    pode optar por aplicar o teste de forma
                                    anônima.
                                </p>
                            </div>

                            <div
                                class="grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6 md:col-span-2"
                            >
                                <div class="sm:col-span-3">
                                    <label
                                        for="patient"
                                        class="hidden text-sm font-medium leading-6 "
                                    >
                                        Paciente
                                    </label>
                                    <div
                                        id="patient-select"
                                        class="mt-2 flex flex-col items-center gap-4"
                                        style="
                                            display: {{ old("is_anonymous") ? "none" : "block" }};
                                        "
                                    >
                                        <select
                                            id="patient_id"
                                            name="patient_id"
                                            class="block w-full rounded border-0 py-1.5 dark:text-background shadow-inner ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-primary sm:max-w-xs sm:text-sm sm:leading-6"
                                        >
                                            <option disabled selected>
                                                Selecione um paciente
                                            </option>
                                            @foreach ($patients as $patient)
                                                <option
                                                    value="{{ $patient->id }}"
                                                    {{ old("patient_id") == $patient->id ? "selected" : "" }}
                                                >
                                                    {{ $patient->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error("patient_id")
                                            <span class="text-sm text-red-500">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div id="patient-create" class="sm:col-span-3">
                                    <!-- <label for="patient" class="block text-sm font-medium leading-6 ">&nbsp;</label> -->
                                    <div class="mt-2 flex items-center gap-4">
                                        <button
                                            type="button"
                                            class="inline-flex items-center rounded bg-black px-6 py-2 text-xs font-semibold uppercase text-white hover:bg-black"
                                        >
                                            Novo
                                        </button>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <div class="flex items-center gap-4">
                                        <input
                                            type="checkbox"
                                            name="is_anonymous"
                                            id="is_anonymous"
                                            class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary"
                                            onchange="togglePatientSelection()"
                                            {{ old("is_anonymous") ? "checked" : "" }}
                                        />
                                        <label
                                            for="is_anonymous"
                                            class="block text-sm font-medium leading-6 "
                                        >
                                            Anônimo
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-x-8">
                            <button
                                type="button"
                                class="text-xs font-semibold uppercase leading-6 "
                            >
                                Cancela
                            </button>
                            <button
                                type="submit"
                                class="rounded bg-primary px-6 py-1.5 text-xs font-semibold uppercase shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                            >
                                Salvar e enviar
                            </button>
                        </div>
                    </div>
                    <script>
                        function togglePatientSelection() {
                            const isAnonymous =
                                document.getElementById('is_anonymous').checked;
                            document.getElementById(
                                'patient-select',
                            ).parentElement.style.display = isAnonymous
                                ? 'none'
                                : 'block';
                            document.getElementById(
                                'patient-create',
                            ).style.display = isAnonymous ? 'none' : 'block';
                            document.getElementById(
                                'registration-form',
                            ).style.display = 'none';
                        }

                        // Chama a função para ajustar a visibilidade ao carregar a página
                        togglePatientSelection();
                    </script>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
