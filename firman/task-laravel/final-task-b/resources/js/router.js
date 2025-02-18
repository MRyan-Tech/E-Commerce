import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "./layouts/Dashboard.vue";
// import Landing from "./pages/Landing.vue";
import Product from "./pages/Product.vue";
import LoginPage from "./pages/LoginPage.vue";
import Regist from "./pages/Regist.vue";

const routes = [
    { path: "/", component: Dashboard},
    { path: "/product", component: Product},
    { path: "/login", component: LoginPage},
    { path: "/regist", component: Regist},
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router