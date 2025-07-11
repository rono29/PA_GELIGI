<!doctype html>
<html lang="en" class="light-theme">

<head>
  <?php $this->load->view("admin/_templates/header.php") ?>
</head>

<body>
  <!--start wrapper-->
  <div class="wrapper">
    <!--start sidebar -->
    <?php $this->load->view("admin/_templates/sidebar.php") ?>
    <!--end sidebar -->
    <!--start top header-->
    <?php $this->load->view("admin/_templates/topbar.php") ?>
    <!--end top header-->
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
      <div class="container mt-4">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-pills mb-3 ms-4" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-baru-tab" data-bs-toggle="pill" data-bs-target="#pills-baru" type="button" role="tab" aria-controls="pills-baru" aria-selected="true">
                  <div class="d-flex align-items-center">
                    <div class="tab-icon"><ion-icon name="person-add-sharp" class="me-1"></ion-icon></div>
                    <div class="tab-title">Pasien Baru</div>
                  </div>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-lama-tab" data-bs-toggle="pill" data-bs-target="#pills-lama" type="button" role="tab" aria-controls="pills-lama" aria-selected="false">
                  <div class="d-flex align-items-center">
                    <div class="tab-icon"><ion-icon name="repeat-sharp" class="me-1"></ion-icon></div>
                    <div class="tab-title">Pasien Lama</div>
                  </div>
                </button>
              </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
              <!-- Tab Pasien Baru -->
              <div class="tab-pane fade show active" id="pills-baru" role="tabpanel" aria-labelledby="pills-baru-tab">
                <form action="<?= base_url('admin/reservasi/simpan') ?>" method="post">
                  <input type="hidden" name="tipe_pasien" value="baru">

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
                          <label class="form-label">Tempat Lahir</label>
                          <input type="text" name="tempat_lahir" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Tanggal Lahir</label>
                          <input type="date" name="tgl_lahir" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" id="jenis_Kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih opsi</option>
                            <option value="pria">pria</option>
                            <option value="wanita">wanita</option>
                          </select>
                        </div>
                        <div class="col-6 mb-3">
                          <label class="form-label">Pekerjaan</label>
                          <input type="text" name="Pekerjaan" class="form-control" required>
                        </div>
                        <div class="col-6 mb-3">
                          <label for="statusPernikahan" class="form-label">Status Pernikahan</label>
                          <select class="form-select" id="statusPernikahan" name="statusPernikahan" required>
                            <option value="">Pilih status pernikahan</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                            <option value="Janda/Duda">Janda/Duda</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">No Hp</label>
                          <input type="number" name="noHp" class="form-control" required>
                        </div>
                        <div class="col-12 mb-3">
                          <label class="form-label">Alamat</label>
                          <textarea class="form-control" name="alamat" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mx-4 mt-3">
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
                          <label class="form-label">Tekanan Darah ( opsional )</label>
                          <input type="text" name="tekananDarah" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Penyakit Jantung</label>
                          <select name="penyakitJantung" class="form-select" required>
                            <option value="">Pilih...</option>
                            <option value="ya">Ada</option>
                            <option value="tidak">Tidak Ada</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Diabetes</label>
                          <select name="diabetes" class="form-select" required>
                            <option value="">Pilih...</option>
                            <option value="ya">Ada</option>
                            <option value="tidak">Tidak Ada</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Haemophilia/Kelainan Darah</label>
                          <select name="kelainanDarah" class="form-select" required>
                            <option value="">Pilih...</option>
                            <option value="ya">Ada</option>
                            <option value="tidak">Tidak Ada</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Hepatitis</label>
                          <select name="hepatitis" class="form-select" required>
                            <option value="">Pilih...</option>
                            <option value="ya">Ada</option>
                            <option value="tidak">Tidak Ada</option>
                          </select>
                        </div>
                        <div class="col-12 mb-3">
                          <label class="form-label">Penyakit Lainnya</label>
                          <input type="text" name="penyakitLainnya" class="form-control">
                        </div>
                        <div class="row mb-4">
                          <div class="col-md-6">
                            <label for="alergiObatStatus" class="form-label">Alergi Obat</label>
                            <select class="form-select mb-2" id="alergiObatStatus" name="alergi_obat" onchange="toggleAlergiObatInput()">
                              <option value="">Pilih opsi</option>
                              <option value="Ada">Ada</option>
                              <option value="Tidak">Tidak</option>
                            </select>
                            <textarea class="form-control" id="alergiObatDetail" name="alergi_obat" rows="2" placeholder="Sebutkan obat yang menyebabkan alergi" style="display: none;"></textarea>
                          </div>
                          <div class="col-md-6">
                            <label for="alergiMakananStatus" class="form-label">Alergi Makanan</label>
                            <select class="form-select mb-2" id="alergiMakananStatus" name="alergi_makanan" onchange="toggleAlergiMakananInput()">
                              <option value="">Pilih opsi</option>
                              <option value="Ada">Ada</option>
                              <option value="Tidak">Tidak</option>
                            </select>
                            <textarea class="form-control" id="alergiMakananDetail" name="alergi_makanan" rows="2" placeholder="Sebutkan makanan yang menyebabkan alergi" style="display: none;"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mx-4 mt-3">
                    <div class="card-header">
                      <h6 class="mb-0">Data Reservasi Pasien</h6>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 mb-3">
                          <label class="form-label">Dokter Praktik</label>
                          <select class="form-select" name="dokterLama" required>
                            <option value="">Pilih Dokter</option>
                            <?php foreach ($dokter as $d) : ?>
                              <option value="<?= $d->id_user ?>"><?= $d->nama ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Tanggal Reservasi</label>
                          <input type="date" class="form-control" name="tgl" required>
                        </div>

                        <!--udah dropdown tinggal get data dari database waktunya-->
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Waktu Reservasi</label>
                          <select class="form-select" name="waktu" required>
                            <option value="">-- Pilih Waktu --</option>
                            <?php foreach ($waktu_jadwal as $w) : ?>
                              <option value="<?= $w->waktu ?>" <?= $jadwal->waktu == $w->waktu ? 'selected' : '' ?>>
                              <?php endforeach; ?>
                          </select>
                        </div>

                        <div class="col-6 mb-3">
                          <label class="form-label">Rencana Perawatan</label>
                          <select class="form-select" name="rencanaPerawatan">
                            <option value="">Pilih Rencana Perawatan</option>
                            <option value="Pencabutan gigi (exondontic)">Pencabutan gigi (exondontic)</option>
                            <option value="Pembersihan Karang Gigi (Scalling)">Pembersihan Karang Gigi (Scalling)</option>
                            <option value="Penambalan Gigi (Restorasi)">Penambalan Gigi (Restorasi)</option>
                            <option value="Perawatan Saluran Akar">Perawatan Saluran Akar</option>
                            <option value="Pembuatan Gigi Palsu (Protesa)">Pembuatan Gigi Palsu (Protesa)</option>
                            <option value="Merapikan Gigi (Orthodontic)">Merapikan Gigi (Orthodontic)</option>
                            <option value="Veneer + Bleaching">Veneer + Bleaching</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Jenis Reservasi</label>
                          <select class="form-select" name="jenis_reservasi" required>
                            <option value="">Pilih Jenis Reservasi</option>
                            <option value="reguler">Reguler</option>
                            <option value="kontrol">Kontrol Ulang</option>
                          </select>
                        </div>
                        <div class="col-12 mb-3">
                          <label class="form-label">Keluhan</label>
                          <textarea class="form-control" name="keluhan" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-between mt-4">
                    <a href="<?= base_url('admin/reservasi') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>

              <!-- Tab Pasien Lama -->
              <div class="tab-pane fade" id="pills-lama" role="tabpanel" aria-labelledby="pills-lama-tab">
                <form action="<?= base_url('admin/reservasi/simpan') ?>" method="post">
                  <input type="hidden" name="tipe_pasien" value="lama">
                  <div class="card mx-4">
                    <div class="card-header">
                      <h6 class="mb-0">Data Reservasi Pasien</h6>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 mb-3">
                          <label class="form-label">Cari Nama Pasien</label>
                          <select class="form-select" name="pasienLama" required>
                            <option value="">Pilih Pasien</option>
                            <?php foreach ($pasien as $p): ?>
                              <option value="<?= $p->id_user ?>"><?= $p->nama ?> - <?= $p->id_user ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="col-12 mb-3">
                          <label class="form-label">Dokter Praktik</label>
                          <select class="form-select" name="dokterLama" required>
                            <option value="">Pilih Dokter</option>
                            <?php foreach ($dokter as $d) : ?>
                              <option value="<?= $d->id_user ?>"><?= $d->nama ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>

                        <div class="col-md-6 mb-3">
                          <label class="form-label">Tanggal Reservasi</label>
                          <input type="date" class="form-control" name="tglLama" required>
                        </div>

                        <!--udah dropdown tinggal get data dari database waktunya-->
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Waktu Reservasi</label>
                          <select class="form-select" name="waktuLama" required>
                            <option value="">-- Pilih Waktu --</option>
                            <?php foreach ($waktu_jadwal as $w) : ?>
                              <option value="<?= $w->waktu ?>" <?= $jadwal->waktu == $w->waktu ? 'selected' : '' ?>>
                              <?php endforeach; ?>
                          </select>
                        </div>

                        <div class="col-12 mb-3">
                          <label class="form-label">Keluhan</label>
                          <textarea class="form-control" name="keluhanLama" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label">Jenis Reservasi</label>
                          <select class="form-select" name="jenis_reservasi" required>
                            <option value="">Pilih Jenis Reservasi</option>
                            <option value="reguler">Reguler</option>
                            <option value="kontrol">Kontrol Ulang</option>
                          </select>
                        </div>
                        <div class="col-12 mb-3">
                          <label class="form-label">Rencana Perawatan</label>
                          <select class="form-select" name="rencanaPerawatanLama">
                            <option value="">Pilih Rencana Perawatan</option>
                            <option value="Pencabutan gigi (exondontic)">Pencabutan gigi (exondontic)</option>
                            <option value="Pembersihan Karang Gigi (Scalling)">Pembersihan Karang Gigi (Scalling)</option>
                            <option value="Penambalan Gigi (Restorasi)">Penambalan Gigi (Restorasi)</option>
                            <option value="Perawatan Saluran Akar">Perawatan Saluran Akar</option>
                            <option value="Pembuatan Gigi Palsu (Protesa)">Pembuatan Gigi Palsu (Protesa)</option>
                            <option value="Merapikan Gigi (Orthodontic)">Merapikan Gigi (Orthodontic)</option>
                            <option value="Veneer + Bleaching">Veneer + Bleaching</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between mt-4">
                        <a href="<?= base_url('admin/reservasi') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
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