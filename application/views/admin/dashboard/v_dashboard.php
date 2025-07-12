<!doctype html>
<html lang="en" class="light-theme">

<head>
  <?php $this->load->view("admin/_templates/header.php") ?>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start topbar-->
    <?php $this->load->view("admin/_templates/topbar.php") ?>
    <!--end topbar-->

    <!--start sidebar -->
    <?php $this->load->view("admin/_templates/sidebar.php") ?>
    <!--end sidebar -->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">Total Data Reservasi</p>
                    <h4 class="mb-0 text-info"><?= $total_reservasi ?></h4>
                  </div>
                  <div class="ms-auto text-info fs-2">
                    <ion-icon name="people-sharp"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">Total Rekam Medis</p>
                    <h4 class="mb-0 text-info"><?= $total_rekammedis ?></h4>
                  </div>
                  <div class="ms-auto text-info fs-2">
                    <ion-icon name="people-sharp"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">Antrian Saat Ini</p>
                    <h4 class="mb-0 text-info">
                      <?= !empty($antrian_sekarang->no_antrian) ? $antrian_sekarang->no_antrian : '0' ?>
                    </h4>
                  </div>
                  <div class="ms-auto text-info fs-2">
                    <ion-icon name="people-sharp"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->


        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">Reservasi Hari Ini</h6>
              <form class="searchbar">
                <input class="form-control" type="text" placeholder="Search for anything">
              </form>
              <a class="nav-link" href="javascript:;">
                <div class="">
                  <ion-icon name="search-sharp"></ion-icon>
                </div>
              </a>

            </div>
            <div class="table-responsive mt-2">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>#</th>
                    <th>Nama Pasien</th>
                    <th>Dokter</th>
                    <th>Waktu Reservasi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($reservasi_hari_ini)) :
                    $no = 1;
                    foreach ($reservasi_hari_ini as $resv) : ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $resv->nama_pasien ?></td>
                        <td><?= $resv->nama_dokter ?></td>
                        <td><?= date('Y-m-d H:i', strtotime($resv->created_at)) ?></td>
                        <td>
                          <?php
                          $badge_class = match ($resv->status) {
                            'Terkonfirmasi' => 'success',
                            'Menunggu' => 'warning text-dark',
                            'Dibatalkan' => 'danger',
                            default => 'secondary'
                          };
                          ?>
                          <span class="badge bg-<?= $badge_class ?>"><?= $resv->status ?></span>
                        </td>
                        <td>
                          <div class="d-flex gap-2">
                            <a href="#" class="btn btn-sm btn-primary"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="#" class="btn btn-sm btn-warning"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="#" class="btn btn-sm btn-danger"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <tr>
                      <td colspan="7" class="text-center text-muted">Tidak ada reservasi hari ini.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    <?php $this->load->view("admin/_templates/footer.php") ?>
    <!--end footer-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
    <!--End Back To Top Button-->

    <!--start overlay-->
    <div class="overlay"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->





  <!-- JS Files-->
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="<?= base_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/chartjs/chart.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/index3.js') ?>"></script>
  <!-- Main JS-->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <!-- Include SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    let lastId = 0;

    function cekReservasiBaru() {
      fetch("<?= base_url('admin/reservasi/cek_reservasi_baru') ?>")
        .then(res => res.json())
        .then(res => {
          if (res.status && res.data) {
            if (res.data.id_res > lastId) {
              lastId = res.data.id_res;

              // Tampilkan notifikasi popup
              Swal.fire({
                title: 'Reservasi Baru!',
                text: `Pasien: ${res.data.nama_pasien || 'Pasien baru'}`,
                icon: 'info',
                timer: 4000,
                timerProgressBar: true,
                showConfirmButton: false,
                toast: true,
                position: 'top-end'
              });
            }
          }
        });
    }

    // Jalankan tiap 10 detik
    setInterval(cekReservasiBaru, 1);
  </script>


</body>

</html>