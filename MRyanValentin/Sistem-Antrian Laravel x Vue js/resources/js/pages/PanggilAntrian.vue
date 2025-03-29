<template>
    <main class="flex-shrink-0">
      <div class="container pt-4">
        <div class="d-flex flex-column flex-md-row px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
          <div class="d-flex align-items-center me-md-auto">
            <i class="bi-mic-fill text-success me-3 fs-3"></i>
            <h1 class="h5 pt-2">Panggilan Antrian</h1>
          </div>
          <div class="ms-5 ms-md-0 pt-md-3 pb-md-0">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <router-link to="/"><i class="bi-house-fill text-success"></i></router-link>
                </li>
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item" aria-current="page">Antrian</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <div class="table-responsive custom-scroll">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nomor Antrian</th>
                    <th>Status</th>
                    <th>Tujuan</th>
                    <th>Panggil</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="item in antrian" :key="item.id">
                    <td class="text-center">{{ item.no_antrian }}</td>
                    <td>{{ item.status == '1' ? 'Dipanggil' : 'Menunggu' }}</td>
                    <td>{{ item.tujuan || "Tidak Diketahui" }}</td> <!-- Pastikan tujuan tidak undefined -->
                    <td class="text-center">
                      <button v-if="item.status == '0'" class="btn btn-success btn-sm rounded-circle"
                        @click="panggilAntrian(item.id, item.no_antrian, item.tujuan)">
                        <i class="bi-mic-fill"></i>
                      </button>
                      <button v-else class="btn btn-secondary btn-sm rounded-circle" disabled>
                        <i class="bi-mic-fill"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        antrian: []
      };
    },
    mounted() {
      this.fetchAntrian();
      setInterval(this.fetchAntrian, 1000); // Auto-refresh setiap 1 detik
    },
    methods: {
      fetchAntrian() {
        axios.get('http://127.0.0.1:8000/api/antrian')
          .then(response => {
            console.log("Data Antrian:", response.data); // Debugging tujuan
            this.antrian = response.data;
          })
          .catch(error => console.error("Error Fetching Antrian:", error));
      },
      panggilAntrian(id, no_antrian, tujuan) {
        if (!tujuan) {
          console.error(`Tujuan untuk antrian ${no_antrian} tidak ditemukan.`);
          return;
        }

        let audio = new Audio('/tingtung.mp3');
        audio.play();

        setTimeout(() => {
          window.responsiveVoice.speak(
            `Nomor Antrian, ${no_antrian}, menuju, ${tujuan}`,
            "Indonesian Male",
            { rate: 0.9, pitch: 1, volume: 1 }
          );
        }, 2000);

        axios.post(`http://127.0.0.1:8000/api/antrian/update/${id}`)
          .then(() => this.fetchAntrian())
          .catch(error => console.error("Error Updating Antrian:", error));
      }
    }
  };
  </script>

  <style>
  .custom-scroll {
    max-height: 500px;
    overflow-y: auto;
  }
  </style>
