<template>
    <div id="app">
        <router-view></router-view>
      </div>

      <!-- Tampilkan Footer hanya jika bukan halaman DisplayAntrian -->
      <!-- <FooterComponent v-if="!hideFooter" /> -->
  </template>

  <script>
//   import FooterComponent from './components/footer.vue'; // Import Footer

  export default {
    name: "App",
    components: {
    //   FooterComponent
    },
    computed: {
      hideFooter() {
        return this.$route.path === "/DisplayAntrian"; // Sembunyikan footer di halaman DisplayAntrian
      }
    }
  };
  </script>
