import { createRouter, createWebHistory } from 'vue-router';
import Home from '../js/pages/index.vue';
import NomorAntrian from '../js/pages/nomor_antrian.vue';
import PanggilAntrian from '../js/pages/PanggilAntrian.vue';
import DisplayAntrian from '../js/pages/displayAntrian.vue';

const routes = [
  { path: '/', component: Home, meta: { title: 'Sistem Antrian Klinik' } },
  { path: '/nomor_antrian', component: NomorAntrian, meta: { title: 'Nomor Antrian' } },
  { path: '/PanggilAntrian', component: PanggilAntrian, meta: { title: 'Panggil Antrian' } },
  { path: '/DisplayAntrian', component: DisplayAntrian, meta: { title: 'Display Antrian' } }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

// Mengubah title saat navigasi
router.beforeEach((to, from, next) => {
  document.title = to.meta.title || 'Antrian App';
  next();
});

export default router;
