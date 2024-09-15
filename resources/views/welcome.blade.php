<x-guest-layout>
    <div class="container px-4 py-12">
        <nav class="flex flex-col gap-10 items-center justify-center sm:space-x-4 sm:space-y-0">
            @if (Route::has("login"))
                @auth
                    <div class="flex flex-col items-center gap-2 justify-center">

                        <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(auth()->user()->email))) }}?d=identicon" alt="Foto de perfil" class="w-12 h-12 rounded-full">
                        <p>
                            Olá, {{ auth()->user()->name }}
                        </p>
                    </div>
                    <a href="{{ url("/dashboard") }}"
                        class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                        Acessar Painel
                    </a>
                @else
                    <div class="flex flex-row items-center gap-4 justify-center">

                        <a href="{{ route("login") }}" class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">Entrar</a>
                        @if (Route::has("register"))
                            <a href="{{ route("register") }}" class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors">
                                Criar conta
                            </a>
                        @endif
                    </div>
                @endauth
            @endif
        </nav>
    </div>
</x-guest-layout>