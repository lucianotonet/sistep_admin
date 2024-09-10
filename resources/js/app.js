import './bootstrap';
import Alert from './components/Alert.vue';
import { createApp } from 'vue';

// Inicializa o Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

const app = createApp({});

app.component('Alert', Alert);

app.mount('#app');
