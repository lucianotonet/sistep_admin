<template>
    <footer class="mt-8 w-full py-4">
        <div class="flex flex-col px-4 text-muted md:flex-row">
            <div class="flex w-full flex-col text-left md:w-1/2">
                <p class="text-sm">
                    &copy; {{ new Date().getFullYear() }} SISTEP. Todos os direitos reservados.
                </p>
                <p class="text-xs leading-none">
                    Este site está em conformidade com a Lei Geral de Proteção de
                    Dados (LGPD).
                    <br />
                    Utilizamos cookies para melhorar sua experiência de navegação.
                    <br />
                    Ao continuar utilizando nosso site, você concorda com nossa
                    política de cookies e privacidade.
                </p>
            </div>
            <div class="mt-1 flex w-full flex-col text-left md:mt-0 md:w-1/2 md:flex-row">
                <div
                    class="flex min-h-full flex-grow flex-col gap-0 text-xs md:items-end md:justify-end md:text-sm xl:flex-row xl:gap-6">
                    <a href="/changelog" class="">Changelog</a>
                    <a href="/tcle" class="">
                        Termo de Consentimento Livre e Esclarecido
                    </a>
                    <a href="/privacy" class="">
                        Política de Privacidade
                    </a>
                    <a href="/cookies" class="">
                        Política de Cookies
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>

