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
          <div class="breadcrumb-title pe-3">Data Reservasi</div>
        </div>
        <?php if ($this->session->userdata('role') === 'staf'): ?>
          <div class="col">
            <a class="btn btn-primary px-5" href="<?= base_url('admin/reservasi/tambah') ?>">Tambah Data</a>
          </div>
        <?php endif; ?>

        <br><br>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Dokter Praktik</th>
                    <th>Tanggal Input</th>
                    <th>Nama Lengkap</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th class="wrap-text">Tanggal Reservasi</th>
                    <th class="wrap-text">Waktu Reservasi</th>
                    <th class="wrap-text">No Antrian</th>
                    <th>Status</th>
                    <?php if ($this->session->userdata('role') === 'staf'): ?>
                      <th>Aksi</th>
                    <?php endif; ?>

                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($reservasi as $row): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>Belum di panggil dokternya</td>
                      <td><?= $row->created_at ?></td>
                      <td><?= $row->nama ?></td>
                      <td><?= $row->umur ?> Tahun</td>
                      <td><?= $row->alamat ?></td>
                      <td><?= $row->tgl_input ?></td>
                      <td><?= $row->jam_res ?></td>
                      <td><?= $row->no_antrian ?></td>
                      <td><?= $row->status ?></td>

                      <?php if ($this->session->userdata('role') === 'staf'): ?>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="<?= base_url('admin/reservasi/preview/' . $row->id_res) ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Rincian">
                              <ion-icon name="eye-sharp"></ion-icon>
                            </a>

                            <a href="<?= base_url('admin/reservasi/delete/' . $row->id_res) ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cencel">
                              <ion-icon name="close-sharp"></ion-icon>
                            </a>

                            <a href="<?= base_url('admin/reservasi/delete/' . $row->id_res) ?>"
                              class="text-danger"
                              onclick="return confirm('Yakin ingin menghapus data ini?')"
                              data-bs-toggle="tooltip"
                              data-bs-placement="bottom"
                              title="Hapus">
                              <ion-icon name="trash-sharp"></ion-icon>
                            </a>
                          </div>
                        </td>
                      <?php endif; ?>
                    </tr>
                  <?php endforeach; ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
        <!-- end page content-->
      </div>
      <!--end page content wrapper-->
    </div>
    <!--start footer-->
    <?php $this->load->view("admin/_templates/footer.php") ?>
    <!--end footer-->
  </div>





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