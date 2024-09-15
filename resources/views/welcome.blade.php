<x-guest-layout>
    <div class="container px-4 py-12 dark:text-white">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold mb-4">SISTEP</h1>
            <p class="text-lg mb-8">
                Plataforma de aplicação e correção de instrumentos psicológicos não privativos
            </p>
            <nav class="flex flex-col gap-4 items-center justify-center sm:flex-row sm:space-x-4 sm:space-y-0">
                @if (Route::has("login"))
                    @auth
                        <div class="flex flex-col items-center gap-2 justify-center">
                            <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(auth()->user()->email))) }}?d=identicon" alt="Foto de perfil" class="w-12 h-12 rounded-full">
                            <p>Olá, {{ auth()->user()->name }}</p>
                        </div>
                        <a href="{{ url("/dashboard") }}"
                            class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors dark:bg-darkmode-primary dark:text-darkmode-primary-foreground dark:hover:bg-darkmode-primary/90">
                            Acessar Painel
                        </a>
                    @else
                        <a href="{{ route("login") }}" class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors dark:bg-darkmode-primary dark:text-darkmode-primary-foreground dark:hover:bg-darkmode-primary/90">Entrar</a>
                        @if (Route::has("register"))
                            <a href="{{ route("register") }}" class="button bg-primary text-primary-foreground hover:bg-primary/90 transition-colors dark:bg-darkmode-primary dark:text-darkmode-primary-foreground dark:hover:bg-darkmode-primary/90">
                                Criar conta
                            </a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </div>
</x-guest-layout>