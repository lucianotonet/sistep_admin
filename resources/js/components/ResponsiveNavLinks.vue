<template>
  <div :class="{'block': isOpen, 'hidden': !isOpen}" class="sm:hidden">
    <div class="space-y-1 pb-3 pt-2">
      <responsive-nav-link :href="dashboardRoute" :active="isActive" @click="$emit('close')">
        {{ __('Painel') }}
      </responsive-nav-link>
    </div>
    <div v-if="user" class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600">
      <div class="px-4">
        <div class="text-base font-medium text-gray-800 dark:text-gray-200">
          {{ user.name }}
        </div>
        <div class="text-sm font-medium text-gray-500">
          {{ user.email }}
        </div>
      </div>
      <div class="mt-3 space-y-1">
        <responsive-nav-link :href="profileRoute" @click="$emit('close')">
          {{ __('Perfil') }}
        </responsive-nav-link>
        <responsive-nav-link as="button" @click="logout">
          {{ __('Sair') }}
        </responsive-nav-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import ResponsiveNavLink from './ResponsiveNavLink.vue';

const props = defineProps({
  isOpen: Boolean,
  user: Object,
  dashboardRoute: String,
  profileRoute: String,
  isActive: Boolean
});

const emit = defineEmits(['close']);

const __ = (key) => key; // Placeholder for translation function

const logout = () => {
  // Implementar lógica de logout
  emit('close');
};
</script>