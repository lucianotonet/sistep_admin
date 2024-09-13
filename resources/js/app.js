import "./bootstrap";
import { createApp } from "vue";

import Alert from "./components/Alert.vue";
import AppFooter from "./components/AppFooter.vue";
import Navigation from "./components/Navigation.vue";
import ApplicationMark from "./components/ApplicationMark.vue";
import NavLink from "./components/NavLink.vue";
import Dropdown from "./components/Dropdown.vue";
import DropdownLink from "./components/DropdownLink.vue";
import ResponsiveNavLink from "./components/ResponsiveNavLink.vue";
import ThemeToggle from "./components/ThemeToggle.vue";

// Inicializa o Alpine.js
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

const app = createApp({});

app.component("Alert", Alert);
app.component("AppFooter", AppFooter);
app.component("Navigation", Navigation);
app.component("ApplicationMark", ApplicationMark);
app.component("NavLink", NavLink);
app.component("Dropdown", Dropdown);
app.component("DropdownLink", DropdownLink);
app.component("ResponsiveNavLink", ResponsiveNavLink);
app.component("ThemeToggle", ThemeToggle);

app.mount("#app");

// Aplicar o tema salvo ou o tema do sistema ao carregar a página
const savedTheme = localStorage.getItem('theme') || 'system';
if (savedTheme === 'dark' || (savedTheme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark');
} else {
  document.documentElement.classList.remove('dark');
}
