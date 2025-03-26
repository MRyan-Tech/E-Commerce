import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/index.vue"; 
import About from "../pages/about.vue";
import Menu from "../pages/menu.vue";

const routes = [
  { path: "/", name: "Home", component: Home },
  { path: "/about", name: "About", component: About },
  { path: "/menu", name: "Menu", component: Menu },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
