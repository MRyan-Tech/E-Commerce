import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "./layouts/Dashboard.vue";
import Landing from "./pages/Landing.vue";
import Product from "./pages/Product.vue";

const routes = [
    { path: "/", component: Dashboard},
    { path: "/product", component: Product},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router