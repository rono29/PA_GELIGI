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
          <div class="breadcrumb-title pe-3">Kelola Artikel</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item active" aria-current="page">Tambah Artikel</li>
              </ol>
            </nav>
          </div>


          <!--end breadcrumb-->


        </div><br><br>
        <!--end page content wrapper-->


        <form action="<?= base_url('admin/artikel/simpan') ?>" method="post" enctype="multipart/form-data">
          <div class="card">
            <div class="card-body">
              <label class="form-label">Judul</label>
              <input class="form-control mb-3" type="text" name="judul" required>

              <label class="form-label">Deskripsi</label>
              <textarea class="form-control mb-3" name="deskripsi" rows="4" cols="4" required></textarea>

              <label class="form-label">Gambar</label>
              <input type="file" class="form-control mb-3" name="gambar" required>
            </div>
            <div class="col-12 d-flex justify-content-between mt-4">
              <a href="<?= base_url('admin/artikel') ?>" class="btn btn-secondary px-2 m-3">Kembali</a>
              <button type="submit" class="btn btn-primary px-2 m-3">Simpan</button>
            </div>
          </div>
        </form>

      </div>



      <!--start footer-->
      <?php $this->load->view("admin/_templates/footer.php") ?>
      <!--end footer-->



      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>



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