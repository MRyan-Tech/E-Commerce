<template>
    <body class="d-flex flex-column h-100">
      <main class="flex-shrink-0">
        <div class="container pt-5">
          <div class="row justify-content-lg-center">
            <div class="col-lg-5 mb-4">
              <div class="px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
                <!-- judul halaman -->
                <div class="d-flex align-items-center me-md-auto">
                  <i class="bi-people-fill text-success me-3 fs-3"></i>
                  <h1 class="h5 pt-2">Nomor Antrian</h1>
                </div>
              </div>

              <div class="card border-0 shadow-sm">
                <div class="card-body text-center d-grid p-5">
                  <div class="border border-success rounded-2 py-2 mb-4">
                    <h3 class="pt-4">ANTRIAN</h3>
                    <h1 class="display-1 fw-bold text-success text-center lh-1 pb-2">
                      {{ jumlahAntrian }}
                    </h1>
                  </div>

                  <!-- Dropdown untuk tujuan antrian -->
                  <select v-model="tujuanAntrian" class="form-control mb-3">
                    <option value="" disabled>Pilih Tujuan Antrian</option>
                    <option v-for="(tujuan, index) in daftarTujuan" :key="index" :value="tujuan">
                      {{ tujuan }}
                    </option>
                  </select>

                  <!-- button pengambilan nomor antrian -->
                  <a href="javascript:void(0)" @click="ambilAntrian" class="btn btn-success btn-block rounded-pill fs-5 px-5 py-4 mb-2">
                    <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </body>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        jumlahAntrian: 0,
        tujuanAntrian: "", // Menyimpan tujuan yang dipilih
        daftarTujuan: ["Ruang Dokter Umum", "Ruang Dokter Gigi", "Ruang Kebidanan"], // Daftar tujuan antrian
      };
    },
    methods: {
      fetchAntrian() {
        axios.get('/api/antrian')
          .then(response => {
            this.jumlahAntrian = response.data.jumlah_antrian;
          })
          .catch(error => console.error(error));
      },
      ambilAntrian() {
        if (!this.tujuanAntrian) {
          alert("Silakan pilih tujuan antrian terlebih dahulu.");
          return;
        }

        axios.post('/api/antrian/store', { tujuan: this.tujuanAntrian })
          .then(response => {
            if (response.data.message === "Sukses") {
              this.jumlahAntrian = response.data.no_antrian;
              this.tujuanAntrian = ""; // Reset dropdown setelah mengambil antrian
            }
          })
          .catch(error => console.error(error));
      }
    },
    mounted() {
      this.fetchAntrian();
    }
  };
  </script>
