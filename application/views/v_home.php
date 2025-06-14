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

  <!-- =======================================================
  * Template Name: BizPage
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

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
          <a href="<?= base_url('masuk') ?>" class="btn-login">Masuk</a>
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
            <a href="#featured-services" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-2.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>At vero eos et accusamus</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
            <a href="#featured-services" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-3.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Temporibus autem quibusdam</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
            <a href="#featured-services" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-4.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Nam libero tempore</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
            <a href="#featured-services" class="btn-get-started">Reservasi Sekarang</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="<?= base_url('depan/img/hero-carousel/hero-carousel-5.jpg') ?>" alt="">
          <div class="carousel-container">
            <h2>Magnam aliquam quaerat</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#featured-services" class="btn-get-started">Reservasi Sekarang</a>
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
              <h3 class="fw-bold">B 20</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 service-item d-flex justify-content-center align-items-center text-center" data-aos="fade-up" data-aos-delay="200">
            <div>
              <h4 class="fw-bold">Menunggu</h4>
              <h3 class="fw-bold">4</h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 service-item d-flex justify-content-center align-items-center text-center" data-aos="fade-up" data-aos-delay="300">
            <div>
              <h4 class="fw-bold">Menunggu Antrian Anda</h4>
              <h3 class="fw-bold">---</h3>
            </div>
          </div>
          <!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
        <h2 class="h2-accent-after">Tentang Geligi Dental Care</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Siapa Kami</p>
            <h3>Mitra Terpercaya untuk Kesehatan Gigi dan Senyum Anda</h3>
            <p class="fst-italic" style="text-align: justify;">
              Di Geligi Dental Care, kami percaya bahwa senyuman yang sehat adalah kunci kebahagiaan. Dengan komitmen untuk memberikan pelayanan kesehatan gigi terbaik, kami hadir sebagai mitra terpercaya Anda dalam merawat kesehatan gigi dan mulut. Kami menawarkan berbagai layanan perawatan gigi yang dirancang untuk memenuhi kebutuhan setiap pasien, mulai dari tindakan sederhana seperti pembersihan karang gigi (scaling) hingga perawatan kompleks seperti perawatan saluran akar dan pembuatan gigi tiruan.
              Mari wujudkan senyum sehat Anda bersama kami. Geligi Dental Care siap menjadi solusi lengkap untuk kesehatan gigi Anda, karena bagi kami, senyum Anda adalah kebahagiaan kami.
            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex justify-content-lg-end justify-content-center">
              <img src="<?= base_url('depan/img/logo_geligi.svg') ?>" alt="Logo Geligi" style="max-width: 85%; height: auto;">
            </div>
          </div>
          <!-- <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="<?= base_url('depan/img/logo geligi.svg') ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="<?= base_url('depan/img/geligi.jpg') ?>" class="img-fluid" alt="">
                  </div> -->
        </div>
      </div>
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
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="row">
        <!-- Bungkus dengan container -->
        <div class="container my-5">
          <!-- Tambahkan justify-content-center agar card di tengah -->
          <div class="row justify-content-center">

            <!-- Card Pertama -->
            <div class="col-lg-4 col-md-6 doctor-block scale-card">
              <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="image">
                  <img src="<?= base_url('depan/img/doc.jpg') ?>" alt="dokter" class="img-fluid custom-img">
                </div>
                <div class="lower-content bg-white">
                  <div class="top-content">
                    <div class="category">Ophthalmologist</div>
                    <a href="doctor-details.html">
                      <h4>Dr. Chewing Shinlong</h4>
                    </a>
                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                  </div>
                  <div class="bottom-content">
                    <ul>
                      <li><a href="#"><i class="icon_calendar"></i> Jadwal</a></li>
                      <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#bookingModal">
                          <i class="icon_phone"></i> Buat Janji
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 p-4" style="max-width: 500px; margin: auto;">

                  <div class="modal-body text-center">
                    <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Foto Dokter">
                    <h5 class="fw-bold">drg. Redha Fauzana</h5>

                    <!-- Tanggal -->
                    <input type="date" class="form-control form-control-sm w-75 mx-auto my-3 rounded-pill text-center">

                    <!-- Jam -->
                    <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                      <button class="btn rounded-pill px-4 text-white" style="background-color: #b65dba;">08.00</button>
                      <button class="btn btn-light rounded-pill px-4">16.00</button>
                      <button class="btn btn-light rounded-pill px-4">16.00</button>
                      <button class="btn btn-light rounded-pill px-4">16.00</button>
                      <button class="btn btn-light rounded-pill px-4">16.00</button>
                    </div>

                    <!-- Keluhan -->
                    <textarea class="form-control mb-3" rows="3" placeholder="Tuliskan keluhan anda...."></textarea>

                    <!-- Dropdown -->
                    <select class="form-select mb-3">
                      <option selected disabled>Pilih Jenis Layanan</option>
                      <option>Scaling</option>
                      <option>Cabut Gigi</option>
                    </select>

                    <!-- Tombol Reservasi -->
                    <button class="btn w-100 text-white rounded-pill" style="background-color: #b65dba;">Reservasi</button>
                  </div>

                </div>
              </div>
            </div>


            <!-- Card Kedua-->
            <div class="col-lg-4 col-md-6 doctor-block scale-card">
              <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="image">
                  <img src="<?= base_url('depan/img/doc.jpg') ?>" alt="dokter" class="img-fluid custom-img">
                </div>
                <div class="lower-content bg-white">
                  <div class="top-content">
                    <div class="category">Ophthalmologist</div>
                    <a href="doctor-details.html">
                      <h4>Dr. Chewing Shinlong</h4>
                    </a>
                    <div class="designation">D.N.Sc. - M.B.B.S,Ph.D</div>
                  </div>
                  <div class="bottom-content">
                    <ul>
                      <li><a href="#"><i class="icon_calendar"></i> Jadwal</a></li>
                      <li>
                        <a href="#" data-bs-toggle="modal1" data-bs-target="#bookingModal1">
                          <i class="icon_phone"></i> Buat Janji
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <!-- /End Section Doctor -->

    <!-- Services Section --> <!-- LAYANAN -->
    <section id="services" class="services section lightpurple-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card h-100 shadow card-span rounded-3">
              <img src="<?= base_url('depan/img/pic.jpg') ?>" alt="layanan" class="card-img-top rounded-top-3">
              <div class="card-body">
                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">
                  The dangers of nicotine are addressed in depth
                </h5>
                <!-- Tombol Trigger Modal -->
                <a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#newsModal1">read full article</a>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="newsModal1" tabindex="-1" aria-labelledby="newsModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content rounded-3">
                <div class="modal-header">
                  <h5 class="modal-title" id="newsModalLabel1">The dangers of nicotine are addressed in depth</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                  <img src="<?= base_url('depan/img/pic.jpg') ?>" class="img-fluid rounded mb-3" alt="Berita Lengkap">
                  <p>
                    Kandungan nikotin dalam rokok telah lama menjadi perdebatan karena dampaknya terhadap kesehatan...
                    <br><br>
                    Studi terbaru menunjukkan bahwa nikotin tidak hanya bersifat adiktif, tetapi juga memiliki dampak sistemik
                    terhadap sistem kardiovaskular dan saraf pusat. Artikel ini membahas secara mendalam mengenai bahaya nikotin
                    dan dampaknya terhadap tubuh manusia.
                  </p>
                  <p>
                    Selain itu, berbagai kebijakan publik telah dilakukan untuk mengurangi konsumsi nikotin seperti larangan iklan
                    rokok, pemberlakuan kawasan bebas rokok, dan kampanye bahaya merokok...
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card h-100 shadow card-span rounded-3">
              <img src="<?= base_url('depan/img/pic.jpg') ?>" alt="layanan" class="card-img-top rounded-top-3">
              <div class="card-body">
                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Importance of Accreditation for Laboratories</h5><a class="stretched-link" href="#!">read full article</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card h-100 shadow card-span rounded-3">
              <img src="<?= base_url('depan/img/pic.jpg') ?>" alt="layanan" class="card-img-top rounded-top-3">
              <div class="card-body">
                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">The dangers of nicotine are addressed in depth</h5><a class="stretched-link" href="#!">read full article</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card h-100 shadow card-span rounded-3">
              <img src="<?= base_url('depan/img/pic.jpg') ?>" alt="layanan" class="card-img-top rounded-top-3">
              <div class="card-body">
                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Treatment of patients with diabetes during COVID-19</h5><a class="stretched-link" href="#!">read full article</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card h-100 shadow card-span rounded-3">
              <img src="<?= base_url('depan/img/pic.jpg') ?>" alt="layanan" class="card-img-top rounded-top-3">
              <div class="card-body">
                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">The dangers of nicotine are addressed in depth</h5><a class="stretched-link" href="#!">read full article</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card h-100 shadow card-span rounded-3">
              <img src="<?= base_url('depan/img/pic.jpg') ?>" alt="layanan" class="card-img-top rounded-top-3">
              <div class="card-body">
                <h5 class="font-base fs-lg-0 fs-xl-1 my-3">The dangers of nicotine are addressed in depth</h5><a class="stretched-link" href="#!">read full article</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    </section>
    <!-- /Services Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Artikel</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="<?= base_url('depan/img/portfolio/books-1.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="<?= base_url('depan/img/portfolio/books-1.jpg') ?>" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="<?= base_url('depan/img/portfolio/books-2.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="<?= base_url('depan/img/portfolio/books-2.jpg') ?>" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="<?= base_url('depan/img/portfolio/books-3.jpg') ?>" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section lightpurple-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Apa Kata Mereka</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('depan/img/testimonials/testimonials-1.jpg') ?>" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('depan/img/testimonials/testimonials-2.jpg') ?>" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('depan/img/testimonials/testimonials-3.jpg') ?>" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('depan/img/testimonials/testimonials-4.jpg') ?>" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url('depan/img/testimonials/testimonials-5.jpg') ?>" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jalan Sembilang</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
              <i class="bi bi-telephone"></i>
              <h3>Hubungi Kami</h3>
              <p>+62 823 8582 8185</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Kami</h3>
              <p>geligidentalcare@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">


            <div class="col-md-12 ">
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Beri Penilaian Pengalaman Anda..." required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Pengalaman Anda dengan Geligi Dental Care..." required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

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

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <a href="#hero" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?= base_url('depan/img/logodental.png') ?>" alt="Logo Dental" style="width: 200px; max-width: 100%; height: auto;">
            <!-- <h1 class="sitename">Geligi Dental Care</h1> -->
          </a>
          <p class="mt-3"><strong>Email:</strong><span> geligidentalcare@gmail.com</span></p>
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