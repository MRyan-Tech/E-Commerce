<script setup>
const sayHello = () => {
    alert("Vue js dan bootstrap sudah terpasang");
};
</script>

<template>
    <div class="container mt-5">
        <h1 class="text-primary">Halo dari Vue + Bootstrap!</h1>
        <button class="btn btn-success" @click="sayHello">Klik Saya</button>
    </div>
</template>
