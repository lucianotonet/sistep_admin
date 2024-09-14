<template>
    <footer class="mt-8 w-full py-4 bg-background">
        <div class="flex flex-row px-4 text-muted-foreground">
            <div class="flex w-auto md:w-full flex-col text-left">
                <p class="text-sm">&copy; {{ new Date().getFullYear() }} SISTEP. Todos os direitos reservados.
                    <a href="/changelog" class="text-xs hover:text-foreground transition-colors">v0.0.1</a>
                </p>
                <small class="mt-1 flex flex-col md:flex-row gap-1 md:gap-4 text-xs">
                    <a href="/tcle" class="hover:text-foreground transition-colors">
                        Termo de Consentimento Livre e Esclarecido
                    </a>
                    <a href="/privacy" class="hover:text-foreground transition-colors">
                        Política de Privacidade
                    </a>
                    <a href="/cookies" class="hover:text-foreground transition-colors">
                        Política de Cookies
                    </a>
                </small>
            </div>
            <div class="flex w-auto flex-col items-end justify-end ml-auto">
                <ThemeToggle />
            </div>
        </div>
    </footer>
</template>

<script setup>
import ThemeToggle from './ThemeToggle.vue';
</script>

