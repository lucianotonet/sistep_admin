<x-app-layout>
    <div class="mx-auto w-full mt-4 max-w-4xl flex flex-col items-start gap-10">
        <div class="flex flex-col items-start gap-2 px-4">
            <p class="text-4xl font-bold">
                Olá, {{ auth()->user()->name }}!
            </p>
            <p class="text-xl">
                Bem-vindo ao seu painel de controle.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full px-4 md:px-0">
            <div class="bg-foreground/5 p-4 rounded shadow">
                <h3 class="text-lg font-semibold">Você tem 5 testes para correção</h3>
            </div>
            <div class="bg-foreground/5 p-4 rounded shadow">
                <h3 class="text-lg font-semibold">Você tem 3 aplicações pendentes</h3>
            </div>
            <div class="bg-foreground/5 p-4 rounded shadow">
                <h3 class="text-lg font-semibold">Você tem 2 mensagens não lidas</h3>
            </div>
        </div>
    </div>
</x-app-layout>