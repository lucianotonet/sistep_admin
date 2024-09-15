<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8 flex items-center gap-4 justify-between">
            <h1 class="text-3xl font-bold text-foreground">Lista de Pacientes</h1>
            <form method="GET" action="{{ route('patients.index') }}" class="ml-auto">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar por paciente..."
                    class="border rounded px-4 py-1 pr-10 text-background">
                <button type="submit" class="-ml-6">🔎</button>
            </form>
            <a href="{{ route('patients.create') }}"
                class="bg-primary px-4 py-2 text-sm font-medium text-foreground rounded-md hover:bg-primary">Novo Paciente</a>
        </div>

        <div class="bg-foreground/5 rounded-lg shadow-lg overflow-hidden">
            @if ($patients->isEmpty())
                <div class="p-4 text-center">
                    <h2 class="text-xl font-semibold text-foreground">Oops! Nenhum paciente encontrado.</h2>
                </div>
            @else
                <table class="min-w-full divide-y divide-foreground/10">
                    <thead class="bg-foreground/5">
                        <tr>
                            <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Nome</th>
                            <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Email</th>
                            <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Telefone</th>
                            <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Anônimo</th>
                            <th class="px-6 py-2 text-right text-xs font-medium uppercase tracking-wider text-foreground/30">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-foreground/10 bg-foreground/5">
                        @foreach ($patients as $patient)
                            <tr>
                                <td class="whitespace-nowrap px-6 py-3 text-foreground">{{ $patient->name ?? '- anônimo -' }}</td>
                                <td class="whitespace-nowrap px-6 py-3 text-foreground">{{ $patient->email }}</td>
                                <td class="whitespace-nowrap px-6 py-3 text-foreground">{{ $patient->phone }}</td>
                                <td class="whitespace-nowrap px-6 py-3 text-foreground">{{ $patient->is_anonymous ? 'Sim' : 'Não' }}</td>
                                <td class="whitespace-nowrap px-6 py-3 text-right space-x-2 text-xs uppercase">
                                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este paciente?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 uppercase hover:text-primary border border-red-600 hover:border-primary px-2 py-1 rounded">Excluir</button>
                                    </form>
                                    <a href="{{ route('patients.edit', $patient->id) }}" class="text-foreground/30 uppercase hover:text-primary border border-foreground/30 hover:border-primary px-2 py-1 rounded">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- Paginação -->
        <div class="mt-4">
            {{ $patients->links() }}
        </div>
    </div>
</x-app-layout>