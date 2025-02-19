<template>
    <div class=" container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class=" border border-1 border-black w-50">
                    <form class=" p-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"
                                >Email address</label
                            >
                            <input
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
                                type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                            />
                        </div>
                        <div class="mb-3 form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="exampleCheck1"
                            />
                            <label class="form-check-label" for="exampleCheck1"
                                >Check me out</label
                            >
                        </div>
                        <router-link>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </router-link>
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
