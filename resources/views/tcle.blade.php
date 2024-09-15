<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-foreground leading-tight">
            {{ __('Termo de Consentimento Livre e Esclarecido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-foreground/5 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-foreground prose dark:prose-invert prose-sm">
                    <h1 class="text-2xl font-bold mb-4">Termo de Consentimento Livre e Esclarecido (TCLE)</h1>

                    <p class="mb-8">Você está sendo convidado a participar de uma pesquisa cujo objetivo é avaliar a
                        aceitação e usabilidade de uma plataforma de aplicação e correção de testes não privativos.
                    </p>
                    <p class="font-semibold mb-2">Para participar desta pesquisa você precisa:</p>
                    <ol class="list-decimal list-inside mb-8">
                        <li class="mb-2">    Estar cadastrado no Conselho de Psicologia ou cursando a partir do 6º nível de
                            curso de psicologia;
                        </li>

                        <li class="mb-2">
                            Aceitar participar da pesquisa, confirmando o aceite do Termo de Consentimento
                            Livre e Esclarecido, clicando no botão concordo, localizado ao final desta página;

                        </li>
                        <li class="mb-2">Preencher todos os campos do questionário on-line;</li>
                        <li class="mb-2">

                            Enviar o questionário preenchido, clicando no botão ENVIAR, localizado ao final
                            do questionário online. Ao enviar os dados, você aceitará participar da pesquisa, e estará
                            livre
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
                        (<a href="mailto:luis.paloski@atitus.edu.br"
                            class="text-blue-500 hover:underline">luis.paloski@atitus.edu.br</a>), com a Mestranda
                        Angélica Antunes de Oliveira
                        (<a href="mailto:psico.angelicaoliveira@gmail.com"
                            class="text-blue-500 hover:underline">psico.angelicaoliveira@gmail.com</a>).
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
        </div>
    </div>
</x-app-layout>