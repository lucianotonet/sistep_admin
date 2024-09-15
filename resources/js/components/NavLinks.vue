<template>
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <nav-link :href="'/dashboard'" :active="isActive('dashboard')">
            {{ __('Dashboard') }}
        </nav-link>
        <nav-link :href="'/patients'" :active="isActive('patients')">
            {{ __('Pacientes') }}
        </nav-link>
        <nav-link :href="'/test-applications'" :active="isActive('test-applications')">
            {{ __('Aplicações de Teste') }}
        </nav-link>
    </div>
</template>

<script setup>
import NavLink from './NavLink.vue';

const __ = (key) => key; // Placeholder for translation function

function isActive(routeName) {
    const currentUrl = window.location.pathname.replace(/^\/+/, ''); // Obtém a URL atual e remove a "/"
    console.log(currentUrl, routeName);
    return currentUrl === routeName.replace(/^\/+/, '') || currentUrl.indexOf(routeName.replace(/^\/+/, '')) === 0; // Verifica se a URL atual corresponde ao nome da rota ou se é uma subpágina
}
</script>