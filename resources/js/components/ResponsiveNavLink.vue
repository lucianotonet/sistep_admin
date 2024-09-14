<template>
  <div>
    <button v-if="as == 'button'" class="w-full text-left" :class="classes" @click="$emit('click', $event)">
      <slot></slot>
    </button>

    <a v-else :href="href" :class="classes">
      <slot></slot>
    </a>
  </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  active: Boolean,
  href: String,
  as: String
});

const classes = computed(() => {
  return props.active
    ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-primary text-left text-base font-medium text-primary-foreground bg-primary/10 focus:outline-none focus:text-primary-foreground focus:bg-primary/20 focus:border-primary transition duration-150 ease-in-out'
    : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-foreground hover:text-foreground hover:bg-muted hover:border-muted focus:outline-none focus:text-foreground focus:bg-muted focus:border-muted transition duration-150 ease-in-out';
});

defineEmits(['click']);
</script>