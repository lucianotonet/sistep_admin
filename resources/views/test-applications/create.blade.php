<x-app-layout>
    <x-slot name="header">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 ">
            <h2 class="px-4 sm:px-8 font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Aplicar teste') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-md">

                <form method="POST" action="{{ route('test-applications.store') }}">
                    @csrf
                    @method('POST')
                    <div class="space-y-12 w-full">
                        <div class="grid grid-cols-1 gap-x-10 gap-y-10 border-b border-gray-900/10 pb-8 md:grid-cols-3">
                            <div class="">
                                <h2 class="text-xl font-semibold leading-7 text-gray-900">Tipo de teste</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Selecione o teste a ser aplicado.</p>
                            </div>

                            <div class="grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6 md:col-span-2">
                                <div class="sm:col-span-3">
                                    <label for="test"
                                        class="hidden text-sm font-medium leading-6 text-gray-900">Tipo</label>
                                    <div class="mt-2">
                                        <select id="test_id" name="test_id"
                                            class="block w-full rounded border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option disabled selected>Selecione um teste</option>
                                            @foreach($tests as $test)
                                                <option value="{{ $test->id }}" {{ old('test_id') == $test->id ? 'selected' : '' }}>{{ $test->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('test_id')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-x-10 gap-y-10 border-b border-gray-900/10 pb-8 md:grid-cols-3">
                            <div class="">
                                <h2 class="text-xl font-semibold leading-7 text-gray-900">Paciente</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Selecione um paciente da lista para
                                    aplicar o teste, ou cadastre um novo. Você também pode optar por aplicar o teste de
                                    forma anônima.</p>
                            </div>

                            <div class="grid max-w-2xl grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6 md:col-span-2">

                                <div class="sm:col-span-3">
                                    <label for="patient"
                                        class="hidden text-sm font-medium leading-6 text-gray-900">Paciente</label>
                                    <div id="patient-select" class="mt-2 flex items-center flex-col gap-4"
                                        style="display: {{ old('is_anonymous') ? 'none' : 'block' }};">
                                        <select id="patient_id" name="patient_id"
                                            class="block w-full rounded border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option disabled selected>Selecione um paciente</option>
                                            @foreach($patients as $patient)
                                                <option value="{{ $patient->id }}" {{ old('patient_id') == $patient->id ? 'selected' : '' }}>{{ $patient->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('patient_id')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div id="patient-create" class="sm:col-span-3">
                                    <!-- <label for="patient" class="block text-sm font-medium leading-6 text-gray-900">&nbsp;</label> -->
                                    <div class="mt-2 flex items-center gap-4">
                                        <button type="button"
                                            class="inline-flex items-center px-6 py-2 text-xs font-semibold uppercase bg-black text-white rounded hover:bg-black">Novo</button>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <div class="flex items-center gap-4">
                                        <input type="checkbox" name="is_anonymous" id="is_anonymous"
                                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600"
                                            onchange="togglePatientSelection()" {{ old('is_anonymous') ? 'checked' : '' }}>
                                        <label for="is_anonymous"
                                            class="block text-sm font-medium leading-6 text-gray-900">Anônimo</label>
                                    </div>
                                </div>

                            </div>
                            <script>
                                function togglePatientSelection() {
                                    const isAnonymous = document.getElementById('is_anonymous').checked;
                                    document.getElementById('patient-select').parentElement.style.display = isAnonymous ? 'none' : 'block';
                                    document.getElementById('patient-create').style.display = isAnonymous ? 'none' : 'block';
                                    document.getElementById('registration-form').style.display = 'none';
                                }

                                // Chama a função para ajustar a visibilidade ao carregar a página
                                togglePatientSelection();
                            </script>

                        </div>


                        <div class="flex items-center justify-end gap-x-8">
                            <button type="button"
                                class="text-xs font-semibold uppercase leading-6 text-gray-900">Cancela</button>
                            <button type="submit"
                                class="rounded bg-blue-600 px-6 py-1.5 text-xs font-semibold uppercase   shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Salvar
                                e enviar</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>