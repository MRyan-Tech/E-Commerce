import { createRouter, createWebHistory } from "vue-router";
import Landing from "./pages/dashboard/LandingPage.vue";
import About from "./pages/About.vue";

const routes = [
    { path: '/', component: Landing },
    { path: '/about', component: About }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;