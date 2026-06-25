<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/shop3.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Tentang Kami</title>
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

        /* Animasi hover pada card */
        .card:hover {
            transform: translateY(-8px);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Thumbnail minimalis */
        .card-img-top {
            border-radius: 12px;
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
                Tentang Kami
                </h1>
                <!-- Deskripsi -->
                <p class="lead text-light fw-bold" 
					style="font-size: 3rem; max-width: 100%; margin: 0 auto; line-height: 1.2; margin-top: 20px; padding-top: 10px;">
					Yuk, Kenalan dengan <span class="text-warning custom-yellow">BIE+</span>
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

<div id="details" class="basic-1 py-5" style="margin-bottom: 100px;">
	<div class="container">
	  <div class="row align-items-center">
		
		<!-- Kiri: Logo -->
		<div class="col-12 col-md-6 d-flex justify-content-center mb-4 mb-md-0">
		  <div class="image-container">
			<img class="img-fluid w-100 d-block" src="assets/images/logo.png" alt="Logo BIE+">
		  </div>
		</div>
  
		<!-- Kanan: Teks -->
		<div class="col-12 col-md-6 px-3 px-md-4">
		  <div class="text-container text-md-start text-center">
			<h4 class="fw-bold mb-2" style="color: #1f1f58; font-size: 1.5rem;">Filosofi Logo Brilliant International Education Plus</h4>
			<p class="text-warning custom-yellow mb-4">Kursus Bahasa Inggris Modern</p>
			
			<p class="mb-3" style="max-width: 900px;text-align: justify;line-height: 2;font-size: 1.1rem;">
			  Filosofi logo Brilliant International Education Plus (BIE+) menggabungkan padi yang merunduk dan buku yang terbuka,
			  melambangkan kebijaksanaan, kerendahan hati, dan semangat belajar. Padi yang menguning dan merunduk mengajarkan bahwa semakin
			  tinggi ilmu yang dimiliki, seseorang harus semakin rendah hati. Buku yang terbuka melambangkan semangat belajar yang tak
			  pernah berhenti, mengingatkan kita bahwa ilmu adalah sarana untuk kebaikan bersama, bukan untuk kesombongan.
			</p>
  
			<p style="max-width: 900px;text-align: justify;line-height: 2;font-size: 1.1rem;">
			  Nama "Brilliant International Education Plus" mencerminkan komitmen terhadap pendidikan berkualitas unggul dengan visi global
			  dan standar internasional. BIE+ berfokus pada pengembangan individu secara menyeluruh dengan menawarkan nilai tambah yang
			  inovatif, menjadikannya institusi yang mendukung pertumbuhan, pembelajaran berkelanjutan, dan kontribusi positif bagi
			  masyarakat.
			</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  

<div class="ex-basic-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<h2 class="mb-4 text-center fw-bold">
					Sejarah Singkat <span class="text-warning custom-yellow">BIE+</span>
				  </h2>
				
				  <!-- Gambar -->
				  <div class="text-center mb-5">
					<img 
					  class="img-fluid" 
					  src="https://biepluskampunginggris.com/frontend/images/foto-manajemen/foto-manajemen-cropped.jpeg"
					  alt="manajemen"
					  style="max-width: 100%; height: auto;"
					>
				  </div>
				
				  <!-- Paragraf -->
				  <p class="mx-auto mb-5 px-3" style="max-width: 900px;text-align: justify;line-height: 2;font-size: 1.1rem;">
					PT. Mutiara Otamma Indonesia (PT. MOTI) adalah perusahaan yang mengkhususkan diri dalam
					Pelatihan dan Pengembangan SDM, dengan fokus utama pada merek "Brilliant Plus". Kami memberikan
					pelatihan yang penting bagi karyawan, siswa, dan mahasiswa untuk meningkatkan kinerja dan
					kompetensi, terutama dalam Bahasa Inggris dan pengembangan SDM lainnya. Pelatihan dilakukan
					secara langsung dengan materi yang disesuaikan dengan fungsi tugas masing-masing, untuk
					menyelaraskan kompetensi dengan kebutuhan praktis. Dengan desain pelatihan yang terencana dan
					fokus pada "Brilliant Plus", PT. MOTI menjadi pilihan utama untuk pengembangan karyawan dan
					siswa.
				  </p>

				<div class="d-flex justify-content-center align-items-center gap-5 text-center mb-5">
					<div>
						<img class="img-fluid rounded-circle mb-2" src="https://biepluskampunginggris.com/frontend/images/foto-manajemen/ceo.jpeg" alt="ceo" />
						<p style="margin-bottom: 4px; font-weight: 500; color: #444;">Direktur Utama</p>
    					<h6 style="font-weight: bold; color: #1d1b4f;">Mutiara Nur Ramadhani</h6>
					</div>
					<div>
						<img class="img-fluid rounded-circle mb-2" src="https://biepluskampunginggris.com/frontend/images/foto-manajemen/Direktur_PT_MOTI_res.jpg"
							alt="direktur" />
						    <p style="margin-bottom: 4px; font-weight: 500; color: #444;">Direktur</p>
    						<h6 style="font-weight: bold; color: #1d1b4f;">Srie Soeputro Jowo<br>(KPP. Cristian Sabilal Pussung Ciptonagoro)</h6>

					</div>
					<div>
						<img class="img-fluid rounded-circle mb-2" src="https://biepluskampunginggris.com/frontend/images/foto-manajemen/Direktur_Operasional_res.jpg"
							alt="direktur-operasional" />
							<p style="margin-bottom: 4px; font-weight: 500; color: #444;">Direktur Operasional</p>
							<h6 style="font-weight: bold; color: #1d1b4f;">Wenang Joko Pitono</h6>
					</div>
				</div>

				<div class="p-4 mb-5" style="background-color: #f8f8f8; border-radius: 8px;">
					<h4 style="font-weight: 700; color: #1d1b4f;">Sambutan Direktur Utama</h4>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Assalamu'alaikum warahmatullahi wabarakatuh, Salam sejahtera bagi kita semua,
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Puji dan syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas segala rahmat dan karunia-Nya, sehingga kita dapat
					  berkumpul pada hari yang berbahagia ini, PT. MOTI adalah perusahaan yang bergerak di bidang pendidikan dan pelatihan SDM,
					  khususnya pengajaran bahasa Asing dan pengembangan SDM.
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Perusahaan ini didirikan dengan visi menjadi pusat pembelajaran bahasa Asing dan pengembangan SDM yang inovatif, berkualitas,
					  dan relevan dengan kebutuhan zaman. Kami berkomitmen untuk menyediakan program-program pelatihan yang dirancang khusus untuk
					  berbagai kalangan, mulai dari pelajar, profesional, hingga masyarakat umum yang ingin meningkatkan kemampuan berbahasa Asing
					  mereka. Dengan pendekatan yang interaktif dan teknologi terbaru, kami yakin dapat memberikan pengalaman belajar yang
					  menyenangkan dan efektif.
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Kesuksesan perusahaan ini tentu tidak akan terwujud tanpa dukungan dari berbagai pihak. Oleh karena itu, izinkan saya
					  menyampaikan rasa terima kasih yang sebesar-besarnya kepada seluruh pemegang saham atas kepercayaan dan dukungannya, kepada
					  para mitra atas kolaborasi yang luar biasa, serta kepada seluruh tim yang telah bekerja keras mewujudkan visi ini.
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Kami percaya bahwa langkah ini hanyalah awal dari perjalanan panjang yang penuh potensi. Ke depan, kami bertekad untuk terus
					  berinovasi, memperluas jaringan, dan memberikan kontribusi nyata bagi peningkatan kompetensi sumber daya manusia di Indonesia,
					  khususnya dalam penguasaan bahasa Asing.
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Semoga perusahaan ini dapat membawa manfaat yang luas, tidak hanya bagi para peserta didik, tetapi juga bagi masyarakat,
					  bangsa, dan negara. Terima kasih atas perhatian dan kami senantiasa memohon dukungannya.
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Wassalamu'alaikum warahmatullahi wabarakatuh,
					</p>
					<p style="text-align: justify; color: #444; line-height: 2;font-size: 1.1rem;">
					  Salam sejahtera,
					</p>
					<p class="fw-bold" style="color: #1d1b4f; line-height: 2;font-size: 1.1rem;">
					  Mutiara Nur Ramadhani <br>
					  Direktur Utama PT. MOTI
					</p>
				  </div>
				  
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div>
    
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block; margin-bottom: -1px;">
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

		<!-- visi -->
		<div id="details" class="basic-1 bg-gray" style="height: 40vh; background : linear-gradient(to left, #0052D4, #6FB1FC); ">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h4>Visi</h4>
							<p style="text-align: justify; line-height: 2;font-size: 1.1rem;">
								Membangun Lembaga Bahasa dan Pengembangan SDM unggulan yang terkemuka dalam pengajaran,
								pembelajaran dan pelayanan Bahasa, dilengkapi sarana dan prasarana premium dengan wisata
								budaya yang terkenal di Indonesia pada tahun 2027
							</p>
						</div> <!-- end of text-container -->
					</div> <!-- end of col -->
	
					<div class="col-lg-6">
						<div class="image-container">
							<img class="img-fluid rounded" src="https://biepluskampunginggris.com/frontend/images/about/1.jpg" alt="alternative">
						</div> <!-- end of image-container -->
					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of basic-1 -->
		<!-- end of visi -->
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block; margin-bottom: -1px; transform: scaleY(-1);">
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
		
		<!-- misi -->
		<div id="details" class="basic-1" style="margin-bottom: 300px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="image-container ms-0 me-5">
							<img class="img-fluid rounded" src="https://biepluskampunginggris.com/frontend/images/about/2.jpg" alt="alternative">
						</div> <!-- end of image-container -->
					</div> <!-- end of col -->
	
					<div class="col-lg-6">
						<div class="text-container">
							<h4>Misi</h4>
							<ul>
								<li style="text-align: justify; line-height: 2;font-size: 1.1rem;">
									Menyelenggarakan Lembaga bahasa yang unggul dan tersertifikasi secara Nasional dan
									Internasional.
								</li>
								<li style="text-align: justify; line-height: 2;font-size: 1.1rem;">
									Melakukan Pelatihan dan Pengembangan SDM berbasis bahasa asing yang memenuhi kebutuhan
									pasar tenaga kerja di Indonesia.
								</li>
								<li style="text-align: justify; line-height: 2;font-size: 1.1rem;">
									Menyediakan sarana dan prasarana lembaga bahasa dan kos-kosan premium, sebagai tempat
									share value.
								</li>
								<li style="text-align: justify; line-height: 2;font-size: 1.1rem;">
									Digital Leader menuju Transformasi Edukasi.
								</li>
							</ul>
						</div> <!-- end of text-container -->
					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of basic-1 -->
		<!-- end of misi -->
	
		<section style="text-align: center; padding: 40px 0;">
			<h2 style="font-weight: bold; font-size: 2em; margin-bottom: 80px;">Lokasi Kami</h2>
			<div style="display: flex; justify-content: center;">
				<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.081915023715!2d112.1874225!3d-7.7580559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785db5d1b27adb%3A0xa8f77ed278eedc6!2sBrilliant%20English%20Course%20Kampung%20Inggris%20Pare!5e0!3m2!1sen!2sid!4v1714939931001!5m2!1sen!2sid" 
					style="width: 80%; max-width: 1000px; height: 800px; border:0; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>
		</section>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="display: block; margin-bottom: -1px;">
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
</body>
</html>
