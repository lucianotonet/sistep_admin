<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="mb-6 text-3xl font-light">Lista de Testes</h1>
        <a
            href="{{ route("tests.create") }}"
            class="mb-6 inline-block rounded bg-blue-500 px-4 py-2 text-white transition duration-300 hover:bg-blue-600"
        >
            Criar Novo Teste
        </a>
        <div class="overflow-hidden rounded-lg bg-white shadow-md">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Nome
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                        >
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($tests as $test)
                        <tr>
                            <td class="whitespace-nowrap px-6 py-4">
                                {{ $test->name }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <a
                                    href="{{ route("tests.edit", $test) }}"
                                    class="mr-3 text-indigo-600 hover:text-indigo-900"
                                >
                                    Editar
                                </a>
                                <form
                                    action="{{ route("tests.destroy", $test) }}"
                                    method="POST"
                                    class="inline-block"
                                >
                                    @csrf
                                    @method("DELETE")
                                    <button
                                        type="submit"
                                        class="text-red-600 hover:text-red-900"
                                    >
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

@if (session("success"))
    <div
        class="relative rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
        role="alert"
    >
        <strong class="font-bold">{{ session("success") }}</strong>
    </div>
@endif
