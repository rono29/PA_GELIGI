<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="UTF-8">
    <title>Edit FAQ</title>
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
                    <div class="breadcrumb-title pe-3">Edit Data FAQ</div>
                </div>

                <!-- Card Preview -->
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <h4 class="fw-bold mb-4">Edit Data FAQ</h4>

                        <?php $role = $this->session->userdata('role'); ?>
                        <form action="<?= base_url('admin/faq/update/' . $faq->id_staf) ?>" method="post">
                            <div class="form-group">
                                <label>Pertanyaan</label>
                                <input type="text" name="pertanyaan" class="form-control" value="<?= $faq->pertanyaan ?>" required>
                            </div>

                            <div class="form-group mt-2">
                                <label>Penjelesan</label>
                                <textarea name="jawaban" class="form-control" required><?= $faq->jawaban ?></textarea>
                            </div>

                            <div class="col-12 d-flex justify-content-between mt-4">
                                <a href="<?= base_url('admin/faq') ?>" class="btn btn-secondary px-2 m-3">Kembali</a>
                                <button type="submit" class="btn btn-primary px-2 m-3">Simpan</button>
                            </div>
                        </form>
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