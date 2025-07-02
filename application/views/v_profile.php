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

    <style>
        .btn-submit {
            background: linear-gradient(135deg, #a94b87 0%, #a94b87 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            transition: transform 0.2s;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            color: white;
            background: linear-gradient(135deg, #d63384 0%, #d63384 100%);
        }

        .btn-edit {
            background: linear-gradient(135deg, #20c997 0%, #20c997 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            transition: transform 0.2s;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            color: white;
            background: linear-gradient(135deg, #198754 0%, #198754 100%);
        }
    </style>

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
                    <a href="<?= base_url('masuk') ?>" class="btn-login">Masuk</a>
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
                <div class="form-container">
                    <h2 class="text-center mb-4" style="color: #333; font-weight: 700;">Form Data Pasien</h2>

                    <form id="patientForm">
                        <!-- Data Pribadi -->
                        <div class="section-title">Data Pribadi</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namaLengkap" value="Amanda" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="amanda@example.com" placeholder="Masukkan email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="noHP" class="form-label">No. HP</label>
                                <input type="tel" class="form-control" id="noHP" value="0812-3456-7890" placeholder="Masukkan nomor HP">
                            </div>
                            <div class="col-md-6">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenisKelamin">
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatLahir" value="Dubai" placeholder="Masukkan tempat lahir">
                            </div>
                            <div class="col-md-6">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggalLahir" value="1995-01-12">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan pekerjaan">
                            </div>
                            <div class="col-md-6">
                                <label for="statusPernikahan" class="form-label">Status Pernikahan</label>
                                <select class="form-select" id="statusPernikahan">
                                    <option value="">Pilih status pernikahan</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Cerai">Cerai</option>
                                    <option value="Janda/Duda">Janda/Duda</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat lengkap">Jl. Senyum Sehat No. 88, Pekanbaru</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="golonganDarah" class="form-label">Golongan Darah</label>
                                <select class="form-select" id="golonganDarah">
                                    <option value="">Pilih golongan darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>

                        <!-- Riwayat Kesehatan -->
                        <div class="section-title">Riwayat Kesehatan</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="penyakitJantung" class="form-label">Penyakit Jantung</label>
                                <select class="form-select" id="penyakitJantung">
                                    <option value="">Pilih opsi</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="diabetes" class="form-label">Diabetes</label>
                                <select class="form-select" id="diabetes">
                                    <option value="">Pilih opsi</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="haemophilia" class="form-label">Haemophilia / Kelainan Darah</label>
                                <select class="form-select" id="haemophilia">
                                    <option value="">Pilih opsi</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="hepatitis" class="form-label">Hepatitis</label>
                                <select class="form-select" id="hepatitis">
                                    <option value="">Pilih opsi</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="alergiObatStatus" class="form-label">Alergi Obat</label>
                                <select class="form-select mb-2" id="alergiObatStatus" onchange="toggleAlergiObatInput()">
                                    <option value="">Pilih opsi</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                                <textarea class="form-control" id="alergiObatDetail" rows="2" placeholder="Sebutkan obat yang menyebabkan alergi" style="display: none;"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="alergiMakananStatus" class="form-label">Alergi Makanan</label>
                                <select class="form-select mb-2" id="alergiMakananStatus" onchange="toggleAlergiMakananInput()">
                                    <option value="">Pilih opsi</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                                <textarea class="form-control" id="alergiMakananDetail" rows="2" placeholder="Sebutkan makanan yang menyebabkan alergi" style="display: none;"></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-submit btn-sm">
                                <i class="fas fa-save me-2"></i>Simpan Data
                            </button>
                            <button type="button" class="btn btn-edit btn-sm ms-3">
                                <i class="fas fa-edit me-2"></i>Edit Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="<?= base_url('riwayat') ?>" class="btn btn-outline-primary" style="border-radius: 25px;">Lihat Riwayat Reservasi</a>
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

    <script>
        //Toggle alergi obat input
        function toggleAlergiObatInput() {
            const status = document.getElementById('alergiObatStatus').value;
            const detail = document.getElementById('alergiObatDetail');

            if (status === 'Ada') {
                detail.style.display = 'block';
                detail.required = true;
            } else {
                detail.style.display = 'none';
                detail.required = false;
                detail.value = '';
            }
        }

        // Toggle alergi makanan input
        function toggleAlergiMakananInput() {
            const status = document.getElementById('alergiMakananStatus').value;
            const detail = document.getElementById('alergiMakananDetail');

            if (status === 'Ada') {
                detail.style.display = 'block';
                detail.required = true;
            } else {
                detail.style.display = 'none';
                detail.required = false;
                detail.value = '';
            }
        }
    </script>

</body>

</html>