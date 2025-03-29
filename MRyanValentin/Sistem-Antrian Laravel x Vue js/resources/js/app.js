import { createApp } from 'vue';
import App from './App.vue'; // Komponen utama
import router from '../router'; // Impor router

const app = createApp(App);
app.use(router);
app.mount('#app');
