<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/shop3.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Formulir Pendaftaran</title>
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
    #testimoni .testimonial-item p {
            font-style: italic;
        }

        #testimoni .testimonial-item h6 {
            color: #555;
        }

        #testimoni iframe {
            border-radius: 1rem;
        }

        /* Grid responsive dengan col-3 */
        @media (min-width: 992px) {
            .row-cols-lg-4>* {
                flex: 0 0 auto;
                width: 25%;
            }
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

:root{
  --primary:#1f2352;        /* ungu tua judul */
  --accent:#ffc107;         /* kuning tautan */
  --border:#e0e5f4;
}

body{font-family:'Poppins',sans-serif;background:#fafafa;margin:0;}

.biodata-container{
  max-width:820px;
  margin:2rem auto;
  padding:2rem 2.5rem;
  background:#fff;
  border-radius:12px;
  box-shadow:0 3px 8px rgba(0,0,0,.05);
}

/* judul besar */
.form-title{
  text-align:center;
  color:#fff;
  font-weight:700;
  margin:0 0 1.5rem;
  font-size:clamp(1.8rem,3vw,2.2rem);
  background :#6FB1FC;
  border-radius: 5px;
}

/* sub‑judul */
.section-sub{
  text-align:center;
  color:var(--primary);
  font-weight:700;
  margin:2rem 0 2.5rem;
  font-size:clamp(1.3rem,2.2vw,1.6rem);
}

/* garis tipis di bawah judul utama */
hr{
  border:none;
  height:1px;
  background:var(--border);
  margin-bottom:2rem;
 
}

/* setiap grup field */
.form-group{
  margin-bottom:1.9rem;
}

.form-group label{
  font-weight:600;
  color:var(--primary);
  margin-bottom:.4rem;
  display:block;
}

/* input, select style */
input[type=text],
input[type=email],
input[type=tel],
input[type=date],
select{
  width:100%;
  padding:.9rem 1.1rem;
  font-size:1rem;
  border:2px solid var(--border);
  border-radius:6px;
  outline:none;
  transition:border-color .2s, box-shadow .2s;
}

input:focus,
select:focus{
  border-color:#8fb2ff;
  box-shadow:0 0 0 3px rgba(56,119,255,.15);
}

/* checkbox */
.form-check{
  display:flex;
  gap:.6rem;
  align-items:flex-start;
  margin:2rem 0 2.3rem;
}

.form-check input{
  margin-top:.3rem;
}

/* link */
.link-warning{color:var(--accent);text-decoration:none;font-weight:600;}
.link-warning:hover{text-decoration:underline;}

/* tombol submit */
.btn-submit{
  width:100%;
  padding:1rem;
  font-size:1.05rem;
  font-weight:600;
  color:#fff;
  background:#6FB1FC;
  border:none;
  border-radius:8px;
  cursor:pointer;
  transition:background .25s;
}
.btn-submit:hover{background:#0052D4;}

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
                style="font-size: 6rem; line-height: 1.1; white-space: nowrap; margin-top: 150px; margin-left: -160px;">
                BIE+ Pendaftaran Dormitory
                </h1>
                <!-- Deskripsi -->
                <p class="lead text-light fw-bold" 
                   style="font-size: 3rem; max-width: 100%; margin: 0 auto; line-height: 1.2; margin-top: 20px; padding-top: 10px;">
                   Yuk, Isi Semua Kelengkapan Formulir Penyewaan Kamar Anda!
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

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form class="biodata-form" action="{{ route('formulirPendaftaran.store') }}" method="POST">
    @csrf

    <!-- Hidden input untuk menyimpan jenis camp -->
    <input type="hidden" name="jenis_program" value="{{ $jenis ?? 'Tidak Diketahui' }}">

    <div class="biodata-container">
        <h2 class="form-title list-group-item border-bottom">Formulir Pendaftaran</h2>
        <hr>
        <h4 class="section-sub">Biodata Diri</h4>

        <div class="form-group">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" id="namaLengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
        </div>

        <div class="form-group">
            <label for="alamatEmail">Alamat Email</label>
            <input type="email" id="alamatEmail" name="email" placeholder="example@gmail.com" required>
        </div>

        <div class="form-group">
            <label for="nomorHP">Nomor HP (WA)</label>
            <input type="tel" id="nomorHP" name="no_hp" placeholder="0812XXXXXXXX" required>
        </div>

        <div class="form-group">
            <label for="asalkota">Asal Kota</label>
            <input type="text" id="asalkota" name="asal_kota" placeholder="Asal Kota" required>
        </div>

        <h4 class="section-sub">Lain‑lain</h4>

        <div class="form-group">
            <label for="periodeMasuk">Periode Masuk</label>
            <input type="date" id="periodeMasuk" name="periode_masuk" required>
        </div>

        <div class="form-group">
            <label for="lamaMenginap">Lama Menginap</label>
            <select id="lamaMenginap" name="lama_menginap" required>
                <option value="1">1 Hari</option>
                <option value="7">1 Minggu</option>
                <option value="14">2 Minggu</option>
                <option value="30">1 Bulan</option>
                <option value="60">2 Bulan</option>
                <option value="90">3 Bulan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tipeBayar">Tipe Pembayaran</label>
            <select id="tipeBayar" name="tipe_pembayaran" required>
                <option value="dp">Down Payment (DP)</option>
                <option value="full">Full Payment</option>
            </select>
        </div>

        <div class="form-check">
            <input type="checkbox" id="agreement" required>
            <label for="agreement">
                Saya menyetujui <a href="#" class="link-warning">tata tertib dan ketentuan</a> yang berlaku
            </label>
        </div>

        <button type="submit" class="btn-submit">Daftar Sekarang</button>
    </div>
</form>
  </div>
  


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="transform: rotate(180deg); display: block; width: 100%;">
	<defs>
	  <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="50%">
		<stop offset="0%" style="stop-color:#0052D4; stop-opacity:1" />
		<stop offset="100%" style="stop-color:#6FB1FC; stop-opacity:1" />
	  </linearGradient>
	</defs>
	<path fill="url(#grad1)" fill-opacity="1"
	  d="M0,224L30,218.7C60,213,120,203,180,192C240,181,300,171,360,154.7C420,139,480,117,540,122.7C600,128,660,160,720,176C780,192,840,192,900,186.7C960,181,1020,171,1080,154.7C1140,139,1200,117,1260,122.7C1320,128,1380,160,1410,176L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
	</path>
  </svg>
</div>

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
</body>
</html>
