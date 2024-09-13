<template>
    <header class="flex h-auto items-center gap-4 md:px-4 lg:h-[60px] lg:px-6 sticky top-0 bg-background z-20">
        <a href="/"
            class="logo flex flex-col items-center justify-center transition-all h-8 w-auto border rounded-sm p-2">
            <h3 v-if="miniLogo" class="font-mono text-2xl font-bold">S</h3>
            <h3 v-else class="font-mono text-2xl font-bold">SISTEP</h3>
        </a>
    </header>
</template>

<script setup>
const { miniLogo } = defineProps({
    miniLogo: {
        type: Boolean,
        default: true
    }
});
</script>
