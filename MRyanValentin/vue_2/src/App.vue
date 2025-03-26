<template>
  <div id="app">
    <Navbar />
    <main>
      <router-view></router-view>
    </main>
    <FooterComponent />
  </div>
</template>

<script setup>
import Navbar from "@/components/navbar.vue";
import FooterComponent from "@/components/footer.vue"; // "Footer.vue" bukan "footer.vue"
</script>

<style scoped>
/* Tambahkan styling jika diperlukan */
</style>
