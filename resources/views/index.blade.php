<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <meta name="description" content="">
  <title>Beranda</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=gcAt4x"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=gcAt4x" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    .custom-gray-btn {
        background-color: #acb3b9 !important; /* Abu-abu */
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

header .image-wrapper img {
    width: 100%; 
    height: 50vh; 
    object-fit: cover; 
    border-radius: 0 !important;
    clip-path: none !important;
    overflow: visible !important;
}

.background-image {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: url('assets/images/4.png') no-repeat center bottom;
    background-size: cover; /* Gambar memenuhi layar tanpa area kosong */
}

.highlight-text {
    color: #FFC107; /* Ubah warna menjadi kuning */
	font-weight: bold; /* Menjaga bold */
}

.item-wrapper {
    border-radius: 0 !important;
    width: 100%;
    max-width: 350px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
	transition: background-color 0.3s, box-shadow 0.3s;
    margin: 15px auto; /* Margin antar kartu lebih konsisten */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    box-sizing: border-box;
    padding: 15px; /* Tambahkan padding untuk memberi ruang */
    background-color: #fff;
	overflow: hidden; /* Hilangkan area putih overflow */
	margin-bottom: -150px; /* Hilangkan margin bawah */
}


.item-img img {
    border-radius: 0 !important;
    max-width: 100%;
    height: auto;
    display: block;
	transition: opacity 0.3s;
}

h5.item-title {
    font-size: 22px; /* Ukuran lebih proporsional */
    margin-top: 10px;
    line-height: 1.3;
}

p.mbr-text {
    font-size: 16px;
    margin-top: 0px;
    line-height: 1.5;
}
.features-image:hover {
    transform: scale(1.03); /* Efek zoom dikit pas hover */
}
.features-image:hover .item-wrapper {
    background-color: rgba(255, 255, 255, 0.9); /* Background putih muncul saat hover */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    z-index: 2;
}
.features-image:hover .item-img img {
    opacity: 0.9; /* Sedikit gelap pas hover, tetap kelihatan */
}
.features-image:hover h5.item-title,
.features-image:hover p.mbr-text {
    color: #111; /* Sedikit lebih gelap pas hover */
}

section.display-7 {
  display: none !important;
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

	<header class="ex-header d-flex align-items-center justify-content-center text-center position-relative" 
    style="height: 100vh; background: linear-gradient(to left, #0052D4, #6FB1FC); overflow: hidden; display: flex; align-items: center; justify-content: center; text-align: center;">
    
    <!-- Bagian Konten -->
    <div class="container position-relative" style="z-index: 2; max-width: 800px; padding-top:8rem;">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="text-wrapper text-white">
                    <h1 style="font-family: Arial, sans-serif;font-size:clamp(2.5rem,5vw,4rem);font-weight:400;margin:0;display:flex;flex-direction:column;align-items:center;
  							   justify-content:center;width:max-content;text-align:center;transform:translateX(-190px);">
						<strong style="font-weight:700; margin-bottom:-40px; ">
							Tinggal&nbsp;Nyaman&nbsp;dan&nbsp;Belajar&nbsp;Maksimal
						</strong><br>
						
						<strong style="font-weight:700;">
							di&nbsp;<span style="color:#FFC107;">BIE+</span>&nbsp;Aja
						</strong>
					</h1>
                    <p style="font-size:clamp(1.1rem,1.8vw,1.5rem); line-height:1.5; margin-top:2.0rem; margin-bottom:5.0rem; text-align:center; max-width:60ch;">   
						senantiasa fokus tanpa khawatir soal tempat tinggal dengan fasilitas yang nyaman dan lingkungan multikultural.
					</p>
                    {{-- <div class="mbr-section-btn mt-3">
                        <a class="btn display-7" href="">Daftar Sekarang</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Gambar Background -->
    <div class="background-image"></div>
</header>
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
<section data-bs-version="5.1" class="features6 start cid-uDrqyC59bu" id="features06-2" style="background: linear-gradient(to left, #0052D4, #6FB1FC);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 d-flex justify-content-center">
			  <div class="mbr-section-head mb-5 text-center">
				<h4 class="mbr-section-title mbr-fonts-style mb-3" style="font-size: 2.5rem; white-space: nowrap;">
				  <strong>Penginapan Nyaman untuk Pengalaman Belajar Terbaik</strong>
				</h4>								
			  </div>
			</div>
		  </div>		  
		<div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/4.png" alt="">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5">
							<strong>Suasana Belajar yang Menyenangkan</strong>
						</h5>
						<p class="mbr-text mbr-fonts-style display-7">
							Lingkungan belajar yang nyaman dengan mentor berpengalaman akan membuat studi Anda lebih menyenangkan.
						</p>
					</div>
				</div>
			</div>
		
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/6.png" alt="">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5">
							<strong>Fasilitas Komprehensif</strong>
						</h5>
						<p class="mbr-text mbr-fonts-style display-7">
							Pembelajaran didukung oleh berbagai fasilitas terbaik yang lengkap untuk meningkatkan pengalaman.
						</p>
					</div>
				</div>
			</div>
		
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/2.png" alt="">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5">
							<strong>Akses dari Mana Saja</strong>
						</h5>
						<p class="mbr-text mbr-fonts-style display-7">
							Pembelajaran yang fleksibel dan dapat diakses dari mana saja, disesuaikan dengan kebutuhan spesifik Anda.
						</p>
					</div>
				</div>
			</div>
		</div>
		
		{{-- <div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/5.png" alt="">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5">
							<strong>Bonus Program Menarik</strong>
						</h5>
						<p class="mbr-text mbr-fonts-style display-7">
							Nikmati berbagai bonus menarik yang dirancang untuk meningkatkan dan mengembangkan keterampilan bahasa Inggris Anda.
						</p>
					</div>
				</div>
			</div>
		
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/4.png" alt="">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5">
							<strong>Suasana Belajar yang Menyenangkan</strong>
						</h5>
						<p class="mbr-text mbr-fonts-style display-7">
							Lingkungan belajar yang nyaman dengan mentor berpengalaman akan membuat studi Anda lebih menyenangkan.
						</p>
					</div>
				</div>
			</div>
		
			<div class="item features-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="item-img">
						<img src="assets/images/6.png" alt="">
					</div>
					<div class="item-content">
						<h5 class="item-title mbr-fonts-style display-5">
							<strong>Fasilitas Komprehensif</strong>
						</h5>
						<p class="mbr-text mbr-fonts-style display-7">
							Pembelajaran didukung oleh berbagai fasilitas terbaik yang lengkap untuk meningkatkan pengalaman.
						</p>
					</div>
				</div>
			</div>
		</div>		 --}}
	</div>
</section>
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
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
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

<div class="row my-0" style="min-height: 110vh; background: linear-gradient(to left, #0052D4, #6FB1FC); margin: 0; padding: 0; box-sizing: border-box;">
    <div class="col-lg-6 col-xl-7">
        <div class="image-container d-flex justify-content-end align-items-center" style="min-height: 100vh;">
            <img class="img-fluid rounded" src="https://biepluskampunginggris.com/frontend/images/promo-musiman/promo_ramadhan.jpg" alt="promo" style="width: 100%; max-width: 750px; margin-right: -10px; margin-left: auto;" />
        </div>
    </div>  

    <div class="col-lg-6 col-xl-5 d-flex flex-column justify-content-center" style="padding: 40px; color: #fff;">
        <span class="text-warning" style=" color:#FFC107 !important; font-size: 5rem; font-weight: bold;">Promo 🎉</span>
        <h2 class="mt-2" style="font-weight: bold; font-size: 2.4rem; line-height: 1.2;">Blissful Ramadhan with BIE+</h2>
        <p style="font-size: 1.1rem; line-height: 1.6; margin-top: 20px;">
            Promo Blissful Ramadhan adalah program spesial yang menawarkan diskon dan penawaran menarik selama bulan Ramadhan. 
            Dapatkan harga diskon untuk berbagai produk dan layanan, serta nikmati penawaran eksklusif, voucher, dan reward untuk pelanggan setia. 
            Program ini memberikan pengalaman berbelanja yang lebih baik dan memberikan nilai tambah kepada pelanggan selama bulan Ramadhan. 
            Jangan lewatkan kesempatan ini untuk menikmati promo spesial dari BIE+!
        </p>
		<button style="background-color: #FFC107; color: #fff; padding: 10px 20px; border: none; border-radius: 25px; font-size: 1.1rem; font-weight: bold; margin: 20px auto; cursor: pointer; width: 200px; display: block; transition: background-color 0.3s;"
        	onmouseover="this.style.backgroundColor='transparent'; this.style.color='#FFC107'; this.style.border='2px solid #FFC107';"
        	onmouseout="this.style.backgroundColor='#FFC107'; this.style.color='#fff'; this.style.border='none';">
    		Daftar Sekarang
		</button>
			
    </div>
</div> --}}


{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <defs>
        <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="50%">
            <stop offset="0%" style="stop-color:#6FB1FC; stop-opacity:1" />
            <stop offset="100%" style="stop-color:#0052D4; stop-opacity:1" />
        </linearGradient>
    </defs>
    <path fill="url(#grad1)" fill-opacity="1"
        d="M0,224L30,218.7C60,213,120,203,180,192C240,181,300,171,360,154.7C420,139,480,117,540,122.7C600,128,660,160,720,176C780,192,840,192,900,186.7C960,181,1020,171,1080,154.7C1140,139,1200,117,1260,122.7C1320,128,1380,160,1410,176L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
    </path>
</svg> --}}

<div class="basic-3" style="text-align: center; padding: 80px 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 style="font-size: 1.8rem; font-weight: bold; color: #0F0F30; line-height: 1.5em; margin-bottom: 40px;">
                    Bergabunglah dengan ratusan pelajar dari berbagai kota dan rasakan pengalaman belajar bahasa Inggris yang menyenangkan dengan kenyamanan menginap di BIE+ Plus – pilihan tepat untuk tempat tinggal selama di Kampung Inggris!
                </h4>
                {{-- <a href="" 
                   style="display: inline-block; padding: 10px 25px; border: 2px solid #0F0F30; border-radius: 25px; font-size: 1.1rem; font-weight: bold; color: #0F0F30; text-decoration: none; transition: all 0.3s; cursor: pointer;">
                    Daftar Sekarang
                </a> --}}
            </div>
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <defs>
        <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="50%">
            <stop offset="0%" style="stop-color:#6FB1FC; stop-opacity:1" />
            <stop offset="100%" style="stop-color:#0052D4; stop-opacity:1" />
        </linearGradient>
    </defs>
    <path fill="url(#grad1)" fill-opacity="1"
        d="M0,32L48,48C96,64,192,96,288,128C384,160,480,192,576,176C672,160,768,96,864,69.3C960,43,1056,53,1152,74.7C1248,96,1344,128,1392,144L1440,160V320H1392C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320H0Z">
    </path>
</svg>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="program-dormitory" role="tabpanel" aria-labelledby="program-dormitory-tab" style="background: linear-gradient(to left, #0052D4, #6FB1FC); padding: 20px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="my-5" style="padding: 20px;">
					<h2 class="text-center" style="color: #172737; font-weight: 700; font-size: 2.5rem;">
						Program Dormitory <span style="color: #f4b400; font-size: 2.5rem;">BIE+</span>
					</h2>
					<p class="text-center" style="color: #161719; margin-top: 30px; font-size: 1.2rem;">
						BIE+ Dormitory menawarkan kenyamanan, fasilitas lengkap, dan lokasi strategis untuk mendukung pengalaman 
						belajar terbaik Anda di Kampung Inggris Pare.
					</p>
				</div>
				
            </div>
        </div>

        <div class="row justify-content-center">
			<!-- Kartu VVIP -->
			<div class="col-12 col-md-4 mb-4">
				<div class="card shadow-lg border-0" style="border-radius: 15px; background-color: white;">
					<img src="assets/images/7.png" alt="BIE+ Camp VVIP" class="card-img-top img-fluid mb-3" style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 320px; object-fit: contain; margin-top: 20px;">
					<div class="card-body text-center">
						<h3 class="fw-bold" style="font-size: 1.6rem; background: linear-gradient(to left, #0052D4, #6FB1FC); -webkit-background-clip: text; color: transparent;">BIE+ Camp (VVIP)</h3>
						<p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">Pilihan premium dengan fasilitas eksklusif untuk kenyamanan maksimal selama Anda belajar di Kampung Inggris Pare.</p>
						<div class="badge text-dark py-2 px-3 rounded-pill fs-6 mb-2" style="background-color: #ff9d00;">✨ Special Promo Availaable 🎉</div>
						<a href="/BIE+VVIPCamp" 
   							class="btn btn-lg px-4 py-2" 
   							style="background: linear-gradient(to left, #0052D4, #6FB1FC); color: white; border-radius: 25px; text-decoration: none; border: none; box-shadow: none;">
   							Lihat Selengkapnya →
							</a>
					</div>
				</div>
			</div>
			<!-- Kartu VIP -->
			<div class="col-12 col-md-4 mb-4">
				<div class="card shadow-lg border-0" style="border-radius: 15px; background-color: white;">
					<img src="assets/images/8.png" alt="BIE+ Camp VIP" class="card-img-top img-fluid mb-3" style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 320px; object-fit: contain; margin-top: 20px;">
					<div class="card-body text-center">
						<h3 class="fw-bold" style="font-size: 1.6rem; background: linear-gradient(to left, #0052D4, #6FB1FC); -webkit-background-clip: text; color: transparent;">BIE+ Camp (VIP)</h3>
						<p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">Pilihan favorit dengan fasilitas modern dan kenyamanan optimal untuk pengalaman belajar yang maksimal.</p>
						<div class="badge text-dark py-2 px-3 rounded-pill fs-6 mb-2" style="background-color: #ff9d00;">✨ Special Promo Availaable 🎉</div>
						<a href="/BIE+VIPCamp" 
   							class="btn btn-lg px-4 py-2" 
   							style="background: linear-gradient(to left, #0052D4, #6FB1FC); color: white; border-radius: 25px; text-decoration: none; border: none; box-shadow: none;">
   							Lihat Selengkapnya →
							</a>
					</div>
				</div>
			</div>
			<!-- Kartu Barack -->
			<div class="col-12 col-md-4 mb-4">
				<div class="card shadow-lg border-0" style="border-radius: 15px; background-color: white;">
					<img src="assets/images/9.png" alt="BIE+ Camp Barack" class="card-img-top img-fluid mb-3" style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 320px; object-fit: contain; margin-top: 20px;">
					<div class="card-body text-center">
						<h3 class="fw-bold" style="font-size: 1.6rem; background: linear-gradient(to left, #0052D4, #6FB1FC); -webkit-background-clip: text; color: transparent;">BIE+ Camp (Barack)</h3>
						<p class="text-muted" style="font-size: 1.1rem; line-height: 1.8;">Pilihan terjangkau dengan fasilitas lengkap dan kenyamanan yang memadai untuk mendukung kegiatan belajar Anda.</p>
						<div class="badge text-dark py-2 px-3 rounded-pill fs-6 mb-2" style="background-color: #ff9d00;">✨ Special Promo Availaable 🎉</div>
						<a href="/BIE+Barack" 
   							class="btn btn-lg px-4 py-2" 
   							style="background: linear-gradient(to left, #0052D4, #6FB1FC); color: white; border-radius: 25px; text-decoration: none; border: none; box-shadow: none;">
   							Lihat Selengkapnya →
							</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="transform: scaleY(-1);">
		<defs>
		  <linearGradient id="grad1" x1="0%" y1="50%" x2="100%" y2="50%">
			<stop offset="0%" style="stop-color:#6FB1FC; stop-opacity:1" />
			<stop offset="100%" style="stop-color:#0052D4; stop-opacity:1" />
		  </linearGradient>
		</defs>
		<path fill="url(#grad1)" fill-opacity="1"
		  d="M0,224L30,186.7C60,149,120,75,180,53.3C240,32,300,64,360,90.7C420,117,480,139,540,133.3C600,128,660,96,720,117.3C780,139,840,213,900,229.3C960,245,1020,203,1080,181.3C1140,160,1200,160,1260,154.7C1320,149,1380,139,1410,133.3L1440,128V0H1410C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0H0Z">
		</path>
	  </svg>
	  
	
<section data-bs-version="5.1" class="footer1 cid-uDrrj7Ftzk" once="footers" id="footer01-4"
	style="background: linear-gradient(to left, #0052D4, #6FB1FC); height: auto; padding-top: 40px; padding-bottom: 40px;">
	
	<footer class="footer">
		<div class="footer-container">
			<!-- Kolom 1 -->
			<div class="footer-column">
				<img src="https://biepluskampunginggris.com/frontend/images/logo/logo_1.png" alt="Logo" class="footer-logo">
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
	
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 0rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">&#8204;</p><a style="z-index:1" href=""> </a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  

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