!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Aplikasi Perhitungan Diskon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background: linear-gradient(to right, #f6d365, #fda085); /* Warna pastel cerah */
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .marquee-top {
      position: absolute;
      top: 0;
      width: 100%;
      background-color: #fff3cd;
      color: #856404;
      font-weight: bold;
      padding: 8px 0;
      font-size: 16px;
      border-bottom: 1px solid #ffc107;
      text-shadow: none;
    }

    .card {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      max-width: 420px;
      width: 100%;
      color: #333;
      text-align: center;
    }

    .card h4 {
      font-weight: 600;
      color: #333;
    }

    .logo-container img {
      width: 85px;
      height: auto;
      margin: 0 10px;
    }

    .form-label {
      color: #333;
      font-weight: 500;
    }

    .form-control {
      border-radius: 10px;
      border: 1px solid #ccc;
    }

    .btn-primary {
      background-color: #28a745;
      border: none;
    }

    .btn-danger {
      background-color: #dc3545;
      border: none;
    }

    .btn:hover {
      opacity: 0.9;
    }

    #hasil {
      animation: fadeIn 0.5s ease-in-out;
      color: #155724;
      background-color: #d4edda;
      border: 1px solid #c3e6cb;
    }

    .footer {
      position: absolute;
      bottom: 10px;
      width: 100%;
      text-align: center;
      color: #444;
      font-size: 14px;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <!-- Teks Berjalan -->
  <div class="marquee-top">
    <marquee>Aplikasi Perhitungan Diskon | XII RPL A - SMK Negeri 2 Wajo | Meylani Widya Sari</marquee>
  </div>

  <div class="card">
    <div class="logo-container d-flex justify-content-center align-items-center mb-3">
      <img src="logo smk.png" alt="Logo SMK">
      <img src="logo rpl.png" alt="Logo RPL">
    </div>
    <h4>Aplikasi Perhitungan Diskon</h4>

    <form id="diskonForm">
      <div class="mb-3 text-start">
        <label class="form-label">Harga Barang (Rp)</label>
        <input type="number" id="harga" class="form-control" step="0.01" placeholder="Masukkan harga barang" min="0" required>
      </div>
      <div class="mb-3 text-start">
        <label class="form-label">Diskon (%)</label>
        <input type="number" id="diskon" class="form-control" step="0.01" placeholder="Masukkan diskon (0-100)" min="0" max="100" required>
      </div>
      <button type="button" class="btn btn-primary w-100 mt-2" onclick="hitungDiskon()">Hitung</button>
      <button type="button" class="btn btn-danger w-100 mt-2" onclick="hapusHasil()">Hapus</button>
    </form>

    <div id="hasil" class="alert mt-3 d-none text-start"></div>
  </div>

  <p class="footer">&copy; UKK RPL 2025 | Meylani Widya Sari| XII RPL A | SMK Negeri 2 Wajo</p>

  <script>
    function hitungDiskon() {
      let harga = parseFloat(document.getElementById("harga").value);
      let diskon = parseFloat(document.getElementById("diskon").value);

      if (isNaN(harga) || harga <= 0) {
        alert("Masukkan harga yang valid!");
        return;
      }

      if (isNaN(diskon) || diskon < 0 || diskon > 100) {
        alert("Diskon harus di antara 0 - 100%");
        return;
      }

      let nilaiDiskon = harga * (diskon / 100);
      let totalHarga = harga - nilaiDiskon;

      document.getElementById("hasil").innerHTML = `
        <p>Harga Barang: Rp <b>${harga.toLocaleString("id-ID", { minimumFractionDigits: 2 })}</b></p>
        <p>Diskon ${diskon}%: Rp <b>${nilaiDiskon.toLocaleString("id-ID", { minimumFractionDigits: 2 })}</b></p>
        <p>Total Harga: Rp <b>${totalHarga.toLocaleString("id-ID", { minimumFractionDigits: 2 })}</b></p>
      `;
      document.getElementById("hasil").classList.remove("d-none");
    }

    function hapusHasil() {
      document.getElementById("diskonForm").reset();
      document.getElementById("hasil").innerHTML = "";
      document.getElementById("hasil").classList.add("d-none");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
