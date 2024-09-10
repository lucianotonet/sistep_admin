<footer class="py-4 mt-8 w-full">
    <div class="flex flex-col md:flex-row px-4 text-muted">
        <div class="flex flex-col w-full text-left md:w-1/2">
            <p class="text-sm">
                &copy; {{ date('Y') }} SISTEP. Todos os direitos reservados.
            </p>
            <p class="text-xs leading-none">
                Este site está em conformidade com a Lei Geral de Proteção de Dados (LGPD). <br />
                Utilizamos cookies para melhorar sua experiência de navegação. <br />
                Ao continuar utilizando nosso site, você concorda com nossa política de cookies e privacidade.
            </p>
        </div>
        <div class="flex flex-col w-full text-left md:flex-row mt-1 md:mt-0 md:w-1/2">
            <div
                class="flex flex-col flex-grow text-xs md:text-sm md:items-end xl:flex-row md:justify-end gap-0 xl:gap-6 min-h-full">
                <a href="{{ route('tcle') }}" class="">
                    Termo de Consentimento Livre e Esclarecido
                </a>
                <a href="{{ route('privacy') }}" class="">
                    Política de Privacidade
                </a>
                <a href="{{ route('cookies') }}" class="">
                    Política de Cookies
                </a>
            </div>
        </div>
    </div>

</footer>