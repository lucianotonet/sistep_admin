<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-foreground">
            {{ __("Enviar teste") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <div
                class="border border-gray-200 bg-white p-6 shadow-lg dark:border-gray-700 dark:bg-foreground/5 sm:rounded-md sm:p-10 items-center justify-center">
                <h3 class="mb-2 text-center text-2xl font-bold text-foreground">
                    Compartilhe o teste com o paciente
                </h3>
                <p class="mb-4 text-center text-gray-700 dark:text-gray-300">
                    Envie o link abaixo para que o paciente possa acessar o
                    teste:
                </p>
                <span id="shareable-link" 
                    class="mb-4 flex items-center justify-center font-mono">
                    <div class="border border-foreground/20 py-2 px-4 gap-4 rounded-sm flex justify-center items-center text-center w-auto mx-auto cursor-pointer" onclick="shareLink()">

                        {{ route("test-applications.show", $testApplication) }}
                        <button 
                        class="text-xl font-bold">🔗</button>
                    </div>
                </span>
                <p class="mt-6 text-center text-gray-700 dark:text-gray-300">
                    Ou peça ao paciente para escanear o código QR abaixo para
                    acessar o teste diretamente em seu dispositivo:
                </p>
                <div class="mt-4 flex flex-col gap-4 justify-center items-center">
                    <div class="rounded-md bg-gray-100 p-4 shadow-md">
                        {!! $testApplication->qr_code !!}
                    </div>
                    <small>
                        <a href="{{ route('test-applications.qrcode', $testApplication) }}" target="_blank">Abrir em nova janela ↗</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script>
        function shareLink() {
            if (navigator.share) {
                navigator.share({
                    title: 'Teste',
                    text: 'Acesse o teste aqui:',
                    url: '{{ route("test-applications.show", $testApplication) }}'
                })
                    .then(() => console.log('Compartilhado com sucesso!'))
                    .catch((error) => console.log('Erro ao compartilhar:', error));
            } else {
                alert('A API de compartilhamento não é suportada neste navegador.');
            }
        }
    </script>
</x-app-layout>