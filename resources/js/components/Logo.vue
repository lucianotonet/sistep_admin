<template>
  <div class="flex shrink-0 items-center">
    <a :href="dashboardRoute">
      <application-mark class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
    </a>
  </div>
</template>

<script setup>
import ApplicationMark from './ApplicationMark.vue';

const props = defineProps({
  dashboardRoute: String
});
</script>