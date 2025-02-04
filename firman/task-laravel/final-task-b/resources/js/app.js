import { createApp } from "vue";
import App from "./App.vue";
import './bootstrap';
import "../../node_modules/bootstrap/dist/css/bootstrap.min.css";
import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min";
const app = createApp(App);

app.mount("#app");
