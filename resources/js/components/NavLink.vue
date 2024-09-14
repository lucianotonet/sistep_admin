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
    ? 'inline-flex items-center border-b-2 border-primary px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:border-primary focus:outline-none'
    : 'inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:border-muted';
});
</script>