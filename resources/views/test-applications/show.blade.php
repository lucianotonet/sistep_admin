<x-app-layout>
    <div class="container mx-auto flex flex-col px-4 py-8 mb-auto">
        <div class="flex flex-col w-full mb-6 py-10">
            <h1 class="text-3xl font-bold text-foreground">Teste #{{ $testApplication->id }} ({{ $testApplication->test->name }})</h1>
        </div>

        <div class="flex flex-wrap mb-6 gap-6">
            <div class="bg-foreground/5 shadow-md flex flex-col rounded-lg p-6 w-full md:w-1/2">
                <h2 class="text-2xl font-semibold mb-4 text-foreground">Dados do Paciente</h2>
                <p><strong>Nome:</strong> {{ $testApplication->patient->name ?? 'Anônimo' }}</p>
                <p><strong>Email:</strong> {{ $testApplication->patient->email ?? 'Não disponível' }}</p>
                <p><strong>Telefone:</strong> {{ $testApplication->patient->phone ?? 'Não disponível' }}</p>
            </div>

            <div class="bg-foreground/5 shadow-md flex flex-col rounded-lg p-6 w-full md:w-1/2">
                <h2 class="text-2xl font-semibold mb-4 text-foreground">Resultados do Teste</h2>
                <p><strong>Status:</strong> {{ $testApplication->status }}</p>
                @if($testApplication->result)
                    <p><strong>Resultado:</strong> {{ json_encode($testApplication->result) }}</p>
                @else
                    <p><strong>Resultado:</strong> Teste ainda não concluído.</p>
                @endif
            </div>
        </div>

        <div class="bg-foreground/5 shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4 text-foreground">Histórico de Testes</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground">Data</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground">Teste</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-foreground">Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patient->testApplications as $application)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-foreground">{{ \Carbon\Carbon::parse($application->application_date)->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-foreground">{{ $application->test->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-foreground">{{ json_encode($application->result) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('test-applications.index') }}" class="bg-primary text-white px-4 py-2 rounded-md">Voltar para a lista</a>
        </div>
    </div>
</x-app-layout>