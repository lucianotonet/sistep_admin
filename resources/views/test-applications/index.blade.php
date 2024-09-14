<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="mb-8 flex items-center justify-between">
            <h1 class="text-3xl font-bold text-gray-200">Aplicações de Testes</h1>
            <a href="{{ route('test-applications.create') }}"
                class="bg-primary px-4 py-2 text-sm font-medium text-white rounded-md hover:bg-primary">Nova
                Aplicação</a>
        </div>
        <div class="bg-foreground/5 rounded-lg shadow-lg overflow-hidden">
            <div class="block md:hidden">
                @foreach ($testApplications as $application)
                    <div class="border-b border-foreground/20 bg-foreground/10 p-4">
                        <div class="flex items-center justify-between mb-2">
                            <h2 class="text-xl font-semibold text-gray-200">
                                {{ $application->patient_id ? $application->patient->name : 'Anônimo' }}</h2>
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
                <table class="min-w-full divide-y divide-foreground/20">
                    <thead class="bg-foreground/5">
                        <tr>                            
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground/30"
                                title="Nome do paciente">
                                Paciente</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">
                                Teste</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">
                                Data</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground/30">
                                Status</th>
                            <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-foreground/30">
                                Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-foreground/20 bg-foreground/10">
                        @foreach ($testApplications as $application)
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-gray-200">
                                    <span class="text-muted mr-4">#{{ $application->patient->id }}</span>
                                    @if ($application->patient->name)
                                        {{ $application->patient->name }}
                                    @else
                                        <span class="text-muted">- anônimo -</span>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-gray-200">{{ $application->test->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-gray-200">{{ \Carbon\Carbon::parse($application->application_date)->format('d/m/Y H:i') }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex items-center gap-2 text-xs">
                                        <span
                                            class="inline-flex items-center rounded-full h-2 w-2 uppercase text-xs font-semibold leading-5 text-white {{ $application->status == 'Pendente' ? 'bg-yellow-500' : 'bg-green-500' }}">
                                        </span>
                                        {{ $application->status }}
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-right">
                                    @if ($application->status == 'Concluído')
                                        <a href="{{ route('test-applications.show', $application) }}"
                                            class="font-bold uppercase text-sm text-primary">Ver</a>
                                    @else
                                        <a disabled class="disabled font-bold uppercase text-sm text-muted">Ver</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>