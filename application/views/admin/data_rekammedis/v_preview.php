<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="UTF-8">
    <title>Preview Data Reservasi</title>
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
                    <div class="breadcrumb-title pe-3">Preview Data Rekam Medis</div>
                </div>

                <!-- Card Preview -->
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-4">Preview Data Reservasi</h4>
                        <form>
                            <div class="row g-3">

                                <!-- Informasi Pasien -->
                                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                                    <h5>Data Diri Pasien</h5>
                                    <div class="ms-auto">
                                        <a href="<?= base_url('admin/rekammedis/preview/tambah') ?>" class="btn btn-primary rounded-pill px-4">
                                            + Tambah Data
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" value="<?= $detail->nama ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" value="<?= $detail->tmpt_lahir ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" value="<?= $detail->tgl_lahir ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" disabled>
                                        <option <?= $detail->jk == 'laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                        <option <?= $detail->jk == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label>Alamat</label>
                                    <textarea class="form-control" disabled><?= $detail->alamat ?></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label>No. HP</label>
                                    <input type="text" class="form-control" value="<?= $detail->no_hp ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" value="<?= $detail->pekerjaan ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Status Pernikahan</label>
                                    <select class="form-control" disabled>
                                        <option <?= $detail->status == 'menikah' ? 'selected' : '' ?>>Menikah</option>
                                        <option <?= $detail->status == 'belum menikah' ? 'selected' : '' ?>>Belum Menikah</option>
                                    </select>
                                </div>

                                <!-- Data Medik Pasien -->
                                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                                    <h5 class="mt-4">Data Medik Pasien</h5>
                                    <div class="ms-auto">
                                        <a href="<?= base_url('admin/rekammedis/preview/tambah') ?>" class="btn btn-primary rounded-pill px-4">
                                            + Tambah Data
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>Golongan Darah</label>
                                    <input type="text" class="form-control" value="<?= $detail->goldar ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Tekanan Darah</label>
                                    <input type="text" class="form-control" value="<?= $detail->blood_press ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Riwayat Jantung</label>
                                    <input type="text" class="form-control" value="<?= $detail->jantung ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Diabetes</label>
                                    <input type="text" class="form-control" value="<?= $detail->diabetes ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Haemophilia</label>
                                    <input type="text" class="form-control" value="<?= $detail->haemophilia ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Hepatitis</label>
                                    <input type="text" class="form-control" value="<?= $detail->hepatitis ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Sakit Lain</label>
                                    <input type="text" class="form-control" value="<?= $detail->sakit_lain ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Alergi Obat</label>
                                    <input type="text" class="form-control" value="<?= $detail->alergi_obat ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Alergi Makanan</label>
                                    <input type="text" class="form-control" value="<?= $detail->alergi_makanan ?>" readonly>
                                </div>

                                <!-- Data Pemeriksaan Pasien -->
                                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                                    <h5 class="mt-4">Data Pemeriksaan Pasien</h5>
                                    <div class="ms-auto">
                                        <a href="<?= base_url('admin/rekammedis/preview/tambah') ?>" class="btn btn-primary rounded-pill px-4">
                                            + Tambah Data
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label>No Rekam Medis</label>
                                    <input type="text" class="form-control" value="<?= $detail->no_rekammedis ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Tanggal Periksa</label>
                                    <input type="date" class="form-control" value="<?= $detail->tgl_periksa ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Gigi</label>
                                    <input type="text" class="form-control" value="<?= $detail->gigi ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Diagnosa</label>
                                    <input type="text" class="form-control" value="<?= $detail->diagnosa ?>" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label>Perawatan</label>
                                    <input type="text" class="form-control" value="<?= $detail->perawatan ?>" readonly>
                                </div>

                                <div class="col-md-12">
                                    <label>Keterangan Tambahan</label>
                                    <textarea class="form-control" disabled><?= $detail->keterangan ?></textarea>
                                </div>
                            </div>
                        </form>
                        <a href="<?= base_url('admin/rekammedis') ?>" class="btn btn-secondary mt-2">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- end page content-->
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