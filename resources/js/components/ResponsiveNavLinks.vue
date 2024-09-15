<template>
    <div :class="{ 'block': isOpen, 'hidden': !isOpen }" class="sm:hidden">
        <div class="space-y-1 pb-3 pt-2">
            <ResponsiveNavLink :href="dashboardRoute" :active="isActive" @click="$emit('close')">
                {{ __('Painel') }}
            </ResponsiveNavLink>            
            <ResponsiveNavLink :href="'/test-applications'" :active="isActive" @click="$emit('close')">
                {{ __('Aplicações de Teste') }}
            </ResponsiveNavLink>
        </div>
        <div v-if="user" class="border-t border-border pb-1 pt-4">
            <div class="px-4">
                <div class="text-base font-medium text-foreground">
                    {{ user.name }}
                </div>
                <div class="text-sm font-medium text-muted-foreground">
                    {{ user.email }}
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <ResponsiveNavLink :href="'/profile'" @click="$emit('close')">
                    {{ __('Meu Perfil') }}
                </ResponsiveNavLink>
                <ResponsiveNavLink :href="'/settings'" @click="$emit('close')">
                    {{ __('Configurações') }}
                </ResponsiveNavLink>
                <hr class="my-2" />
                <ResponsiveNavLink as="button" @click="logout">
                    {{ __('Sair') }}
                </ResponsiveNavLink>
            </div>
        </div>
    </div>
</template>

<script setup>
import ResponsiveNavLink from './ResponsiveNavLink.vue';

const props = defineProps({
    isOpen: Boolean,
    user: Object,
    dashboardRoute: String,
    profileRoute: String,
    isActive: Boolean,
    logoutRoute: String
});

const emit = defineEmits(['close']);

const __ = (key) => key; // Placeholder for translation function

const logout = () => {
    // Lógica de logout
    fetch(props.logoutRoute, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({}),
    }).then(response => {
        if (response.ok) {
            // Redirecionar ou atualizar a página após o logout
            window.location.href = '/'; // ou a rota desejada
        } else {
            console.error('Erro ao fazer logout');
        }
    }).catch(error => {
        console.error('Erro de rede:', error);
    }).finally(() => {
        emit('close');
    });
};
</script>