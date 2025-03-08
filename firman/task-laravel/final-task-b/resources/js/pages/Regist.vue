<script setup>
import { ref } from "vue";
import api from "../api.js";
import { useRouter } from "vue-router";

const form = ref({
    name: "",
    user_name: "",
    phone: "",
    email: "",
    password: "",
});
const token = ref(localStorage.getItem("token") || "");
const router = useRouter();

const register = async () => {try {
        const res = await api.post("/register", form.value);
        token.value = res.data.token;
        localStorage.setItem("token", token.value);
        router.push({ name: "/" });
    } catch (error) {
        console.error(error);
    }
};
</script>

<template>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="border border-1 border-black w-50 rounded">
                    <!-- <h4 class=" d-flex justify-content-center mt-4">Regist</h4> -->
                    <form @submit.prevent="register" class="p-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input
                                v-model="form.name"
                                type="text"
                                class="form-control"
                                id="name"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="user-name" class="form-label"
                                >Nama Pengguna</label
                            >
                            <input
                                v-model="form.user_name"
                                type="text"
                                class="form-control"
                                id="user-name"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="phone-number" class="form-label"
                                >Nomor Handphone</label
                            >
                            <input
                                v-model="form.phone"
                                type="text"
                                class="form-control"
                                id="phone-number"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Email address
                            </label>
                            <input
                                v-model="form.email"
                                type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                            />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label
                                for="exampleInputPassword1"
                                class="form-label"
                                >Password</label
                            >
                            <input
                                v-model="form.password"
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                            />
                        </div>
                        <router-link to="/">
                            <button type="submit" class="btn btn-primary w-100">
                                Submit
                            </button>
                        </router-link>
                        <router-link to="/">
                            <button
                                type="submit"
                                class="btn btn-primary w-100 mt-3"
                            >
                                Kembali ke beranda
                            </button>
                        </router-link>
                    </form>
                    <div class="d-flex justify-content-center">
                        <p>
                            Sudah punya akun? Silahkan Masuk
                            <router-link to="/auth/login">Di sini</router-link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
