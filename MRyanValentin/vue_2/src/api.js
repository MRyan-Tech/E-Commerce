import axios from "axios";

const api = axios.create({
  baseURL: "https://sistemtoko.com/public/demo",
  headers: {
    "Content-Type": "application/json",
  },
});

export default api;
