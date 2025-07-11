<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jadwal Dokter - Geligi Dental Care</title>
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
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('depan/css/main.css') ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


  <section id="jadwal" class="faq section light-background" data-aos="fade-up" data-aos-delay="100">
    <div class="container section-title">
      <h2>Jadwal Dokter</h2>
      <p class="text-muted">Lihat jadwal praktik dokter kami untuk merencanakan kunjungan Anda dengan lebih mudah dan nyaman.</p>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <?php foreach ($dokter_dengan_jadwal as $dokter): ?>
          <div class="col-lg-10 mb-4">
            <div class="card shadow-sm border-0 rounded-4">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center">
                    <img src="<?= base_url('depan/img/doc.jpg') ?>" class="img-fluid rounded-circle mb-3" alt="Foto Dokter" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5 class="fw-bold mb-0"><?= $dokter->nama ?></h5>
                  </div>
                  <div class="col-md-8">
                    <form class="form-reservasi">
                      <input type="hidden" name="id_dokter" value="<?= $dokter->id_user ?>">

                      <div class="mb-3">
                        <label class="form-label">Pilih Tanggal</label>
                        <input type="date" class="form-control input-tanggal" name="tanggal" required>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Pilih Jam</label>
                        <div class="d-flex flex-wrap gap-2 pilihan-jam"></div>
                        <input type="hidden" name="jam" class="input-jam">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Keluhan</label>
                        <textarea class="form-control input-keluhan" name="keluhan" rows="2" required></textarea>
                      </div>

                      <button type="button" class="btn btn-primary btn-sm rounded-pill px-4 btn-konfirmasi" data-nama="<?= $dokter->nama ?>">
                        Reservasi
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- Modal Konfirmasi -->
  <div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 rounded-4 shadow p-4">
        <h5 class="mb-3 fw-bold">Konfirmasi Reservasi</h5>
        <p class="text-muted text-nama-dokter mb-4"></p>
        <form id="formSubmitReservasi" method="post" action="<?= base_url('admin/reservasi/simpanLangsung') ?>">
          <input type="hidden" name="dokterLama" id="confirmIdDokter">
          <input type="hidden" name="tglLama" id="confirmTgl">
          <input type="hidden" name="waktuLama" id="confirmJamInput">
          <input type="hidden" name="keluhanLama" id="confirmKeluhanInput">
          <input type="hidden" name="tipe_pasien" value="lama">

          <div class="mb-3">
            <label class="form-label">Rencana Perawatan</label>
            <select name="rencanaPerawatanLama" id="rencanaPerawatanLama" class="form-select" required>
              <option disabled selected>Pilih Rencana Perawatan</option>
              <option>Pencabutan Gigi (Exodontic)</option>
              <option>Pembersihan Karang Gigi (Scaling)</option>
              <option>Penambalan Gigi (Restorasi)</option>
              <option>Perawatan Saluran Akar</option>
              <option>Pembuatan Gigi Palsu (Prostesa)</option>
              <option>Merapikan Gigi (Orthodontic)</option>
              <option>Veneer + Bleaching</option>
            </select>
          </div>

          <div class="mb-4">
            <label class="form-label">Jenis Reservasi</label>
            <select name="jenis_reservasiLama" id="jenisReservasi" class="form-select" required>
              <option value="">Pilih Jenis Reservasi</option>
              <option value="reguler">Reguler</option>
              <option value="kontrol">Kontrol Ulang</option>
            </select>
          </div>

          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success rounded-pill px-4">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="<?= base_url('depan/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script>
    const isLoggedIn = <?= $this->session->userdata('id_user') ? 'true' : 'false' ?>;
    $(document).ready(function() {
      $('.input-tanggal').on('change', function() {
        const tanggal = $(this).val();
        const form = $(this).closest('.form-reservasi');
        const id_dokter = form.find('input[name="id_dokter"]').val();
        const pilihanJam = form.find('.pilihan-jam');

        $.post("<?= base_url('home/get_jadwal_by_dokter') ?>", {
          id_dokter,
          tanggal
        }, function(res) {
          let jadwal = JSON.parse(res);
          let html = jadwal.length ? '' : '<div class="text-muted">Tidak ada jadwal</div>';
          jadwal.forEach(j => {
            html += `<button type="button" class="btn btn-outline-primary pilih-jam" data-jam="${j.waktu}">${j.waktu.slice(0,5)}</button>`;
          });
          pilihanJam.html(html);
        });
      });

      $(document).on('click', '.pilih-jam', function() {
        const form = $(this).closest('.form-reservasi');
        form.find('.pilih-jam').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).removeClass('btn-outline-primary').addClass('btn-primary');
        form.find('.input-jam').val($(this).data('jam'));
      });

      $('.btn-konfirmasi').on('click', function() {
        if (!isLoggedIn) {
          Swal.fire({
            icon: 'warning',
            title: 'Belum Login',
            text: 'Silakan login terlebih dahulu untuk melakukan reservasi!',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "<?= base_url('masuk') ?>";
            }
          });
          return; // Jangan lanjut ke modal reservasi
        }
        window.location.href = "<?= base_url('masuk') ?>";
        const form = $(this).closest('.form-reservasi');
        const dokter = form.find('input[name="id_dokter"]').val();
        const tanggal = form.find('input[name="tanggal"]').val();
        const jam = form.find('input[name="jam"]').val();
        const keluhan = form.find('.input-keluhan').val();

        if (!tanggal || !jam || !keluhan) {
          alert('Mohon lengkapi semua data.');
          return;
        }

        $('#confirmIdDokter').val(dokter);
        $('#confirmTgl').val(tanggal);
        $('#confirmJamInput').val(jam);
        $('#confirmKeluhanInput').val(keluhan);
        $('.text-nama-dokter').text("Reservasi untuk " + $(this).data('nama') + "?");

        new bootstrap.Modal(document.getElementById('confirmModal')).show();
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // durasi animasi
      once: true // animasi hanya terjadi satu kali saat scroll
    });
  </script>
</body>

</html>