<x-guest-layout>
    <div class="">        
        <nav class="flex space-x-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-black dark:text-white">Painel</a>
                @else
                    <a href="{{ route('login') }}" class="text-black dark:text-white">Entrar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-black dark:text-white">Registrar</a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>
</x-guest-layout>
