<x-guest-layout>
    <div class="container px-4 py-12">
        <nav class="flex flex-col space-y-4 sm:flex-row items-center justify-center sm:space-x-4 sm:space-y-0">
            @if (Route::has("login"))
                @auth
                    <a href="{{ url("/dashboard") }}" class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
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
