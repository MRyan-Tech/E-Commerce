<template>
  <section class="food_section layout_padding-bottom" style="margin-top: 120px;">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Our Produk</h2>
      </div>

      <ul class="filters_menu">
        <li :class="{ active: activeFilter === '*' }" @click="setFilter('*')">All</li>
        <li v-for="category in categories" :key="category" :class="{ active: activeFilter === category }" @click="setFilter(category)">
          {{ category }}
        </li>
      </ul>

      <div v-if="loading">Loading...</div>
      <div v-if="error">{{ error }}</div>

      <div class="filters-content" v-if="filteredProducts.length">
        <div class="row grid">
          <div class="col-sm-7 col-lg-3 all" v-for="product in filteredProducts" :key="product.id">
            <div class="box">
              <div>
                <div class="img-box">
                  <img :src="product.photo" :alt="product.name" />
                </div>
                <div class="detail-box">
                  <h5>{{ product.name }}</h5>
                  <p>{{ product.description || 'Deskripsi' }}</p>
                  <div class="options">
                    <h6>{{ product.currency }} {{ product.price }}</h6>
                    <button class="fas fa-shopping-cart" @click="addToCart(product)"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { ref, computed, onMounted } from 'vue';
import axios from 'axios';

export default {
  setup() {
    const products = ref([]);
    const loading = ref(true);
    const error = ref(null);
    const cart = ref([]);
    const activeFilter = ref('*');
    const categories = ['Tas', 'Baju', 'Lulur', 'Hijab'];

    const fetchProducts = async () => {
      try {
        const response = await axios.get('https://sistemtoko.com/public/demo/product');
        products.value = response.data.aaData || [];
      } catch (err) {
        error.value = 'Failed to load products';
      } finally {
        loading.value = false;
      }
    };

    const addToCart = (product) => {
      const itemInCart = cart.value.find((item) => item.id === product.id);
      if (itemInCart) {
        itemInCart.quantity += 1;
      } else {
        cart.value.push({ ...product, quantity: 1 });
      }
    };

    const setFilter = (filter) => {
      activeFilter.value = filter;
    };

    const filteredProducts = computed(() => {
      if (activeFilter.value === '*') return products.value;
      return products.value.filter((product) => product.name.toLowerCase().includes(activeFilter.value.toLowerCase()));
    });

    onMounted(fetchProducts);

    return { products, loading, error, cart, addToCart, filteredProducts, activeFilter, setFilter, categories };
  }
};
</script>

<style>
.filters_menu {
  display: flex;
  list-style: none;
  justify-content: center;
  gap: 10px;
  cursor: pointer;
}
.filters_menu li {
  padding: 10px 20px;
  border: 1px solid #000;
  border-radius: 5px;
}
.filters_menu .active {
  background-color: #000;
  color: #fff;
}
.cart {
  margin-top: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.cart ul {
  list-style: none;
  padding: 0;
}
</style>
