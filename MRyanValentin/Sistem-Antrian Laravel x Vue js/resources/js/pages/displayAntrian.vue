<template>
    <title>Display Antrian</title>
    <div class="display-container" style="margin: 20px;">
      <div class="header">
        {{ currentDateTime }}
      </div>
      <hr class="divider">
      <div class="grid">
        <div class="card" v-for="(tujuan, index) in ['Dokter Umum', 'Dokter Gigi', 'Kebidanan']" :key="index">
          <div class="card-header">Antrian {{ tujuan }}</div>
          <div class="card-body">{{ lastCalled[tujuan] || '-' }}</div>
          <hr>
          <div class="queue-section">
            <h4>Antrian Menunggu</h4>
            <hr>
            <div class="card-section" style="font-size: 50px; font-weight: bold; padding: 20px; text-align: center;">
              {{ waitingQueue[tujuan] || '-' }}
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

  <style scoped>
  /* Mengatur body agar selalu penuh layar
  .body {
      font-family: Arial, sans-serif;
    background-position: center;
    background-repeat: no-repeat;
      background-position: center;
      color: white;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
  } */

  .dispay-container {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 20px;
  }

  .header {
      font-size: 24px;
      font-family: Arial, sans-serif;
      background-color: #eaeaea;
      box-shadow: #00aa9d 0px 5px 15px 0px;
      border-radius: 10px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: end;
      width: 100%;
      padding: 20px;
  }

  .divider {
      border: 3px solid white;
      background-color: white;
      width: 100%;
      margin:20px;
  }

  .grid {
      display: flex;
      justify-content: center;
      align-items: stretch;
      gap: 20px;
      width: 100%;
      flex-wrap: nowrap;
      flex-grow: 1;
  }

  .card {
      background: white;
      color: black;
      flex: 1;
      min-width: 300px;
      max-width: 500px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
  }

  .card-header {
      background: #00aa9d !important;
      color: white;
      padding: 10px;
      font-weight: bold;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
  }

  .card-body {
      font-size: 50px;
      font-weight: bold;
      padding: 20px;
      border: 1px solid #ddd;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
  }

  .queue-section {
      height: 300px;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 10px;
  }

  .vertical-line {
      width: 3px;
      background-color: white;
      height: auto;
  }

  @media (max-width: 768px) {
      .grid {
          flex-direction: column;
          align-items: center;
      }

      .vertical-line {
          display: none;
      }
  }
  </style>


  <script>
import axios from 'axios';

export default {
  data() {
    return {
      currentDateTime: '',
      lastCalled: {
        'Dokter Umum': '-',
        'Dokter Gigi': '-',
        'Kebidanan': '-'
      },
      waitingQueue: {
        'Dokter Umum': '-',
        'Dokter Gigi': '-',
        'Kebidanan': '-'
      }
    };
  },
  methods: {
    updateClock() {
      const now = new Date();
      const options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
      this.currentDateTime = now.toLocaleDateString('id-ID', options) +
        '  Time: ' + now.toLocaleTimeString('id-ID');
    },
    fetchAntrian() {
    axios.get('http://127.0.0.1:8000/api/antrian')
        .then(response => {
            console.log('Data API:', response.data); // Debug

            let lastCalled = { 'Dokter Umum': '-', 'Dokter Gigi': '-', 'Kebidanan': '-' };
            let waitingQueue ={ 'Dokter Umum': '-', 'Dokter Gigi': '-', 'Kebidanan': '-' };

            response.data.forEach(item => {
                const tujuan = this.getTujuan(item.tujuan); // Konversi tujuan

                console.log('Tujuan:', tujuan, 'No Antrian:', item.no_antrian); // Debug

                if (item.status === 1) { // Status 1 = terakhir dipanggil
                    lastCalled[tujuan] = item.no_antrian;
                } else if (waitingQueue[tujuan] === '-') {
                    waitingQueue[tujuan] = item.no_antrian;
                }
            });

            this.lastCalled = lastCalled;
            this.waitingQueue = waitingQueue;
            console.log('Last Called:', this.lastCalled);
            console.log('Waiting Queue:', this.waitingQueue);
        })
        .catch(error => console.error('Error Fetching Antrian:', error));
}

,
getTujuan(namaTujuan) {
    if (namaTujuan.includes('Dokter Umum')) return 'Dokter Umum';
    if (namaTujuan.includes('Dokter Gigi')) return 'Dokter Gigi';
    if (namaTujuan.includes('Kebidanan')) return 'Kebidanan';
    return 'Lainnya';
}

  },
  mounted() {
    this.updateClock();
    setInterval(this.updateClock, 1000);
    this.fetchAntrian();
    setInterval(this.fetchAntrian, 1000);
  }
};

  </script>
