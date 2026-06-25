<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/shop3.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Reservation+Barack</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=gcAt4x"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=gcAt4x" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    .custom-gray-btn {
        background-color: #116bba !important; /* Abu-abu */
        color: white !important; /* Warna teks */
        border-radius: 30px; /* Agar tetap membulat */
        padding: 15px 30px; /* Ukuran padding */
        text-align: center;
        display: inline-block;
        font-weight: bold;
        text-decoration: none;
    }
        
        
    /* Navbar utama */
    .navbar {
    position: fixed;
    top: 10px; /* Beri sedikit jarak dari atas */
    left: 50%;
    transform: translateX(-50%);
    width: 90%; /* Agar lebih responsif */
    max-width: 1300px;
    height: 80px;
    background-color: #cfd8df;
    border-radius: 50px; /* Sudut melengkung */
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan halus */
}

    /* Efek navbar saat scroll */
    .navbar.scrolled {
    background :linear-gradient(to left,#0052D4, #7FAFDE, #6FB1FC) !important;
    top: 30px;
    height: 100px; /* Lebih kecil saat scroll */
    width: 90%; /* Tetap proporsional */
    max-width: 1300px; /* Pastikan tidak full screen */
    border-radius: 50px; /* Sudut tetap melengkung */
}

/* Tambahan agar tetap melengkung di atas & bawah */
.navbar::before,
.navbar::after {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 20px;
    background-color: inherit;
    z-index: -1;
}

/* Lengkungan atas */
.navbar::before {
    top: -20px;
    border-top-left-radius: 100px;
    border-top-right-radius: 100px;
}

/* Lengkungan bawah */
.navbar::after {
    bottom: -20px;
    border-bottom-left-radius: 100px;
    border-bottom-right-radius: 100px;
}

/* Saat navbar di-scroll, tetap mempertahankan lengkungan */
.navbar.scrolled::before,
.navbar.scrolled::after {
    background :linear-gradient(to left, #0052D4, #7FAFDE, #6FB1FC);
}
    /* Dropdown tetap terlihat */
    .dropdown-menu {
        z-index: 9999; /* Pastikan dropdown tampil di atas navbar */
    }

    /* Tombol Login dengan warna kuning */
.btn {
    color: #FFD700; /* Warna teks kuning tua */
    padding: 12px 24px;
    border: 2px solid #FFD700; /* Outline kuning emas */
    border-radius: 8px;
    font-size: 16px;
    text-decoration: none;
    display: inline-block;
    font-weight: bold;
    transition: box-shadow 0.3s ease, transform 0.2s, background 0.3s ease;
    box-shadow: 0px 4px 10px rgba(255, 215, 0, 0.4); /* Bayangan kuning lembut */
    background: transparent;
}

/* Efek hover */
.btn:hover {
    background: #FFD700; /* Warna kuning emas saat hover */
    color: rgb(255, 255, 255); 
    box-shadow: 0px 6px 15px rgba(255, 215, 0, 0.6);
    transform: scale(1.05);
}

/* Hilangkan background & shadow di semua kondisi */
.navbar-nav .nav-link:focus,
.navbar-nav .nav-link:active,
.navbar-nav .nav-link.current-page,
.navbar-nav .show > .nav-link {
    background: transparent !important;
    box-shadow: none !important;
    outline: none !important;
    filter: none !important;
    border: none !important;
}

/* Warna kuning saat di-hover atau aktif */
.navbar-nav .nav-link:hover,
.navbar-nav .nav-link:active,
.navbar-nav .nav-link.current-page {
    color: #FFD700 !important; /* Kuning emas */
}

/* Untuk memastikan tidak ada background atau border di link */
.navbar-nav .nav-item .nav-link {
    background: none !important;
}

.custom-yellow {
    color: #FFC107 !important; /* Kuning khas Bootstrap */
}

    .container {
      max-width: 1260px;
      margin: 50px auto;
      padding: 0 15px;
    }

    .carousel {
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .carousel-images {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }


    .carousel-images img {
        width: 400px;
        height: 400px;
        aspect-ratio: 4 / 3; /* ⬅️ menjaga proporsi */
        margin-right: 20px;
        border-radius: 15px !important;
        transition: transform 0.3s ease;
    }
    .carousel-images img:hover {
    transform: translateY(-5px);
    }

    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 24px;
      z-index: 2;
    }

    .carousel-btn.left {
      left: 10px;
    }

    .carousel-btn.right {
      right: 10px;
    }

    .feature-section {
  display: flex;
  justify-content: center;
  gap: 20px;
  padding: 40px 20px;
  flex-wrap: wrap;
}

.feature-card {
  background-color: #f9f9f9;
  border: 1px solid #e0e0e0;
  border-radius: 10px;
  padding: 30px;
  text-align: center;
  width: 300px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
  margin-bottom: -50px;
}

.feature-card:hover {
  transform: translateY(-5px);
}

.feature-card h4 {
  color: #007bff;
  font-size: 2.0rem;
  font-weight: bold;
  margin-bottom: 15px;
}

.feature-card p {
  color: #666;
  font-size: 1rem;
  margin: 0;
}

.pricing-section {
  text-align: center;
  padding: 40px 20px;
  font-family: 'Segoe UI', sans-serif;
}

.title {
  color: #2563eb;
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.promo-badge {
  display: inline-block;
  background-color: #facc15;
  color: #1f2937;
  padding: 8px 20px;
  border-radius: 999px;
  font-weight: 600;
  font-size: 1rem;
  margin-top: 5px;
}

.pricing-table-container {
  margin: 30px auto;
  max-width: 800px;
}

.pricing-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1rem;
}

.pricing-table th,
.pricing-table td {
  border: 1px solid #e5e7eb; /* <-- Tambahin garis */
  padding: 12px;
  text-align: center;
}

.pricing-table thead th {
  background-color: #cfe2ff;
  font-weight: bold;
}

.pricing-table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.note {
  margin-top: 20px;
  font-style: italic;
  color: #6b7280;
}

.card-custom {
    border: none;
    border-radius: 15px !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 30px;
    text-align: center;
}

.card-header-custom {
    background: linear-gradient(to right, #3f51b5, #9c27b0);
    color: #fff;
    font-weight: bold;
    padding: 15px 20px;
    font-size: 1.25rem;
}

.card-body {
    padding: 25px;
}

.list-group-item {
    border: none;
    padding: 10px 0;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.location-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid #eee;
    font-size: 16px;
}

.location-list li:last-child {
    border-bottom: none;
}

.fas {
    min-width: 20px;
    font-size: 18px;
    color: #555;
}

.button-wrapper {
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

.booking-button {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background-color: #2563eb; /* Warna biru terang */
  color: white;
  font-size: 1.1rem;
  font-weight: 600;
  text-decoration: none;
  padding: 14px 28px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  transition: background-color 0.3s ease;
}

.booking-button i {
  font-size: 1.2rem;
}

.booking-button:hover {
  background-color: #1d4ed8;
}
.footer {
    background-color: transparent;
    padding: 40px 20px 20px;
    font-family: Arial, sans-serif;
    color: #222;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
    gap: 20px;
}

.footer-column {
    flex: 1 1 200px;
    min-width: 220px;
}

.footer-logo {
    width: 320px;
    margin-bottom: 15px;
	margin-left: -60px;
	margin-top: -50px;
}

.footer-text {
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
}

.footer-column h3 {
    margin-bottom: 12px;
    font-size: 18px;
    font-weight: bold;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    text-decoration: none;
    color: #222;
    font-size: 14px;
}

.footer-links a:hover {
    text-decoration: underline;
}

.footer-socials {
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.footer-socials a {
    text-decoration: none;
    color: #222;
    font-size: 14px;
}

.footer-socials a:hover {
    text-decoration: underline;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px; /* Tambah padding kiri dan kanan */
    margin-top: 30px;
    font-size: 18px;
    color: #333;
    max-width: 900px; /* Lebar maksimum dikurangi agar lebih ke tengah */
    margin-left: auto;
    margin-right: auto;
    flex-wrap: wrap;
    gap: 10px;
}

.footer-bottom p {
    margin: 0;
}

.footer-bottom a {
    color: #2f2e2e; /* Hitam */
    text-decoration: none;
}

.footer-bottom a:hover {
    text-decoration: underline;
}

.footer-column.middle-column {
    margin-left: 50px;
}

.footer-socials {
      margin-top: 15px;
    }

    .footer-socials img {
      width: 30px;
      height: 30px;
      margin: 0 8px;
      vertical-align: middle;
      transition: transform 0.3s ease;
    }

    .footer-socials img:hover {
      transform: scale(1.1);
    }


</style>
</head>
<body>

    <section data-bs-version="5.1" class="menu menu5 cid-uDrqjesgQs" once="menu" id="menu05-0">
        <!-- Tambahkan div ini untuk efek lengkung -->
        <div class="navbar-container" id="navbarContainer"></div>
    
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" id="mainNavbar">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="#">
                            <img src="assets/images/logo.png" alt="Logo" style="height: 7rem; margin-top: -15px;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap">
                        <a class="navbar-caption text-black display-4" href="#"></a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white display-4" href="/"><strong>Beranda</strong></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white display-4" href="#" id="programDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                               <strong>Program</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="programDropdown">
                                <li><a class="dropdown-item" href="/BIE+VVIPCamp">BIE+ VVIP Camp</a></li>
                                <li><a class="dropdown-item" href="/BIE+VIPCamp">BIE+ VIP Camp</a></li>
                                <li><a class="dropdown-item" href="/BIE+Barack">BIE+ Barack</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white display-4" href="/produk"><strong>Tentang</strong></a>
                        </li>
                    </ul>
                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn display-4" href="https://wa.me/6281216531948?text=Hai%20tim%20saya%20mau%20tanya%20tentang%20program%20BIE%2B%20Dormitory." target="_blank">
                            <strong>Tanya CS</strong>
                          </a>   
                    </div>
                </div>
            </div>
        </nav>
    </section>

<!-- Header -->
<header class="ex-header d-flex align-items-center justify-content-center text-center" 
        style="height: 70vh; background : linear-gradient(to left, #0052D4, #6FB1FC); ">
    <div class="container" style="max-width: 80%;">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <!-- Judul -->
                <h1 class="fw-bolder text-warning custom-yellow" 
                style="font-size: 7rem; line-height: 1.1; white-space: nowrap; margin-top: 150px;">
                BIE+ Dormitory
                </h1>
                <!-- Deskripsi -->
                <p class="lead text-light fw-bold" 
                   style="font-size: 2.9rem; max-width: 100%; margin: 0 auto; line-height: 1.2; margin-top: 20px; padding-top: 10px;">
                   Barack Camp Pilihan di Kampung Inggris Pare
                </p>
            </div>
        </div>
    </div>
</header>
<!-- end of header -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <defs>
        <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="50%">
            <stop offset="0%" style="stop-color:#6FB1FC; stop-opacity:1" />
            <stop offset="100%" style="stop-color:#0052D4; stop-opacity:1" />
        </linearGradient>
    </defs>
    <path fill="url(#grad1)" fill-opacity="1"
        d="M0,224L30,218.7C60,213,120,203,180,192C240,181,300,171,360,154.7C420,139,480,117,540,122.7C600,128,660,160,720,176C780,192,840,192,900,186.7C960,181,1020,171,1080,154.7C1140,139,1200,117,1260,122.7C1320,128,1380,160,1410,176L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
    </path>
</svg>

<div class="container">

    <!-- Carousel -->
    <div class="carousel" id="carousel">
      <div class="carousel-images" id="carouselImages">
        <img src="https://biepluskampunginggris.com/frontend/images/foto_kamar/tampak-depan.jpg" alt="1">
        <img src="https://biepluskampunginggris.com/frontend/images/foto_kamar/barack-beddings.jpeg" alt="2">
        <img src="https://biepluskampunginggris.com/frontend/images/foto_kamar/lemari.jpg" alt="3">
        <img src="https://biepluskampunginggris.com/frontend/images/foto_kamar/ac.jpg" alt="4">
        <img src="https://biepluskampunginggris.com/frontend/images/foto_kamar/vip-toilet.jpeg" alt="5">
        <img src="https://biepluskampunginggris.com/frontend/images/foto_kamar/shower.jpeg" alt="6">
      </div>
      <button class="carousel-btn left" onclick="prevSlide()">‹</button>
      <button class="carousel-btn right" onclick="nextSlide()">›</button>
    </div>
  
    <!-- Feature Section -->
<div class="feature-section">
    <div class="feature-card">
      <h4>Area Relaksasi</h4>
      <p>Area luas untuk bersantai dan melepas penat</p>
    </div>
    <div class="feature-card">
      <h4>Area Asrama</h4>
      <p>Asrama modern dengan segala fasilitas</p>
    </div>
    <div class="feature-card">
      <h4>Area Belajar</h4>
      <p>Ruang yang tenang dan nyaman untuk belajar</p>
    </div>
  </div>  
  </div>
  
  <div class="pricing-section">
    <h2 class="title">Dormitory Barack</h2>
    <div class="promo-badge">Blissful Ramadhan Promo 🎉</div>
  
    <div class="pricing-table-container">
      <table class="pricing-table">
        <thead>
          <tr>
            <th>Durasi</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Per Hari</td>
            <td>Rp 100.000</td>
          </tr>
          <tr>
            <td>1 Minggu</td>
            <td>Rp 250.000</td>
          </tr>
          <tr>
            <td>2 Minggu</td>
            <td>Rp 350.000</td>
          </tr>
          <tr>
            <td>1 Bulan</td>
            <td>Rp 600.000</td>
          </tr>
          <tr>
            <td>2 Bulan</td>
            <td>Rp 1.200.000</td>
          </tr>
          <tr>
            <td>3 Bulan</td>
            <td>Rp 1.800.000</td>
          </tr>
        </tbody>
      </table>
  
      <p class="note">
        Harga sudah termasuk fasilitas eksklusif untuk tipe Barack selama durasi yang dipilih.
      </p>
    </div>
  </div>
  

    <!-- Section dengan 2 Kolom -->
    <div class="container my-5">
        <div class="row">
            <!-- Fasilitas Dormitory (Kiri) -->
            <div class="col-md-6">
                <div class="card card-custom">
                    <div class="card-header-custom">
                        Fasilitas Kami
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-bottom"><i class="fas fa-wifi me-2"></i> WiFi Berkecepatan Tinggi</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-fan me-2"></i> Pendingin Ruangan</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-bed me-2"></i> Tempat Tidur Tingkat dan Perlengkapan Tempat Tidur</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-venus-mars me-2"></i> Kamar Terpisah untuk Pria dan Wanita</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-shower me-2"></i> Kamar Mandi dengan Shower</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-door-open me-2"></i> Area Umum yang Luas</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-trash-alt me-2"></i> Tempat Sampah</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-table me-2"></i> Lemari</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-chess-board me-2"></i> Keset</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-camera me-2"></i> Kamera CCTV untuk Keamanan Anda</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-ban me-2"></i> Area Terbatas</li>
                            <li class="list-group-item"><i class="fas fa-shield-alt me-2"></i> Keamanan 24 Jam</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Informasi Lokasi (Kanan) -->
            <div class="col-md-6">
                <div class="card card-custom">
                    <div class="card-header-custom">
                        Lokasi Kami
                    </div>
                    <div class="card-body">
                        <ul class="location-list list-unstyled">
                            <li class="list-group-item border-bottom"><i class="fas fa-tree"></i> 1.6km dari Taman Kota</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-bus"></i> 1.4km dari Terminal Pare</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-store"></i> 1.3km dari Pasar Induk Pare</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-hospital"></i> 700m dari Klinik</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-store"></i> 150m dari Wisata Pasar Senja</li>
                            <li class="list-group-item border-bottom"><i class="fas fa-mosque"></i> 60m dari Masjid</li>
                            <li class="list-group-item"><i class="fas fa-utensils"></i> 50m dari Warung Makan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="row my-5 text-center">
        <div class="col-md-12">
            <p>
                Kirim pesan kepada kami di WhatsApp untuk memesan sekarang! Tersedia tarif mingguan dan bulanan.
            </p>
        </div>
    </div>

    <div class="button-wrapper">
        <a href="{{ route('formulirPendaftaran', ['jenis' => 'BIE+ Barack']) }}" class="booking-button">
            <i class="bi bi-journal-bookmark"></i> Booking Camp Sekarang
        </a>
      </div>      

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="50%">
                <stop offset="0%" style="stop-color:#6FB1FC; stop-opacity:1" />
                <stop offset="100%" style="stop-color:#0052D4; stop-opacity:1" />
            </linearGradient>
        </defs>
          <path fill="url(#grad1)" fill-opacity="1"
            d="M0,96L120,128C240,160,360,224,480,197.3C600,171,720,75,840,74.7C960,75,1080,171,1200,197.3C1320,224,1440,160,1440,160L1440,320L0,320Z">
        </path>
    </svg>

    <section data-bs-version="5.1" class="footer1 cid-uDrrj7Ftzk" once="footers" id="footer01-4"
	style="background: linear-gradient(to left, #0052D4, #6FB1FC); height: auto; padding-top: 40px; padding-bottom: 40px;">
	
	<footer class="footer">
		<div class="footer-container">
			<!-- Kolom 1 -->
			<div class="footer-column">
				<img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="footer-logo">
				<p class="footer-text" style="margin-left: -60px;">Bareng ratusan temen sebaya dari kota-kota beda, nikmatin vibe seru belajar bahasa Inggris yang enggak biasa!</p>
			</div>
	
			<!-- Kolom 2 -->
			<div class="footer-column middle-column">
				<h3>Program Kami</h3>
				<ul class="footer-links">
					<li><a href="/BIE+VVIPCamp">BIE+ VVIP Camp</a></li>
					<li><a href="/BIE+VIPCamp">BIE+ VIP Camp</a></li>
					<li><a href="/BIE+Barack">BIE+ Barack Camp</a></li>
				</ul>
			</div>
	
			<!-- Kolom 3 -->
			<div class="footer-column">
				<h3>Tautan Berguna</h3>
				<ul class="footer-links">
					<li><a href="#">Privacy & Policy</a></li>
					<li><a href="#">Terms & Conditions</a></li>
				</ul>
			</div>
	
			<!-- Kolom 4 -->
			<div class="footer-column">
				<h3>Kontak Kami</h3>
				<p class="footer-text">
					81216531948<br>
					Jl. Pancawarna, Tulungrejo, Pare, Kediri, Jawa Timur, 64211<br>
					<strong>bieplus.office@gmail.com</strong>
				</p>
				<div class="footer-socials">
					<a href="https://www.instagram.com/bieplus.kampunginggris" target="_blank">
						<img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram" class="social-icon">
					</a>
					<a href="https://www.tiktok.com/@bieplus.kampunginggris" target="_blank">
						<img src="https://cdn-icons-png.flaticon.com/512/3046/3046121.png" alt="TikTok" class="social-icon">
					</a>
					<a href="#" target="_blank">
						<img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="social-icon">
					</a>
					<a href="#" target="_blank">
						<img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" class="social-icon">
					</a>
				</div>				
			</div>
		</div>
	
		<!-- Copyright -->
		<div class="footer-bottom">
			<p>&copy; 2025 BIE+ Kampung Inggris Pare</p>
			<p>Distributed by <a href="https://themewagon.com/">Themewagon</a></p>
		</div>
	</footer>	
	
    <section class="display-7" style="display: none;"></section>
  
    <script>
const dropdown = document.querySelector('.dropdown');
const dropdownMenu = document.querySelector('.dropdown-menu');

// Tampilkan dropdown saat mouse masuk ke menu utama
dropdown.addEventListener('mouseenter', function() {
    dropdownMenu.style.display = 'block';
});

// Pastikan dropdown tetap terbuka jika mouse berada di dalam dropdown menu
dropdownMenu.addEventListener('mouseenter', function() {
    dropdownMenu.style.display = 'block';
});

// Sembunyikan dropdown saat mouse keluar dari area menu dropdown
dropdown.addEventListener('mouseleave', function() {
    setTimeout(() => {
        if (!dropdownMenu.matches(':hover')) {
            dropdownMenu.style.display = 'none';
        }
    }, 200); // Delay agar tidak langsung hilang
});

// Pastikan tetap terbuka jika masih di dalam menu dropdown
dropdownMenu.addEventListener('mouseleave', function() {
    setTimeout(() => {
        if (!dropdown.matches(':hover')) {
            dropdownMenu.style.display = 'none';
        }
    }, 200);
});

</script>
<script>
    // Efek scroll untuk navbar
window.addEventListener("scroll", function() {
    var navbar = document.getElementById("mainNavbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>

<script>
   const carouselImages = document.getElementById('carouselImages');
  const images = carouselImages.querySelectorAll('img');
  const totalImages = images.length;
  let currentIndex = 0;

  function updateCarousel() {
    const slideWidth = images[0].clientWidth;
    carouselImages.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalImages;
    updateCarousel();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    updateCarousel();
  }

  // responsive fix: update on window resize
  window.addEventListener('resize', updateCarousel);
  </script>
</body>
</html>
