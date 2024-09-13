<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="mb-6 text-3xl font-light">
            Editar Teste: {{ $test->name }}
        </h1>
        <form
            action="{{ route("tests.update", $test) }}"
            method="POST"
            class="mb-4 rounded bg-white px-8 pb-8 pt-6 shadow-md"
        >
            @csrf
            @method("PUT")
            <div class="mb-4">
                <input
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    type="text"
                    name="name"
                    value="{{ $test->name }}"
                    required
                    placeholder="Nome do Teste"
                />
            </div>
            <div class="mb-4">
                <textarea
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    name="description"
                    required
                    placeholder="Descrição"
                >
{{ $test->description }}</textarea
                >
            </div>
            <div class="mb-4">
                <input
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    type="text"
                    name="format"
                    value="{{ $test->format }}"
                    required
                    placeholder="Formato"
                />
            </div>
            <div class="mb-4">
                <input
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    type="text"
                    name="category[]"
                    value="{{ is_array($test->category) ? implode(",", $test->category) : $test->category }}"
                    required
                    placeholder="Categorias"
                />
            </div>
            <div class="mb-6">
                <textarea
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    name="questions[]"
                    required
                    placeholder="Perguntas"
                >
{{ is_array($test->questions) ? implode(",", array_column($test->questions, "text")) : $test->questions }}</textarea
                >
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="focus:shadow-outline rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 focus:outline-none"
                    type="submit"
                >
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
