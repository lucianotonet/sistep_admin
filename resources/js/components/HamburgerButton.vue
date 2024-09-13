<template>
    <div class="-me-2 flex items-center sm:hidden">
        <button @click="toggleMenu"
            class="inline-flex items-center justify-center rounded p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-900 dark:hover:text-gray-400 dark:focus:bg-gray-900 dark:focus:text-gray-400">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': menuOpen, 'inline-flex': !menuOpen }" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !menuOpen, 'inline-flex': menuOpen }" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</template>

<script setup>
import { HamburgerMenuIcon } from '@radix-icons/vue';

const props = defineProps({
    menuOpen: Boolean
});

const emit = defineEmits(['update:menuOpen']);

const toggleMenu = () => {    
    emit('update:menuOpen', !props.menuOpen);
};
</script>