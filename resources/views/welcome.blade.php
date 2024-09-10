<x-guest-layout>
    <div class="container px-4 py-12">


        <h1 class="text-4xl font-bold mb-8">Bem-vindo ao SISTEP</h1>

        <p class="text-xl   mb-12">Este é o painel administrativo do SISTEP.<br />Se você está fazendo parte da
            pesquisa, aqui você pode acessar os testes e correções com suas credenciais de psicólogo ou estudante, ou
            criar seu cadastro rapidamente.</p>

        <nav class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="button">Acessar Painel</a>
                @else
                    <a href="{{ route('login') }}" class="button">Entrar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button">Registrar</a>
                    @endif
                @endauth
            @endif
        </nav>

    </div>
</x-guest-layout>