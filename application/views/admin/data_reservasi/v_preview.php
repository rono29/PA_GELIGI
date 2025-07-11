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
        <!--end breadcrumb-->

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Detail Reservasi</div>
        </div>

        <!-- Card Preview -->
        <div class="card shadow-sm border-0 rounded-4">
          <div class="card-body p-4">

            <h4 class="fw-bold mb-4">Preview Data Reservasi</h4>

            <table class="table table-bordered table-striped">
              <tr>
                <th class="w-25">Nama</th>
                <td><?= $detail->nama ?></td>
              </tr>
              <tr>
                <th>Tempat, Tgl Lahir</th>
                <td><?= $detail->tmpt_lahir ?>, <?= $detail->tgl_lahir ?></td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td><?= ucfirst($detail->jk) ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><?= $detail->alamat ?></td>
              </tr>
              <tr>
                <th>Nomor HP</th>
                <td><?= $detail->no_hp ?></td>
              </tr>
              <tr>
                <th>Keluhan</th>
                <td><?= $detail->keluhan ?></td>
              </tr>
              <tr>
                <th>No Antrian</th>
                <td><?= $detail->no_antrian ?></td>
              </tr>
            </table>
            <div class="col-12 d-flex justify-content-between mt-4">
              <a href="<?= base_url('admin/reservasi') ?>" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- end page content-->
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