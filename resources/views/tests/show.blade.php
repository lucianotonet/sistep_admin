<x-app-layout>
    <h1>Teste: {{ $test->name }}</h1>
    <p>
        <strong>Descrição:</strong>
        {{ $test->description }}
    </p>
    <p>
        <strong>Formato:</strong>
        {{ $test->format }}
    </p>
    <p>
        <strong>Categorias:</strong>
        {{ implode(", ", json_decode($test->category)) }}
    </p>

    <h2>Perguntas</h2>
    <ul>
        @foreach (json_decode($test->questions) as $question)
            <li>{{ $question->text }}</li>
        @endforeach
    </ul>

    <a href="{{ route("tests.edit", $test) }}">Editar Teste</a>
    <form
        action="{{ route("tests.destroy", $test) }}"
        method="POST"
        style="display: inline"
    >
        @csrf
        @method("DELETE")
        <button type="submit">Excluir Teste</button>
    </form>
</x-app-layout>
