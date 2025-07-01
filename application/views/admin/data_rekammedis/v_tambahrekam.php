<!doctype html>
<html lang="en" class="light-theme">

<head>

  <head>
    <?php $this->load->view("admin/_templates/header.php") ?>
  </head>
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
          <div class="breadcrumb-title pe-3">Data Rekam Medis</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
              </ol>
            </nav>
          </div>
        </div>

        <!--end breadcrumb-->


      </div>
      <!--end page content wrapper-->


      <form action="<?= base_url('admin/rekammedis/simpan') ?>" method="post">
        <div class="card mx-4">
          <div class="card-header">
            <h6 class="mb-0">Data Diri Pasien</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="namaLengkap" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jenisKelamin" class="form-control" required>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" name="Pekerjaan" class="form-control" required>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Status Pernikahan</label>
                <input type="text" name="statusPernikahan" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="Alamat" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">No Hp</label>
                <input type="text" name="noHp" class="form-control" required>
              </div>
            </div>
          </div>
        </div>

        <div class="card mx-4">
          <div class="card-header">
            <h6 class="mb-0">Data Medik Pasien</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Golongan Darah</label>
                <select name="golDarah" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Tekanan Darah</label>
                <input type="text" name="tekananDarah" class="form-control" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Penyakit Jantung</label>
                <select name="penyakitJantung" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="1">Ada</option>
                  <option value="0">Tidak Ada</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Diabetes</label>
                <select name="diabetes" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="1">Ada</option>
                  <option value="0">Tidak Ada</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Haemophilia/Kelainan Darah</label>
                <select name="kelainanDarah" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="1">Ada</option>
                  <option value="0">Tidak Ada</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Hepatitis</label>
                <select name="hepatitis" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="1">Ada</option>
                  <option value="0">Tidak Ada</option>
                </select>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Penyakit Lainnya</label>
                <input type="text" name="penyakitLainnya" class="form-control">
              </div>
              <div class="col-12 mb-3">
                <div class="row mb-3 align-items-end">
                  <div class="col-auto">
                    <label class="form-label">Alergi Obat</label>
                    <input type="text" name="alergiObat" class="form-control">
                  </div>
                  <div class="col">
                    <label class="form-label">Alergi Makanan</label>
                    <input type="text" name="alergiMakanan" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mx-4">
          <div class="card-header">
            <h6 class="mb-0">Data Pemeriksaan Pasien</h6>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-12 mb-3">
                <label class="form-label">Tanggal Pemeriksaan</label>
                <input type="datetime-local" class="form-control" name="tglWaktu">
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Dokter Praktik</label>
                <select class="form-select" id="select-pasien" name="dokter" required>
                  <option value="">Pilih Dokter</option>
                  <?php foreach ($dokter as $d): ?>
                    <option value="<?= $d->id ?>"><?= htmlspecialchars($d->namaDokter) ?> (<?= htmlspecialchars($d->Jadwal) ?>)</option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Gigi</label>
                <input type="text" class="form-control" name="gigi">
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Diagnosa</label>
                <textarea class="form-control" name="diagnosa"></textarea>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Perawatan</label>
                <textarea class="form-control" name="perawatan"></textarea>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan"></textarea>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="col d-flex justify-content-end mx-4 my-3">
      <button type="submit" class="btn btn-primary px-3">Simpan</button>
    </div>
    </form>
  </div>

  </div>

  <!--start footer-->
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