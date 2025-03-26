<template>
  <div class="main-container">
    <!-- Hero Section -->
    <div class="hero_area">
      <div class="bg-box">
        <img src="/images/hero-bg.jpg" alt="Background" class="bg-image">
      </div>

      <!-- Slider Section -->
      <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h1>Selamat Datang di StyleHub</h1>
                      <p>
            Temukan koleksi fashion terkini untuk tampil lebih percaya diri. Kami menghadirkan beragam pilihan pakaian, 
            sepatu, dan aksesoris yang sesuai dengan tren terbaru. Jadilah trendsetter dengan koleksi eksklusif kami!
          </p>
                      <div class="btn-box">
                        <a href="/shop" class="btn1">Belanja Sekarang</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h1>Koleksi Hijab Elegan</h1>
                      <p>
            Berbagai pilihan hijab untuk melengkapi gaya sehari-hari. Dengan bahan berkualitas tinggi dan desain modern, 
            hijab kami akan membuatmu semakin anggun dalam setiap kesempatan. Tersedia dalam berbagai warna dan motif 
            yang bisa dipadukan dengan pakaian favoritmu.
          </p>
                      <div class="btn-box">
                        <router-link to="/hijab" class="btn1">Lihat Koleksi</router-link>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h1>Aksesoris & Tas Fashion</h1>
                      <p>
            Lengkapi penampilanmu dengan aksesoris dan tas stylish. Dari anting hingga tas elegan, 
            kami menyediakan berbagai pilihan untuk menambah sentuhan istimewa pada gaya berpakaianmu. 
            Temukan koleksi terbaru yang akan membuatmu semakin percaya diri!
          </p>
                      <div class="btn-box">
                        <a href="/accessories" class="btn1">Jelajahi Aksesoris</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Indicator -->
          <div class="container">
            <ol class="carousel-indicators">
              <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#customCarousel1" data-slide-to="1"></li>
              <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </section>
    </div>

    <!-- Komponen Lain -->
    <div class="content-sections">
      <offer />
      <div>
      <food />
    </div>
      <div>
      <about style="margin-top: 20px;"/>
    </div>
    <div>
      <client/>
    </div>
    </div>
  </div>
</template>

<script>
import Offer from "../components/offer.vue";
import food from "../components/food.vue";
import about from "../components/about.vue";
import client from "../components/client.vue";

export default {
  components: {
    Offer,
    food,
    about,
    client,
  },
};
</script>

<style scoped>
/* Mengatur agar tidak menimpa komponen lain */
.main-container {
  position: relative;
  width: 100%;
  overflow: hidden;
}

/* Latar belakang agar tidak tumpang tindih */
.bg-box {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.bg-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* filter: blur(15px); */
}

.bg-box::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3); /* Warna overlay lebih gelap */
}


/* Menyesuaikan slider agar tidak mengganggu elemen lain */
.slider_section {
  position: relative;
  z-index: 1;
  padding: 60px 0;
}

/* Menata komponen agar tidak bertabrakan */
.content-sections {
  position: relative;
  z-index: 2;
  padding-top: 50px;
}

/* Food Section */
.food-section {
  position: relative;
  margin-top: 50px;
}

/* About Section agar tidak tertutup */
.about-section {
  position: relative;
  padding-top: 80px;
}
</style>
