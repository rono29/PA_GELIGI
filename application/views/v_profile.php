<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Profile - Geligi Dental Care</title>
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
                    <li><a href="" class="">FAQ</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 style="color: #A94B87;">Hi, Amanda</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <div class="card shadow p-4 mb-4" style="border-radius: 20px;">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="<?= base_url('depan/img/default-profile.png') ?>" class="img-fluid rounded-circle mb-3" style="width: 150px;" alt="Foto Profil">
                        <h5 class="fw-bold">Amanda</h5>
                        <p class="text-muted">Pasien</p>
                    </div>

                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td>: Amanda</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>: amanda@example.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">No. HP</th>
                                    <td>: 0812-3456-7890</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>: Jl. Senyum Sehat No. 88, Pekanbaru</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td>: Dubai</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td>: 12 Januari 1995</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td>: -</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pekerjaan</th>
                                    <td>: -</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Pernikahan</th>
                                    <td>: -</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="<?= base_url('akun/edit') ?>" class="btn btn-primary me-2" style="border-radius: 25px;">Edit Profil</a>
                            <a class="btn btn-success me-2" style="border-radius: 25px;">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="<?= base_url('riwayat') ?>" class="btn btn-outline-secondary" style="border-radius: 25px;">Lihat Riwayat Reservasi</a>
            </div>

        </div>


    </section><!-- /Faq Section -->

    <footer id="footer" class="footer purple-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">BizPage</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">BizPage</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
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