<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8 flex items-center gap-4 justify-between">
            <h1 class="text-3xl font-bold text-foreground">Aplicações de Testes</h1>
       
            <!-- Formulário de busca -->
            <form method="GET" action="{{ route('test-applications.index') }}" class="ml-auto">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar por paciente..."
                    class="border rounded px-4 py-1 pr-10 text-background">
                <button type="submit" class="-ml-6">🔎</button>
            </form>
            <a href="{{ route('test-applications.create') }}"
                class="bg-primary px-4 py-2 text-sm font-medium text-foreground rounded-md hover:bg-primary">Nova
                Aplicação</a>
        </div>

        <div class="bg-foreground/5 rounded-lg shadow-lg overflow-hidden">
            @if ($testApplications->isEmpty() && request('search'))
                <div class="p-4 text-center">
                    <h2 class="text-xl font-semibold text-foreground">Oops! Nenhum resultado encontrado.</h2>
                    <p class="text-foreground/30">Parece que não há aplicações que correspondam à sua busca.</p>
                </div>
            @elseif ($testApplications->isEmpty())
                <div class="p-4 text-center">
                    <h2 class="text-xl font-semibold text-foreground">Oops! Nada cadastrado.</h2>
                    <p class="text-foreground/30">Parece que você ainda não aplicou nenhum teste. Que tal criar aplicar um agora?</p>
                </div>
            @else
                <div class="block md:hidden">
                    @foreach ($testApplications as $application)
                        <div class="border-b border-foreground/10 bg-foreground/5 p-4">
                            <div class="flex items-center justify-between mb-2">
                                <h2 class="text-xl font-semibold text-foreground">
                                    {{ $application->patient_id ? $application->patient->name : 'Anônimo' }}
                                </h2>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs font-semibold leading-5 text-white {{ $application->status == 'Pendente' ? 'bg-yellow-500' : 'bg-green-500' }}">
                                    {{ $application->status }}
                                </span>
                            </div>
                            <p class="text-foreground/30">Teste: {{ $application->test->name }}</p>
                            <p class="text-foreground/30">Data: {{ $application->application_date }}</p>
                            <a href="{{ route('test-applications.show', $application) }}"
                                class="bg-primary px-4 py-2 text-sm font-medium text-white rounded-md hover:bg-primary">Ver
                                Detalhes</a>
                        </div>
                    @endforeach
                </div>
                <div class="hidden md:block">
                    <table class="min-w-full divide-y divide-foreground/10">
                        <thead class="bg-foreground/5">
                            <tr>
                                <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Paciente</th>
                                <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Teste</th>
                                <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Data</th>
                                <th class="px-6 py-2 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">Status</th>
                                <th class="px-6 py-2 text-right text-xs font-medium uppercase tracking-wider text-foreground/30">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-foreground/10 bg-foreground/5">
                            @foreach ($testApplications as $application)
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-3 text-foreground">
                                        <span class="text-muted mr-4">#{{ $application->patient ? $application->patient->id : '0' }}</span>
                                        {{ $application->patient->name ?? '- anônimo -' }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-3 text-foreground">{{ $application->test->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-3 text-foreground">
                                        {{ \Carbon\Carbon::parse($application->application_date)->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-3">
                                        <div class="flex items-center gap-2 text-xs">
                                            <span class="inline-flex items-center rounded-full h-2 w-2 uppercase text-xs font-semibold leading-5 text-white {{ $application->status == 'Concluído' ? 'bg-green-500' : 'bg-yellow-500' }}"></span>
                                            {{ $application->status ?? 'Pendente' }}
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-3 text-right">
                                        @if ($application->status == 'Concluído')
                                            <a href="{{ route('test-applications.show', $application) }}"
                                                class="uppercase text-xs hover:text-primary hover:border-primary border rounded-sm py-1 px-4 gap-2 items-center justify-center inline-flex flex-row">Ver
                                                <span>→</span></a>
                                        @else
                                            <a disabled
                                                class="disabled uppercase text-xs opacity-30 text-muted border rounded-sm py-1 px-4 gap-2 items-center justify-center inline-flex flex-row">Ver
                                                <span>→</span></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
        
        <!-- Paginação -->
        <div class="mt-4">
            {{ $testApplications->links() }}
        </div>
    </div>
</x-app-layout>