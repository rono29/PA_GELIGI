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

                    <?php if ($this->session->userdata('id_user')): ?>
                        <a href="<?= base_url('masuk/logout') ?>" class="btn-login">Logout</a>
                    <?php endif; ?>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>


        </div>
    </header>

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 style="color: #A94B87;">Hi, <?= $profile->nama ?></h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">

            <div class="card shadow p-4 mb-4" style="border-radius: 20px;">
                <div class="form-container">
                    <h2 class="text-center mb-4" style="color: #333; font-weight: 700;">Form Data Pasien</h2>

                    <form id="patientForm" method="post" action="<?= base_url('profile/simpan') ?>">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" value="<?= isset($profile->nama) ? $profile->nama : '' ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="<?= isset($profile) && isset($profile->email) ? $profile->email : '' ?>" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="noHP" class="form-label">No. HP</label>
                                <input type="text" class="form-control" name="noHP" id="noHP" value="<?= isset($profile->no_hp) ? $profile->no_hp : '' ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenisKelamin" id="jenisKelamin">
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="" <?= (isset($profile->jk) && $profile->jk == 'pria') ? 'selected' : '' ?>>pria</option>
                                    <option value="wanita" <?= (isset($profile->jk) && $profile->jk == 'wanita') ? 'selected' : '' ?>>wanita</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempatLahir" id="tempatLahir" value="<?= isset($profile->tmpt_lahir) ? $profile->tmpt_lahir : '' ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir" value="<?= isset($profile->tgl_lahir) ? $profile->tgl_lahir : '' ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= isset($profile->pekerjaan) ? $profile->pekerjaan : '' ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="statusPernikahan" class="form-label">Status Pernikahan</label>
                                <select class="form-select" name="statusPernikahan" id="statusPernikahan">
                                    <option value="">Pilih status</option>
                                    <option value="Belum Menikah" <?= (isset($profile->status) && $profile->status == 'Belum Menikah') ? 'selected' : '' ?>>Belum Menikah</option>
                                    <option value="Menikah" <?= (isset($profile->status) && $profile->status == 'Menikah') ? 'selected' : '' ?>>Menikah</option>
                                    <option value="Cerai" <?= (isset($profile->status) && $profile->status == 'Cerai') ? 'selected' : '' ?>>Cerai</option>
                                    <option value="Janda/Duda" <?= (isset($profile->status) && $profile->status == 'Janda/Duda') ? 'selected' : '' ?>>Janda/Duda</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= isset($profile->alamat) ? $profile->alamat : '' ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="golonganDarah" class="form-label">Golongan Darah</label>
                                <select class="form-select" name="golonganDarah" id="golonganDarah">
                                    <option value="">Pilih</option>
                                    <option value="A" <?= (isset($profile->goldar) && $profile->goldar == 'A') ? 'selected' : '' ?>>A</option>
                                    <option value="B" <?= (isset($profile->goldar) && $profile->goldar == 'B') ? 'selected' : '' ?>>B</option>
                                    <option value="AB" <?= (isset($profile->goldar) && $profile->goldar == 'AB') ? 'selected' : '' ?>>AB</option>
                                    <option value="O" <?= (isset($profile->goldar) && $profile->goldar == 'O') ? 'selected' : '' ?>>O</option>
                                </select>
                            </div>
                        </div>

                        <div class="section-title">Riwayat Kesehatan</div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="penyakitJantung" class="form-label">Penyakit Jantung</label>
                                <select class="form-select" name="penyakitJantung" id="penyakitJantung">
                                    <option value="">Pilih</option>
                                    <option value="Ya" <?= (isset($profile->jantung) && $profile->jantung == 'Ya') ? 'selected' : '' ?>>Ya</option>
                                    <option value="Tidak" <?= (isset($profile->jantung) && $profile->jantung == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="diabetes" class="form-label">Diabetes</label>
                                <select class="form-select" name="diabetes" id="diabetes">
                                    <option value="">Pilih</option>
                                    <option value="Ya" <?= (isset($profile->diabetes) && $profile->diabetes == 'Ya') ? 'selected' : '' ?>>Ya</option>
                                    <option value="Tidak" <?= (isset($profile->diabetes) && $profile->diabetes == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="haemophilia" class="form-label">Haemophilia</label>
                                <select class="form-select" name="haemophilia" id="haemophilia">
                                    <option value="">Pilih</option>
                                    <option value="Ya" <?= (isset($profile->haemophilia) && $profile->haemophilia == 'Ya') ? 'selected' : '' ?>>Ya</option>
                                    <option value="Tidak" <?= (isset($profile->haemophilia) && $profile->haemophilia == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="hepatitis" class="form-label">Hepatitis</label>
                                <select class="form-select" name="hepatitis" id="hepatitis">
                                    <option value="">Pilih</option>
                                    <option value="Ya" <?= (isset($profile->hepatitis) && $profile->hepatitis == 'Ya') ? 'selected' : '' ?>>Ya</option>
                                    <option value="Tidak" <?= (isset($profile->hepatitis) && $profile->hepatitis == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="alergiObatDetail" class="form-label">Alergi Obat</label>
                                <textarea class="form-control" name="alergiObatDetail" id="alergiObatDetail" rows="2"><?= isset($profile->alergi_obat) ? $profile->alergi_obat : '' ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="alergiMakananDetail" class="form-label">Alergi Makanan</label>
                                <textarea class="form-control" name="alergiMakananDetail" id="alergiMakananDetail" rows="2"><?= isset($profile->alergi_makanan) ? $profile->alergi_makanan : '' ?></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <!-- Tombol Simpan -->
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="bi bi-save me-1"></i> Simpan Data
                                </button>

                                <!-- Tombol Edit -->
                                <button type="button" class="btn btn-outline-secondary btn-sm ms-2">
                                    <i class="bi bi-pencil-square me-1"></i> Edit Profile
                                </button>
                            </div>
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