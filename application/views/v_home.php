<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Geligi Dental Care</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: BizPage
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
  <!-- Modal Notifikasi Profil -->
  <div class="modal fade" id="profileNotificationModal" tabindex="-1" aria-labelledby="profileNotificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-4 shadow p-4">

        <!-- Modal Body -->
        <div class="modal-body text-center">
          <div class="mb-3">
            <i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 4rem;"></i>
          </div>
          <h5 class="fw-bold mb-2">Lengkapi Profil Anda</h5>
          <p class="text-muted mb-0">
            Anda belum melengkapi data profil.<br>
            Silakan lengkapi terlebih dahulu untuk dapat menggunakan layanan kami sepenuhnya.
          </p>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer border-0 justify-content-center mt-3">
          <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">
            Nanti Saja
          </button>
          <a href="<?= base_url('profile') ?>" class="btn btn-primary rounded-pill px-4">
            Lengkapi Sekarang
          </a>
        </div>

      </div>
    </div>
  </div>


  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url('depan/img/logodental.png') ?>" alt="">
        <!-- <h1 class="sitename">Geligi Dental Care</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="<?= base_url('jadwaldokter') ?>">Jadwal Dokter</a></li>
          <li><a href="#portfolio">Artikel</a></li>
          <li><a href="#contact">Kontak</a></li>
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

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section beranda-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-1.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>GELIGI DENTAL CARE</h2>
            <p>Solusi Tepat untuk Kesehatan Gigi Keluarga Anda</p>
            <a href="<?= base_url('jadwaldokter') ?>" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-2.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Perawatan Gigi Menyeluruh untuk Segala Usia</h2>
            <p>Dari anak-anak hingga lansia, kami hadir dengan layanan profesional dan ramah untuk menjaga senyum sehat Anda sekeluarga.</p>
            <a href="<?= base_url('jadwaldokter') ?>" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-3.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Teknologi Modern, Hasil Maksimal</h2>
            <p>Kami menggunakan peralatan dan teknik terbaru untuk memastikan perawatan gigi Anda aman, nyaman, dan efektif.</p>
            <a href="<?= base_url('jadwaldokter') ?>" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-4.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Konsultasi Mudah & Cepat</h2>
            <p>Langkah pertama menuju senyum sehat dimulai dari reservasi yang cepat dan mudah — cukup klik dan pilih jadwal Anda!</p>
            <a href="<?= base_url('jadwaldokter') ?>" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-5.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Klinik Gigi yang Peduli dan Terpercaya</h2>
            <p>Dipercaya oleh ratusan pasien setiap bulan, GELIGI Dental Care berkomitmen menghadirkan pelayanan terbaik dengan hati.</p>
            <a href="<?= base_url('jadwaldokter') ?>" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section --> <!-- INI UNTUK LETAK ANTRIAN NANTI-->
    <section id="featured-services" class="featured-services section purple-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-5 service-item d-flex justify-content-center align-items-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div>
              <h4 class="fw-bold">Dalam Pemeriksaan</h4>
              <h3 class="fw-bold"><?= $diperiksa ?></h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 service-item d-flex justify-content-center align-items-center text-center" data-aos="fade-up" data-aos-delay="200">
            <div>
              <h4 class="fw-bold">Menunggu</h4>
              <h3 class="fw-bold"><?= $menunggu ?></h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 service-item d-flex justify-content-center align-items-center text-center" data-aos="fade-up" data-aos-delay="300">
            <div>
              <h4 class="fw-bold">Antrian Anda</h4>
              <h3 class="fw-bold"><?= $antrian_saya ?></h3>
            </div>
          </div>

        </div>


      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
        <h2 class="h2-accent-after">Tentang Geligi Dental Care</h2>
        <p>Kami adalah klinik gigi terpercaya yang berkomitmen memberikan pelayanan terbaik untuk kesehatan dan kenyamanan gigi seluruh keluarga Anda.</p>
      </div><!-- End Section Title -->


      <div class="container">
        <div class="row align-items-center gy-4">

          <!-- Text Section -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <p class="text-uppercase fw-semibold mb-2">Siapa Kami</p>
            <h3 class="fw-bold mb-3" style="color: #A94B87;">Mitra Terpercaya untuk Kesehatan Gigi dan Senyum Anda</h3>
            <p class="text-muted" style="text-align: justify;">
              Di <strong>Geligi Dental Care</strong>, kami percaya bahwa senyuman yang sehat adalah kunci kebahagiaan. Dengan komitmen untuk memberikan pelayanan kesehatan gigi terbaik, kami hadir sebagai mitra terpercaya Anda dalam merawat kesehatan gigi dan mulut.
              <br><br>
              Kami menawarkan berbagai layanan perawatan gigi yang dirancang untuk memenuhi kebutuhan setiap pasien, mulai dari tindakan sederhana seperti <em>pembersihan karang gigi (scaling)</em> hingga perawatan kompleks seperti <em>perawatan saluran akar</em> dan <em>pembuatan gigi tiruan</em>.
              <br><br>
              Mari wujudkan senyum sehat Anda bersama kami. <strong>Geligi Dental Care</strong> siap menjadi solusi lengkap untuk kesehatan gigi Anda, karena bagi kami, <span class="fw-semibold">senyum Anda adalah kebahagiaan kami</span>.
            </p>
          </div>

          <!-- Image Section -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center text-lg-end">
              <img src="<?= base_url('depan/img/logo_geligi.svg') ?>" alt="Logo Geligi" class="img-fluid rounded shadow-sm" style="max-width: 80%; height: auto;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Doctor Section -->
    <section id="doctor" class="about section">
      <!-- Section Title -->
      <div class="container section-title2" data-aos="fade-up" data-aos-delay="100">
        <h2>Dokter Kami</h2>
        <p>Tim dokter gigi kami terdiri dari tenaga profesional berpengalaman yang siap memberikan perawatan terbaik dengan pendekatan ramah dan penuh perhatian.</p>
      </div><!-- End Section Title -->

      <div class="row">
        <!-- Bungkus dengan container -->
        <div class="container my-5">
          <!-- Tambahkan justify-content-center agar card di tengah -->
          <div class="row justify-content-center">

            <!-- Card Pertama -->
            <div class="row">
              <?php if (empty($dokter_dengan_jadwal)): ?>
                <div class="col-12 text-center">
                  <i class="bi bi-emoji-frown fs-1 text-secondary"></i>
                  <p class="mt-2 text-muted">Dokter belum tersedia untuk saat ini.</p>
                </div>
              <?php else: ?>
                <?php foreach ($dokter_dengan_jadwal as $dokter): ?>
                  <div class="col-lg-4 col-md-6 doctor-block scale-card mb-4">
                    <div class="inner-box shadow-sm rounded-4 overflow-hidden bg-white h-100 d-flex flex-column wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">

                      <!-- Foto Dokter -->
                      <div class="image position-relative">
                        <img src="data:image/jpeg;base64,<?= base64_encode($dokter->gambar) ?>" alt="dokter" class="img-fluid w-100 custom-img" style="height: 300px; object-fit: cover;">
                      </div>

                      <!-- Konten -->
                      <div class="lower-content p-3 d-flex flex-column flex-grow-1 justify-content-between">
                        <div>
                          <div class="top-content text-center mb-2">
                            <div class="category text-muted small">Dokter Gigi Umum</div>
                            <a href="#" class="text-decoration-none text-dark">
                              <h5 class="fw-bold mb-1"><?= $dokter->nama ?></h5>
                            </a>
                            <div class="designation text-muted small"><?= $dokter->spesialisasi ?? 'D.N.Sc. – M.B.B.S, Ph.D' ?></div>
                          </div>

                          <div class="text-center small mb-2">
                            <strong>Jadwal:</strong><br>
                            <?= $dokter->hari ?>, <?= date('d M Y', strtotime($dokter->tgl)) ?> - <?= date('H:i', strtotime($dokter->waktu)) ?>
                          </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="bottom-content mt-3 d-flex justify-content-around border-top pt-3">
                          <a href="<?= base_url('jadwaldokter') ?>" class="text-decoration-none text-primary d-flex align-items-center gap-1 small">
                            <i class="bi bi-calendar-event"></i> Jadwal
                          </a>
                          <a href="#"
                            class="btn-buat-janji text-success text-decoration-none d-flex align-items-center gap-1 small"
                            data-bs-toggle="modal"
                            data-bs-target="#bookingModal"
                            data-id="<?= $dokter->id_user ?>"
                            data-nama="<?= $dokter->nama ?>"
                            data-tanggal="<?= $dokter->tgl ?>"
                            data-jam="<?= date('H:i', strtotime($dokter->waktu)) ?>">
                            <i class="bi bi-pencil-square"></i> Buat Janji
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>

            <!-- Modal Notifikasi Berhasil -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4">
                  <h5 class="modal-title text-success" id="successModalLabel">Reservasi Berhasil!</h5>
                  <div class="modal-body">
                    <?= $this->session->flashdata('success') ?>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Booking Awal -->
            <!-- Modal Buat Janji -->
            <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 p-4 shadow" style="max-width: 500px; margin: auto;">
                  <form action="<?= base_url('admin/reservasi/simpanLangsung') ?>" method="POST" class="modal-body text-center">

                    <!-- Foto Dokter -->
                    <img src="<?= base_url('depan/img/doc.jpg') ?>" class="rounded-circle mb-3 shadow" style="width: 100px; height: 100px; object-fit: cover;">

                    <!-- Nama Dokter -->
                    <h5 id="modalNamaDokter" class="fw-bold mb-3 text-dark">drg. ...</h5>

                    <!-- Hidden: ID Dokter -->
                    <input type="hidden" name="dokterLama" id="inputIdDokter">

                    <!-- Tanggal -->
                    <input type="date" name="tglLama" id="modalTanggal"
                      class="form-control form-control-sm w-75 mx-auto mb-3 rounded-pill text-center border-secondary"
                      required min="<?= date('Y-m-d') ?>">

                    <!-- Pilihan Jam -->
                    <div id="pilihanJam" class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                      <!-- tombol jam akan diisi dengan JavaScript -->
                    </div>
                    <input type="hidden" name="waktuLama" id="inputJam">

                    <!-- Keluhan -->
                    <textarea name="keluhanLama" class="form-control mb-3 rounded-3 border-secondary" rows="3" placeholder="Tuliskan keluhan Anda..." required></textarea>

                    <!-- Rencana Perawatan -->
                    <select name="rencanaPerawatanLama" class="form-select mb-4 border-secondary" required>
                      <option selected disabled>Pilih Rencana Perawatan</option>
                      <option>Pencabutan Gigi (Exodontic)</option>
                      <option>Pembersihan Karang Gigi (Scaling)</option>
                      <option>Penambalan Gigi (Restorasi)</option>
                      <option>Perawatan Saluran Akar</option>
                      <option>Pembuatan Gigi Palsu (Prostesa)</option>
                      <option>Merapikan Gigi (Orthodontic)</option>
                      <option>Veneer + Bleaching</option>
                    </select>

                    <!-- Jenis Reservasi -->
                    <input type="hidden" name="tipe_pasien" value="lama">
                    <div class="col-md-6 mb-3 mx-auto">
                      <label class="form-label">Jenis Reservasi</label>
                      <select class="form-select" name="jenis_reservasi" required>
                        <option value="">Pilih Jenis Reservasi</option>
                        <option value="reguler">Reguler</option>
                        <option value="kontrol">Kontrol Ulang</option>
                      </select>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn w-100 text-white rounded-pill fw-semibold" style="background-color: #b65dba;">
                      Reservasi
                    </button>

                  </form>
                </div>
              </div>
            </div>

            <!-- Modal Konfirmasi -->
            <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4 rounded-4">
                  <h5 class="fw-bold mb-3">Konfirmasi Reservasi</h5>
                  <p>Apakah Anda yakin ingin melakukan reservasi?</p>
                  <div class="d-flex justify-content-around">
                    <button class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Tidak</button>
                    <button class="btn text-white rounded-pill px-4" style="background-color: #b65dba;" onclick="submitReservasi()">Iya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /End Section Doctor -->

    <!-- Services Section --> <!-- LAYANAN -->
    <section id="services" class="services section lightpurple-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Kami menyediakan berbagai layanan perawatan gigi mulai dari pencegahan hingga perawatan lanjutan, demi mendukung senyum sehat dan percaya diri Anda.</p>
      </div>

      <div class="container">
        <div class="row">
          <?php foreach ($layanan as $index => $l) : ?>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card h-100 shadow card-span rounded-3">
                <img src="data:image/jpeg;base64,<?= base64_encode($l->gambar) ?>" alt="layanan" class="card-img-top rounded-top-3" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3"><?= $l->judul ?></h5>
                  <a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#layananModal<?= $index ?>">Selengkapnya</a>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="layananModal<?= $index ?>" tabindex="-1" aria-labelledby="layananModalLabel<?= $index ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-3">
                  <div class="modal-header">
                    <h5 class="modal-title" id="layananModalLabel<?= $index ?>"><?= $l->judul ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                  </div>
                  <div class="modal-body">
                    <img src="data:image/jpeg;base64,<?= base64_encode($l->gambar) ?>" class="img-fluid rounded mb-3" alt="Gambar Layanan">
                    <p><?= nl2br(htmlspecialchars($l->deskripsi)) ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </section>

    <!-- Portfolio Section -->
    <!-- Section Title -->
    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up" id="portofolio">
        <h2>Artikel</h2>
        <p>Temukan berbagai artikel informatif seputar kesehatan gigi dan mulut yang dapat membantu Anda dan keluarga merawat senyum sehat setiap hari.</p>
      </div>

      <!-- Artikel Section -->
      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <?php if (!empty($artikel)) : ?>
              <?php foreach ($artikel as $a) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                  <div class="card h-100 shadow-sm border-0">

                    <!-- Gambar Artikel -->
                    <img src="data:image/jpeg;base64,<?= base64_encode($a->gambar) ?>"
                      class="card-img-top img-fluid"
                      alt="Artikel <?= htmlspecialchars($a->judul) ?>"
                      style="height: 220px; object-fit: cover;">

                    <!-- Konten -->
                    <div class="card-body d-flex flex-column justify-content-between">
                      <h5 class="card-title"><?= htmlspecialchars($a->judul) ?></h5>
                      <p class="card-text small text-muted"><?= character_limiter(strip_tags($a->deskripsi), 100) ?></p>
                    </div>

                    <!-- Aksi -->
                    <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center px-3 pb-3">
                      <a href="#popup-artikel-<?= $a->id_artikel ?>"
                        class="glightbox-custom text-decoration-none text-dark"
                        data-glightbox="type: inline">
                        <i class="bi bi-zoom-in fs-5"></i>
                      </a>

                      <!-- Popup Konten -->
                      <div id="popup-artikel-<?= $a->id_artikel ?>" style="display: none;">
                        <div class="container p-3 text-center"> <!-- tambahkan text-center di sini -->
                          <img src="data:image/jpeg;base64,<?= base64_encode($a->gambar) ?>"
                            class="img-fluid mb-3 rounded"
                            alt="<?= htmlspecialchars($a->judul) ?>"
                            style="max-height: 300px; object-fit: cover;">
                          <h4 class="mb-2"><?= htmlspecialchars($a->judul) ?></h4>
                          <p class="text-muted text-start"><?= $a->deskripsi ?></p>
                        </div>
                      </div>

                      <a href="<?= base_url('home/detailberita/' . $a->id_artikel) ?>"
                        title="Selengkapnya"
                        class="text-decoration-none text-dark">
                        <i class="bi bi-link-45deg fs-5"></i>
                      </a>
                    </div>

                  </div>
                </div>
              <?php endforeach; ?>
            <?php else : ?>
              <div class="col-12 text-center text-muted">
                <p>Belum ada artikel yang tersedia.</p>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section lightpurple-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Apa Kata Mereka</h2>
        <p>Lihat pengalaman nyata dari para pasien yang telah merasakan layanan terbaik dan perawatan profesional di Geligi Dental Care.</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            <?php foreach ($testimoni as $row): ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="<?= base_url('depan/img/testimonials/testimonials-5.jpg') ?>" class="testimonial-img" alt="">
                  <h3><?= $row->nama_pengirim ? htmlspecialchars($row->nama_pengirim) : 'Pasien Geligi' ?></h3>
                  <h4><?= htmlspecialchars($row->email) ?></h4>
                  <div class="stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                      <i class="bi <?= $i <= $row->rating ? 'bi-star-fill text-warning' : 'bi-star' ?>"></i>
                    <?php endfor; ?>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span><?= nl2br(htmlspecialchars($row->testimonial)) ?></span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section py-5 bg-light">

      <!-- Section Title -->
      <div class="container section-title text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Kontak</h2>
        <p class="text-muted">Hubungi kami untuk informasi lebih lanjut, jadwal konsultasi, atau pertanyaan seputar layanan kami. Tim kami siap membantu Anda dengan sepenuh hati.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Informasi Kontak -->
        <div class="row gy-4 mb-5">

          <!-- Lokasi -->
          <div class="col-lg-4">
            <a href="https://www.google.com/maps/place/Geligi+Dental+Care/@0.5701133,101.4450358,17z"
              target="_blank"
              rel="noopener noreferrer"
              class="text-decoration-none">
              <div class="info-item text-center p-4 border rounded shadow-sm bg-white h-100 transition">
                <i class="bi bi-geo-alt fs-1 text-primary mb-3"></i>
                <h5 class="fw-semibold">Alamat</h5>
                <p class="text-muted mb-0">Jalan Sembilang</p>
              </div>
            </a>
          </div>

          <!-- WhatsApp -->
          <div class="col-lg-4">
            <a href="https://wa.me/6282385828185"
              target="_blank"
              rel="noopener noreferrer"
              class="text-decoration-none">
              <div class="info-item text-center p-4 border rounded shadow-sm bg-white h-100 transition">
                <i class="bi bi-telephone fs-1 text-primary mb-3"></i>
                <h5 class="fw-semibold">Hubungi Kami</h5>
                <p class="text-muted mb-0">+62 823 8582 8185</p>
              </div>
            </a>
          </div>

          <!-- Email -->
          <div class="col-lg-4">
            <a href="mailto:geligidentalcare@gmail.com" class="text-decoration-none">
              <div class="info-item text-center p-4 border rounded shadow-sm bg-white h-100 transition">
                <i class="bi bi-envelope fs-1 text-primary mb-3"></i>
                <h5 class="fw-semibold">Email Kami</h5>
                <p class="text-muted mb-0">geligidentalcare@gmail.com</p>
              </div>
            </a>
          </div>

        </div>

        <!-- Form dan Google Maps -->
        <div class="row g-4 align-items-stretch">

          <!-- Form Penilaian -->
          <div class="col-lg-6 d-flex">
            <?php if ($this->session->flashdata('sukses')): ?>
              <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <?= $this->session->flashdata('sukses') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
              <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                <?= $this->session->flashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/testimonial/simpan') ?>" method="post"
              class="php-email-form p-4 p-lg-5 bg-white rounded shadow-sm w-100 d-flex flex-column justify-content-between"
              data-aos="fade-up" data-aos-delay="200">

              <!-- Input Nama -->
              <div class="mb-3">
                <input type="text" class="form-control form-control-lg rounded-3" name="nama_pengirim"
                  placeholder="Nama Anda (Opsional)">
              </div>

              <!-- Input Email -->
              <div class="mb-3">
                <input type="email" class="form-control form-control-lg rounded-3" name="email" placeholder="Email Anda" required>
              </div>

              <!-- Rating Bintang -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Beri Penilaian Pengalaman Anda:</label>
                <div class="rating d-flex gap-2 fs-3 text-warning">
                  <?php for ($i = 5; $i >= 1; $i--) : ?>
                    <input type="radio" name="rating" id="star<?= $i ?>" value="<?= $i ?>" required
                      class="d-none">
                    <label for="star<?= $i ?>" style="cursor: pointer;">
                      <i class="fas fa-star"></i>
                    </label>
                  <?php endfor; ?>
                </div>
              </div>

              <!-- Pesan Testimonial -->
              <div class="mb-3">
                <textarea class="form-control form-control-lg rounded-3" name="message" rows="6"
                  placeholder="Bagikan pengalaman Anda dengan Geligi Dental Care..." required></textarea>
              </div>

              <?php if (!$this->session->userdata('id_user')): ?>
                <!-- User belum login -->
                <div class="text-center">
                  <a href="<?= base_url('masuk') ?>" class="btn btn-warning px-5 rounded-pill mt-3">
                    Login untuk Kirim Testimoni
                  </a>
                </div>
              <?php else: ?>
                <!-- User sudah login -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary px-5 rounded-pill mt-3">Kirim Pesan</button>
                </div>
              <?php endif; ?>

              <!-- Status Pengiriman -->
              <div class="mt-3 text-center">
                <div class="loading d-none">Mengirim...</div>
                <div class="error-message text-danger d-none"></div>
                <div class="sent-message text-success d-none">Pesan Anda telah terkirim. Terima kasih!</div>
              </div>
            </form>
          </div>

          <!-- Google Maps -->
          <div class="col-lg-6 d-flex" data-aos="fade-up" data-aos-delay="250">
            <div class="h-100 w-100 rounded shadow-sm overflow-hidden" style="min-height: 100%;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.9689740383037!2d101.44503577349161!3d0.5701132635889833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad06022c6e0d%3A0x802969719eb2afc7!2sGeligi%20Dental%20Care!5e1!3m2!1sid!2sid!4v1751788580739!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0; min-height: 100%;"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

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
            <a href="https://wa.me/6282385828185"><i class="bi bi-whatsapp"></i></a>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Main JS File -->
  <script src="<?= base_url('depan/js/main.js') ?>"></script>



  <script>
    document.querySelectorAll('input[name="rating"]').forEach((input) => {
      input.addEventListener('change', function() {
        const stars = document.querySelectorAll('label[for^="star"]');
        let selected = parseInt(this.value);
        stars.forEach((label, index) => {
          label.querySelector('i').style.color = (5 - index) <= selected ? '#ffc107' : '#ccc';
        });
      });
    });
  </script>
  <?php if (!empty($show_profile_modal) && $show_profile_modal): ?>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var modal = new bootstrap.Modal(document.getElementById('profileNotificationModal'));
        modal.show();
      });
    </script>
  <?php endif; ?>
  <script>
    $(document).ready(function() {
      $('.btn-buat-janji').on('click', function(e) {
        e.preventDefault();

        const idDokter = $(this).data('id');
        const namaDokter = $(this).data('nama');
        const tanggal = $(this).data('tanggal');
        const jam = $(this).data('jam');

        $('#modalNamaDokter').text(namaDokter);
        $('#inputIdDokter').val(idDokter);
        $('#modalTanggal').val(tanggal);
        $('#inputTanggal').val(tanggal);
        $('#inputJam').val(jam);

        // Buat tombol jam (kamu bisa kembangkan ini ke banyak jam jika mau)
        let jamHtml = `<button type="button" class="btn btn-sm btn-primary pilih-jam" data-jam="${jam}">${jam}</button>`;
        $('#pilihanJam').html(jamHtml);

        // Show modal
        $('#bookingModal').modal('show');
      });

      $(document).on('click', '.pilih-jam', function() {
        $('.pilih-jam').removeClass('btn-primary').addClass('btn-outline-secondary');
        $(this).addClass('btn-primary').removeClass('btn-outline-secondary');
        const jam = $(this).data('jam');
        $('#inputJam').val(jam);
      });
    });
  </script>

  <?php if ($this->session->flashdata('success')): ?>
    <script>
      window.addEventListener('DOMContentLoaded', function() {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      });
    </script>
  <?php endif; ?>

  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
  <script>
    const lightboxArtikel = GLightbox({
      selector: '.glightbox-custom'
    });
  </script>

</body>

</html>