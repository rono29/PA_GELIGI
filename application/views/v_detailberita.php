<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Detail Artikel - Geligi Dental Care</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url('depan/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('depan/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('depan/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('depan/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('depan/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('depan/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('depan/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url('depan/css/main.css') ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="solid-nav">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="<?= base_url('home') ?>" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?= base_url('depan/img/logodental.png') ?>" alt="">
                <!-- <h1 class="sitename">Geligi Dental Care</h1> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= base_url('home') ?>">Beranda</a></li>
                    <li><a href="<?= base_url('home/#about') ?>">Tentang Kami</a></li>
                    <li><a href="<?= base_url('home/#services') ?>">Layanan</a></li>
                    <li><a href="<?= base_url('jadwaldokter') ?>">Jadwal Dokter</a></li>
                    <li><a href="<?= base_url('home/#portfolio') ?>">Artikel</a></li>
                    <li><a href="<?= base_url('home/#contact') ?>">Kontak</a></li>
                    <li><a href="<?= base_url('faq') ?>">FAQ</a></li>
                    <?php if ($this->session->userdata('id_user')): ?>
                        <a href="<?= base_url('profile') ?>" class="btn-login">Profil</a>
                    <?php else: ?>
                        <a href="<?= base_url('masuk') ?>" class="btn-login">Masuk</a>
                    <?php endif; ?>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <!-- Faq Section -->
    <section class="faq section light-background">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Judul dan Tanggal -->
                    <h1 class="fw-bold mb-3" style="color:#A94B87;">Cara Menjaga Kebersihan Gigi Anak Sejak Dini</h1>
                    <p class="text-muted mb-4">Dipublikasikan pada 01 Juli 2025</p>

                    <!-- Gambar Artikel -->
                    <div class="mb-4 text-center">
                        <img src="<?= base_url('depan/img/portfolio/berita-1.jpeg') ?>"
                            class="img-fluid rounded shadow-sm"
                            alt="Gigi Anak"
                            style="max-width: 400px; height: auto;">
                    </div>

                    <!-- Konten Artikel -->
                    <div class="article-content fs-6">
                        <p>Menjaga kebersihan gigi anak sejak usia dini merupakan langkah penting untuk mencegah berbagai masalah gigi seperti gigi berlubang dan gusi bengkak. Anak-anak yang diajarkan untuk merawat giginya dengan benar akan tumbuh menjadi pribadi yang sadar akan pentingnya kesehatan mulut.</p>

                        <h5 class="mt-4">Mengapa Perlu Merawat Gigi Sejak Dini?</h5>
                        <p>Kesehatan gigi yang baik di masa kecil membantu perkembangan bicara, nutrisi, serta kepercayaan diri anak. Gigi susu yang sehat juga menjadi penuntun bagi pertumbuhan gigi permanen.</p>

                        <h5 class="mt-4">Tips Menjaga Kebersihan Gigi Anak</h5>
                        <ul>
                            <li>Menyikat gigi dua kali sehari dengan pasta gigi berfluoride.</li>
                            <li>Menghindari konsumsi makanan dan minuman manis berlebihan.</li>
                            <li>Memperkenalkan anak pada kunjungan rutin ke dokter gigi sejak usia 1 tahun.</li>
                            <li>Menggunakan sikat gigi khusus anak dan teknik menyikat yang lembut.</li>
                        </ul>

                        <h5 class="mt-4">Kapan Harus Membawa Anak ke Dokter Gigi?</h5>
                        <p>Disarankan membawa anak ke dokter gigi pertama kali sebelum usia 1 tahun, atau saat gigi pertamanya tumbuh. Selanjutnya, kontrol rutin setiap 6 bulan sekali dapat membantu mendeteksi masalah lebih awal.</p>

                        <p>Dengan membiasakan kebiasaan baik sejak dini, anak akan tumbuh dengan senyum sehat dan percaya diri. Jangan ragu untuk berkonsultasi dengan dokter gigi kami untuk mendapatkan panduan yang tepat.</p>
                    </div>

                    <!-- Tombol Kembali -->
                    <div class="mt-5">
                        <a href="<?= base_url('home#portfolio') ?>" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Kembali ke Artikel</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <footer id="footer" class="footer purple-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Geligi</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p class="mt-3"><strong>Operasional Klinik</strong></p>
                        <p>Senin - Jumat</p>
                        <p>09.00 - 21.00 WIB</p>
                        <p>Jl. Sembilang, Rumbai</p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-whatsapp"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Tautan Penting</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#portofolio">Artikel</a></li>
                        <li><a href="#contact">Hubungi Kami</a></li>
                        <li><a href="<?= base_url('faq') ?>">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">

                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter text-center text-lg-start">

                    <!-- Logo -->
                    <a href="#hero" class="d-inline-flex align-items-center mb-3">
                        <img src="<?= base_url('depan/img/logodental.png') ?>" alt="Logo Dental" style="max-width: 200px; height: auto;">
                    </a>

                    <!-- Kontak Email -->
                    <p class="mt-3 mb-0" style="font-size: 14px; color: #f8f9fa;">
                        <strong>Email:</strong>
                        <a href="mailto:geligidentalcare@gmail.com" class="text-decoration-none text-light ms-1">
                            geligidentalcare@gmail.com
                        </a>
                    </p>

                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Geligi</strong> <span>All Rights Reserved</span></p>
        </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('depan/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('depan/vendor/swiper/swiper-bundle.min.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('depan/js/main.js') ?>"></script>

</body>

</html>