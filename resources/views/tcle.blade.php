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

                    <p class="mb-4">Você está sendo convidado(a) a participar, como voluntário(a), da pesquisa intitulada "SISTEP - Sistema de Testes Psicológicos". Este documento contém informações sobre o estudo que estamos fazendo. Sua colaboração neste estudo será de muita importância para nós.</p>

                    <h2 class="text-xl font-semibold mb-2">1. Objetivos do estudo</h2>
                    <p class="mb-4">O objetivo deste estudo é [descreva os objetivos da pesquisa].</p>

                    <h2 class="text-xl font-semibold mb-2">2. Procedimentos</h2>
                    <p class="mb-4">Sua participação consistirá em responder a testes psicológicos online através da plataforma SISTEP. Os testes têm duração estimada de [tempo estimado] e podem ser realizados em qualquer dispositivo com acesso à internet.</p>

                    <h2 class="text-xl font-semibold mb-2">3. Riscos e desconfortos</h2>
                    <p class="mb-4">Os riscos envolvidos nesta pesquisa são mínimos, podendo incluir desconforto emocional ao responder algumas perguntas. Caso você se sinta desconfortável, poderá interromper sua participação a qualquer momento.</p>

                    <h2 class="text-xl font-semibold mb-2">4. Benefícios</h2>
                    <p class="mb-4">Sua participação contribuirá para o avanço do conhecimento científico na área de psicologia e para o aprimoramento de ferramentas de avaliação psicológica.</p>

                    <h2 class="text-xl font-semibold mb-2">5. Confidencialidade</h2>
                    <p class="mb-4">Suas respostas serão tratadas de forma anônima e confidencial. Em nenhum momento será divulgado seu nome ou informações que possam identificá-lo(a).</p>

                    <h2 class="text-xl font-semibold mb-2">6. Direitos do participante</h2>
                    <p class="mb-4">Você pode se recusar a participar ou retirar seu consentimento a qualquer momento, sem penalização alguma. Você também tem o direito de receber esclarecimentos sobre a pesquisa em qualquer etapa do estudo.</p>

                    <h2 class="text-xl font-semibold mb-2">7. Contato</h2>
                    <p class="mb-4">Para quaisquer dúvidas ou esclarecimentos, entre em contato com [nome do pesquisador responsável] pelo e-mail [e-mail de contato] ou telefone [número de telefone].</p>

                    <p class="mt-6 font-semibold">Ao clicar em "Eu concordo" abaixo, você declara que leu e entendeu as informações contidas neste documento e concorda em participar desta pesquisa.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>