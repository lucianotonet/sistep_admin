<x-app-layout>
    <div class="container max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold">Criar Novo Paciente</h1>
        
        @if (session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('patients.store') }}" class="mt-4">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="name" value="{{ old('name') }}" class="text-background border rounded px-4 py-2 w-full @error('name') border-red-500 @enderror" placeholder="Nome (opcional)">
                @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="text-background border rounded px-4 py-2 w-full @error('email') border-red-500 @enderror" placeholder="Email (opcional)">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="text-background border rounded px-4 py-2 w-full @error('phone') border-red-500 @enderror" placeholder="Telefone (opcional)">
                @error('phone')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_anonymous" value="1" class="form-checkbox" {{ old('is_anonymous') ? 'checked' : '' }}>
                    <span class="ml-2 text-sm text-gray-700">Paciente Anônimo</span>
                </label>
            </div>
            <button type="submit" class="bg-primary text-white px-6 py-1 uppercase rounded">Salvar</button>
        </form>
        
        <form id="delete-form" action="{{ route('patients.destroy', $patient->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir este paciente?');">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
</x-app-layout>