<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Project Lokal</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
      min-height: 100vh;
      margin: 0;
      position: relative;
    }
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.3);
      z-index: -1;
    }
    .card, .list-group-item {
      background-color: rgba(255,255,255,0.9);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    .list-group-item:hover {
      background-color: rgba(255,255,255,1);
      font-weight: bold;
    }
    h1 {
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">📂 Direktori Lokal</h1>

    <ul class="list-group mb-5">
      <li class="list-group-item">
        <i class="fas fa-folder"></i> <a href="gis_lokasi_kost_ci4/">GIS Lokasi Kost CI4</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-folder"></i> <a href="perpustakaan_inf25/">Perpustakaan INF25</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-folder"></i> <a href="praktikum/">Praktikum</a>
      </li>
      <li class="list-group-item">
        <i class="fas fa-file-code"></i> <a href="test.php">test.php</a>
      </li>
    </ul>

    <div class="card-deck">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">GIS Lokasi Kost CI4</h5>
          <p class="card-text">Aplikasi pemetaan kost berbasis CodeIgniter 4.</p>
          <a href="gis_lokasi_kost_ci4/" class="btn btn-primary">Buka</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Perpustakaan INF25</h5>
          <p class="card-text">Sistem manajemen perpustakaan untuk INF25.</p>
          <a href="perpustakaan_inf25/" class="btn btn-primary">Buka</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Praktikum</h5>
          <p class="card-text">Folder berisi materi dan tugas praktikum.</p>
          <a href="praktikum/" class="btn btn-primary">Buka</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Test Script</h5>
          <p class="card-text">File PHP untuk uji coba server.</p>
          <a href="test.php" class="btn btn-primary">Jalankan</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
