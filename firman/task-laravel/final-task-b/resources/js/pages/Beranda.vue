<script setup>
import api from "../api";
import { ref, onMounted } from "vue";

let product = ref([]);

const products = async () => {
  try {
    await api.get("products").then((response) => {
      product.value = response.data.data;
      console.log(product.value);
    });
  } catch (error) {
    console.log("error");
  }
};

onMounted(async () => {
  await products();
});
</script>

<template>
  <div>
    <div class="row">
      <div class="col d-flex justify-content-center">
        <div class="w-75">
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="/public/assets/img/jumbo1.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/public/assets/img/jumbo2.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/public/assets/img/jumbo3.png"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <div
            v-for="(data, index) in product"
            :key="index"
            class="card"
            style="width: 18rem"
          >
            <img
              :src="data.image"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">{{ data.product_name }}</h5>
              <p class="card-text">
                {{ data.description }}
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>