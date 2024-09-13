<template>
  <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <nav-link :href="dashboardRoute" :active="isActive">
      {{ __('Painel') }}
    </nav-link>
  </div>
</template>

<script setup>
import NavLink from './NavLink.vue';

const props = defineProps({
  dashboardRoute: String,
  isActive: Boolean
});

const __ = (key) => key; // Placeholder for translation function
</script>