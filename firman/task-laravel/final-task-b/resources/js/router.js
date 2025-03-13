import { createRouter, createWebHistory } from "vue-router";
// import Dashboard from "./layouts/Dashboard.vue";
import Auth from "./layouts/authentication/Auth.vue";
import Landing from "./layouts/landing/Landing.vue";
// import Landing from "./pages/Landing.vue";
import Product from "./pages/Product.vue";
import LoginPage from "./pages/LoginPage.vue";
import Regist from "./pages/Regist.vue";
import Dashboard from "./layouts/user/Dashboard.vue";



const routes = [
    { path: "/", component: Landing,
        children: [
            { path: "product", component: Product},
        ],
    },
    { path: "/auth", component: Auth,
        children: [
            { path: "login", component: LoginPage},
            { path: "regist", component: Regist},
        ],
    },
    {
        path: "/dashboard", component: Dashboard,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router