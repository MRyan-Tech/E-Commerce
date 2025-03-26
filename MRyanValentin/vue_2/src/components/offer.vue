<template>
  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container">
        <div class="row">
          <div v-for="(product, index) in products" :key="index" class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img :src="product.photo" :alt="product.name" />
              </div>
              <div class="detail-box">
                <h5>{{ product.name }}</h5>
                <h6>
                  <span>{{ product.discount || 10 }}%</span> Off
                </h6>
                <a href="#">
                  Order Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      products: []
    };
  },
  methods: {
  async fetchProducts() {
    try {
      const response = await axios.get('https://sistemtoko.com/public/demo/product');
      this.products = response.data.aaData.slice(3, 5); // Ambil produk ke-4 dan ke-5
    } catch (error) {
      console.error('Error fetching products:', error);
    }
  }
},

  mounted() {
    this.fetchProducts();
  }
};
</script>

<style scoped>
.offer_section {
  padding-bottom: 20px;
}
.img-box img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}
</style>