
const { createApp } = Vue;



createApp({
  data() {
    return {
        products: null,
        carts: [],
    };
  },
  methods: {
    addToCart(item) {
        this.carts.push(item)
    }
  },
  mounted() {
    fetch("https://hplussport.com/api/products/order/price")
    .then((res) => res.json())
    .then(data => {
        this.products = data;
    })
    .catch((err) => {
        console.error("failed to fetch products", err)
    })
    },
}).mount("#app");
