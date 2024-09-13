<template>
  <div class="relative" @click.away="closeDropdown">
    <div @click="toggleDropdown">
      <slot name="trigger"></slot>
    </div>

    <div v-show="modelValue" class="absolute z-50 mt-2 rounded-md shadow-lg" :class="[widthClass, alignmentClasses]">
      <div class="rounded-md ring-1 ring-black ring-opacity-5" :class="contentClasses">
        <slot name="content"></slot>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
  align: {
    default: 'right'
  },
  width: {
    default: '48'
  },
  contentClasses: {
    default: 'py-1 bg-white dark:bg-gray-700'
  },
  modelValue: Boolean
});

const emit = defineEmits(['update:modelValue']);

const widthClass = computed(() => {
  return {
    '48': 'w-48',
  }[props.width.toString()];
});

const alignmentClasses = computed(() => {
  if (props.align === 'left') {
    return 'origin-top-left left-0';
  } else if (props.align === 'right') {
    return 'origin-top-right right-0';
  } else {
    return 'origin-top';
  }
});

const toggleDropdown = () => {
  emit('update:modelValue', !props.modelValue);
};

const closeDropdown = () => {
  emit('update:modelValue', false);
};
</script>