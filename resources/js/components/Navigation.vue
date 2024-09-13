<template>
  <nav class="border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 justify-between">
        <div class="flex">
          <Logo :dashboard-route="routes.dashboard" />
          <NavLinks :dashboard-route="routes.dashboard" :is-active="isActive('dashboard')" />
        </div>
        <UserDropdown v-if="user" :user="user" :profile-route="routes.profile" :logout-route="routes.logout" />
        <HamburgerButton v-model:menuOpen="menuOpen" />
      </div>
    </div>
    <ResponsiveNavLinks 
      :is-open="menuOpen" 
      :user="user" 
      :dashboard-route="routes.dashboard" 
      :profile-route="routes.profile" 
      :is-active="isActive('dashboard')"
      @close="menuOpen = false"
    />
  </nav>
</template>

<script setup>
import { ref } from 'vue';
import Logo from './Logo.vue';
import NavLinks from './NavLinks.vue';
import UserDropdown from './UserDropdown.vue';
import HamburgerButton from './HamburgerButton.vue';
import ResponsiveNavLinks from './ResponsiveNavLinks.vue';

const props = defineProps({
  user: Object,
  routes: Object,
  currentRoute: String
});

const menuOpen = ref(false);

const isActive = (routeName) => {
  return props.currentRoute === routeName;
};
</script>