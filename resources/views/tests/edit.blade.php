<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-light mb-6">Editar Teste: {{ $test->name }}</h1>
        <form action="{{ route('tests.update', $test) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{ $test->name }}" required placeholder="Nome do Teste">
            </div>
            <div class="mb-4">
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" required placeholder="Descrição">{{ $test->description }}</textarea>
            </div>
            <div class="mb-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="format" value="{{ $test->format }}" required placeholder="Formato">
            </div>
            <div class="mb-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="category[]" value="{{ is_array($test->category) ? implode(',', $test->category) : $test->category }}" required placeholder="Categorias">
            </div>
            <div class="mb-6">
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="questions[]" required placeholder="Perguntas">{{ is_array($test->questions) ? implode(',', array_column($test->questions, 'text')) : $test->questions }}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>