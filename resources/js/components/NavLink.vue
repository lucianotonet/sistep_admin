<template>
  <a :href="href" :class="classes">
    <slot></slot>
  </a>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  href: String,
  active: Boolean
});

const classes = computed(() => {
  return props.active
    ? 'inline-flex items-center border-b-2 border-indigo-400 px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:border-indigo-700 focus:outline-none dark:border-indigo-600'
    : 'inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:border-gray-300 dark:focus:border-gray-700';
});
</script>