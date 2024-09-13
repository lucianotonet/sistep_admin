<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="mb-6 text-3xl font-light">Criar Novo Teste</h1>
        <form
            method="POST"
            action="{{ route("tests.store") }}"
            class="mb-4 rounded bg-white px-8 pb-8 pt-6 shadow-md"
        >
            @csrf
            <div class="mb-4">
                <input
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    type="text"
                    name="name"
                    placeholder="Nome"
                    required
                />
            </div>
            <div class="mb-4">
                <textarea
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    name="description"
                    placeholder="Descrição"
                    required
                ></textarea>
            </div>
            <div class="mb-4">
                <input
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    type="text"
                    name="format"
                    placeholder="Formato"
                    required
                />
            </div>
            <div class="mb-4">
                <input
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    type="text"
                    name="category[]"
                    placeholder="Categoria"
                    required
                />
            </div>
            <div class="mb-6">
                <textarea
                    class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    name="questions[]"
                    placeholder="Perguntas"
                    required
                ></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="focus:shadow-outline rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 focus:outline-none"
                    type="submit"
                >
                    Salvar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
