<x-guest-layout>
    <div class="container px-4 py-12">
        <h1 class="mb-8 text-4xl font-bold">Bem-vindo ao SISTEP</h1>

        <p class="mb-12 text-xl">
            Este é o painel administrativo do SISTEP.
            <br />
            Se você está fazendo parte da pesquisa, aqui você pode acessar os
            testes e correções com suas credenciais de psicólogo ou estudante,
            ou criar seu cadastro rapidamente.
        </p>

        <nav
            class="flex flex-col space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0"
        >
            @if (Route::has("login"))
                @auth
                    <a href="{{ url("/dashboard") }}" class="button">
                        Acessar Painel
                    </a>
                @else
                    <a href="{{ route("login") }}" class="button">Entrar</a>
                    @if (Route::has("register"))
                        <a href="{{ route("register") }}" class="button">
                            Registrar
                        </a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>
</x-guest-layout>
