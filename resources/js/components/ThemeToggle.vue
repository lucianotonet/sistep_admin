<template>
    <Button variant="ghost" size="icon" @click="toggleTheme">
        <SunIcon v-if="theme === 'dark'"
            class="h-6 w-6 rotate-0 scale-100 transition-all" />
        <MoonIcon v-else
            class="h-5 w-5 rotate-0 scale-100 transition-all" />
        <span class="sr-only">Alternar tema</span>
    </Button>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import { SunIcon, MoonIcon } from '@heroicons/vue/24/outline';
import { Button } from '@/components/ui/button';

const theme = ref('light');

const toggleTheme = () => {
    theme.value = theme.value === 'light' ? 'dark' : 'light';
    updateTheme(theme.value);
};

const updateTheme = (themeValue) => {
    document.documentElement.classList.remove('light', 'dark');
    document.documentElement.classList.add(themeValue);
    localStorage.setItem('theme', themeValue);
};

onMounted(() => {
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);
});

const setTheme = (newTheme) => {
    theme.value = newTheme;
    updateTheme(newTheme);
};
</script>