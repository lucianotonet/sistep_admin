<footer class="py-4 mt-8 w-full">
    <div class="w-full mx-auto px-6">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-full text-left md:w-1/3">
                <p class="text-sm  ">
                    &copy; {{ date('Y') }} SISTEP. Todos os direitos reservados.
                </p>
                <p class="text-xs leading-none">
                    Este site está em conformidade com a Lei Geral de Proteção de Dados (LGPD). <br/>
                    Utilizamos cookies para melhorar sua experiência de navegação. <br/>
                    Ao continuar utilizando nosso site, você concorda com nossa política de cookies e privacidade.
                </p>
            </div>
            <div class="w-full text-left md:w-1/3">
            </div>
            <div class="w-full text-left md:w-1/3">
                <ul class="flex flex-col flex-wrap md:flex-row md:justify-end md:gap-6">
                    <li class="">
                        <a href="{{ route('tcle') }}" class="text-sm   ">
                            Termo de Consentimento Livre e Esclarecido
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('privacy') }}" class="text-sm   ">
                            Política de Privacidade
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('cookies') }}" class="text-sm   ">
                            Política de Cookies
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</footer>