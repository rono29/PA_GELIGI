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
          <div class="breadcrumb-title pe-3">Kelola Antrian</div>
        </div>

        <!--end breadcrumb-->

        <div class="row row-cols-1 row-cols-md-2">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">Total Data Reservasi</p>
                    <h4 class="mb-0 text-info">1.5M</h4>
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
                    <h4 class="mb-0 text-info">1.5M</h4>
                  </div>
                  <div class="ms-auto text-info fs-2">
                    <ion-icon name="people-sharp"></ion-icon>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2">
          <!-- Kolom Kiri: Tabel -->
          <div class="col">
            <div class="card">
              <div class="card-body">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">No Antrian</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td>1</td>
                      <td><span class="badge alert-warning">Dalam Proses</span></td>
                    </tr>
                    <tr>

                      <td>2</td>
                      <td><span class="badge alert-warning">Dalam Proses</span></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><span class="badge alert-success">Selesai</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Kolom Kanan: Antrian Sekarang -->
          <div class="col">
            <div class="card radius-10 text-center">
              <div class="card-body d-flex flex-column justify-content-center align-items-center" style="min-height: 250px;">
                <p class="mb-2 fs-5">Antrian Sekarang</p>
                <h1 class="fw-bold mb-4">50</h1>
                <button type="button" class="btn btn-primary px-4 py-2 fw-bold" style="background-color: #a94b8f; border: none;">
                  Lanjut
                </button>
              </div>
            </div>
          </div>
        </div>

        <!--end page content wrapper-->
      </div>
      <!--end page content wrapper-->
    </div>
  </div>
  </div>
  <!--start footer-->
  <?php $this->load->view("admin/_templates/footer.php") ?>
  <!--end footer-->


  <!--Start Back To Top Button-->
  <<a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>



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
    <script src="<?= base_url('assets/plugins/datatable/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/table-datatable.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>


</body>

</html>