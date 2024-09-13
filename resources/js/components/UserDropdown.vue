<template>
  <div class="hidden sm:ms-6 sm:flex sm:items-center">
    <DropdownMenu>
      <DropdownMenuTrigger
        class="inline-flex items-center rounded border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300"
      >
        <div>{{ user.name }}</div>
        <ChevronDownIcon class="ml-2 h-4 w-4" />
      </DropdownMenuTrigger>

      <DropdownMenuContent class="w-48">
        <DropdownMenuItem :as-child="true">
          <a :href="profileRoute" class="w-full">
            {{ __('Perfil') }}
          </a>
        </DropdownMenuItem>
        <DropdownMenuItem @select="logout">
          {{ __('Sair') }}
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { ChevronDownIcon } from '@radix-icons/vue';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';

const props = defineProps({
  user: Object,
  profileRoute: String,
  logoutRoute: String
});

const __ = (key) => key; // Placeholder for translation function

const logout = () => {
  // Lógica de logout
  fetch(props.logoutRoute, {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({}),
  })
  .then(response => {
    if (response.ok) {
      // Redirecionar ou atualizar a página após o logout
      window.location.href = '/'; // ou a rota desejada
    } else {
      console.error('Erro ao fazer logout');
    }
  })
  .catch(error => {
    console.error('Erro de rede:', error);
  });
};
</script>