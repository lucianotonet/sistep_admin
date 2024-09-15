<x-app-layout>
    <div class="py-4 mb-auto">
        <div class="mx-auto max-w-5xl space-y-6 sm:px-6 lg:px-8">
            <div class="py-8 px-4 flex items-center justify-between">
                <h2 class="text-3xl font-bold leading-tight">{{ __("Aplicar teste") }}</h2>                
            </div>
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
                <div class="mt-4 flex flex-col justify-center items-center">
                    <div class="rounded-md bg-gray-100 p-4 shadow-md scale-50 -my-12">
                        {!! $testApplication->qr_code !!}
                    </div>
                    <small>
                        <a href="{{ route('test-applications.qrcode', $testApplication) }}" target="_blank">Abrir em nova janela ↗</a>
                    </small>
                </div>

                <div class="flex items-center justify-center gap-x-8 mt-8 border-t pt-8">
                    <a href="{{ route('test-applications.index') }}"
                        class="text-xs font-semibold uppercase leading-6 ">
                        ← Voltar para a lista
                    </a>
                    <a
                        href="#"
                        class="text-xs font-semibold uppercase leading-6 ">
                        Ver testes do paciente
                    </a>
                    <a href="{{ route('test-applications.show', $testApplication) }}"
                        class="rounded bg-primary px-6 py-1.5 text-xs font-semibold uppercase shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        Acessar teste →
                    </a>
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