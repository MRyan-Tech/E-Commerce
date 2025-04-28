<script setup>
import api from '../api.js';
import { ref } from 'vue';
import { useRouter } from 'vue-router';



const router = useRouter();


const form = ref({
    email: "",
    password: "",
});

const handleLogin = async () => {
    try {
        const res = await api.post("login", form.value)
        .then((response)=> {
            let {token} = response.data;
            let {role} = response.data.user;
            localStorage.setItem("token", token);
            router.push(role === "admin" ? "/admin/beranda" : "/customer/beranda")        
        });       
    } catch (error) {
        console.error(error)
    }
};


</script>

<template>
    <div class=" container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class=" border border-1 border-black w-50">
                    <form @submit.prevent="handleLogin" class=" p-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"
                                >Email address</label
                            >
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
                            <label for="exampleInputPassword1" class="form-label"
                                >Password</label
                            >
                            <input
                                v-model="form.password"
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                            />
                        </div>                        
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                        <router-link to="/">
                            <button type="button" class="btn btn-primary mt-4 w-100">kembali ke beranda</button>
                        </router-link>
                        <div class="d-flex justify-content-center">
                            <p>Belum mempunyai akun? Silahkan daftar 
                                <router-link to="/auth/regist">Di sini</router-link>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
