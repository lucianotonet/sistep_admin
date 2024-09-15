<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/css/themes/orange.css", "resources/css/custom.css", "resources/js/app.js"])
    </head>
    <body class="font-sans antialiased">
        @if (Auth::check() && !Auth::user()->tcle_accepted)
            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 max-w-2xl w-full">
                    <h2 class="text-2xl font-bold mb-8 uppercase">Termo de Consentimento Livre e Esclarecido (TCLE)</h2>
                    <div class="overflow-y-auto max-h-96 shadow-inner">
                        <div class="text-foreground prose dark:prose-invert prose-sm">
                            <p class="mb-8">
                                Você está sendo convidado a participar de uma pesquisa cujo objetivo é avaliar a
                                aceitação e usabilidade de uma plataforma de aplicação e correção de testes não privativos.
                            </p>
                            <p class="font-semibold mb-2">Para participar desta pesquisa você precisa:</p>
                            <ol class="list-decimal list-inside mb-8">
                                <li class="mb-2">
                                Estar cadastrado no Conselho de Psicologia ou cursando a partir do 6º nível de
                                curso de psicologia;
                                </li>
                                <li class="mb-2">
                                Aceitar participar da pesquisa, confirmando o aceite do Termo de Consentimento
                                Livre e Esclarecido, clicando no botão concordo, localizado ao final desta página;
                                </li>
                                <li class="mb-2">Preencher todos os campos do questionário on-line;</li>
                                <li class="mb-2">
                                Enviar o questionário preenchido, clicando no botão ENVIAR, localizado ao final
                                do questionário online. Ao enviar os dados, você aceitará participar da pesquisa, e estará livre
                                para se recusar a participar ou retirar seu consentimento, em qualquer fase da pesquisa,
                                lembrando que a pesquisa zela pela privacidade das informações e a garantia do anonimato.
                                </li>
                            </ol>
                            <p class="mb-8">
                                Todos os dados servirão exclusivamente para fins de pesquisa. Esclarecemos que não há risco
                                e benefício direto e individual para o participante da pesquisa. Os benefícios dos resultados
                                obtidos serão identificados ao final do estudo, sendo estes de caráter coletivo. Os voluntários
                                deste estudo dispõem de total liberdade para esclarecer qualquer dúvida que possa surgir
                                antes e durante o andamento da pesquisa, com o Prof. Dr. Luis Hemrique Paloski
                                (<a href="mailto:luis.paloski@atitus.edu.br" class="text-blue-500 hover:underline">luis.paloski@atitus.edu.br</a>), com a Mestranda Angélica Antunes de Oliveira
                                (<a href="mailto:psico.angelicaoliveira@gmail.com" class="text-blue-500 hover:underline">psico.angelicaoliveira@gmail.com</a>).
                            </p>
                            <p class="mb-8">
                                Todos os dados serão mantidos em sigilo e a identidade dos voluntários não será
                                revelada publicamente em nenhuma hipótese. Os dados serão analisados em conjunto com
                                outros participantes da pesquisa, não sendo divulgada a identificação de nenhum participante.
                                Somente o pesquisador responsável e a equipe de trabalho envolvida neste estudo terão
                                acesso a estas informações que serão apenas para fins de pesquisa. Não haverá qualquer
                                forma de remuneração financeira para os voluntários. O voluntário receberá cópia deste
                                Termo de Consentimento Livre e Esclarecido por e-mail após o preenchimento dos dados na
                                plataforma.
                            </p>
                            <p>Desde já, agradecemos sua participação</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button onclick="acceptTcle()" class="bg-primary text-white px-4 py-2 rounded">
                            Eu concordo
                        </button>
                    </div>
                </div>
            </div>
            @endif
        <main id="app" class="flex flex-grow flex-col flex-1 justify-between min-h-dvh">            
            <navigation
                :user="{{ json_encode(Auth::user()) }}"
                :routes="{{ json_encode([
                    'dashboard' => route('dashboard'),
                    'profile' => route('profile.edit'),
                    'logout' => route('logout'),
                    'tests' => route('tests.index'),
                    'test-applications' => route('test-applications.index'),
                    'settings' => route('dashboard'),
                ]) }}"                
            ></navigation>

            @if(session('success') || session('warning') || session('error'))
            <div class="flex flex-col container mx-auto w-full py-4 px-3">
                @if(session('success'))
                <flash-alert type="primary">
                    <template #title>{{ session('success') }}</template>
                </flash-alert>
                @endif
                
                @if(session('warning'))
                <flash-alert type="ghost">
                    {{ session('warning') }}
                </flash-alert>
                @endif
                
                @if(session('error'))
                <flash-alert type="destructive">
                    {{ session('error') }}
                </flash-alert>
                @endif
            </div>
            @endif

            {{ $slot }}

            <app-footer />

            
        </main>

        <script>
            function acceptTcle() {
                fetch('{{ route("accept.tcle") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Remover o modal
                        const modal = document.querySelector('.fixed.inset-0');
                        if (modal) {
                            modal.remove();
                        }
                    }
                })
                .catch(error => {
                    console.error('Erro ao aceitar o TCLE:', error);
                });
            }
        </script>
    </body>
</html>
