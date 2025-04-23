import { createRouter, createWebHistory } from "vue-router";
// import Dashboard from "./layouts/Dashboard.vue";
import Auth from "./layouts/authentication/Auth.vue";
import Landing from "./layouts/landing/Landing.vue";
// import Landing from "./pages/Landing.vue";
import Product from "./pages/Product.vue";
import LoginPage from "./pages/LoginPage.vue";
import Regist from "./pages/Regist.vue";
import Dashboard from "./layouts/user/Dashboard.vue";
import Beranda from "./pages/Beranda.vue";
import BerandaAdmin from "./pages/admin/BerandaAdmin.vue";
import Admin from "./layouts/admin/admin.vue";
import ProductsAdmin from "./pages/admin/ProductsAdmin.vue";
import TransaksiAdmin from "./pages/admin/TransaksiAdmin.vue";



const routes = [
    { path: "/", component: Landing,
        children: [
            { path: "", component: Beranda},
            { path: "/products", component: Product},
        ],
    },
    { path: "/auth", component: Auth,
        children: [
            { path: "login", component: LoginPage},
            { path: "regist", component: Regist},
        ],
    },
    {
        path: "/admin", component: Admin,
            children: [
                { path: "beranda", component: BerandaAdmin},
                { path: "products", component: ProductsAdmin},
                { path: "transaksi", component: TransaksiAdmin},
            ]
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