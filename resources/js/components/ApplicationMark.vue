<template>
    <a :href="dashboardRoute" class="flex flex-col items-center justify-center transition-all h-8 w-auto border rounded-sm p-2 border-border my-auto">
        <h3 v-if="miniLogo" class="font-mono text-2xl font-bold text-foreground">S</h3>
        <h3 v-else class="font-mono text-2xl font-bold text-foreground">SISTEP</h3>
    </a>
</template>

<script setup>
import { ref } from 'vue';

const { miniLogo } = defineProps({
    miniLogo: {
        type: Boolean,
        default: true
    }
});

const dashboardRoute = ref('/');
</script>
