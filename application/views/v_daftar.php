<!doctype html>
<html lang="id" class="light-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Geligi - Daftar</title>

  <!-- Loader -->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!-- Plugins & CSS -->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: #f5f6fa;">

  <!-- Wrapper -->
  <div class="wrapper">

    <!-- Logo Header -->
    <header>
      <nav class="navbar navbar-light bg-transparent p-4">
        <div class="container d-flex justify-content-center">
          <a href="<?= base_url() ?>">
            <img src="<?= base_url('depan/img/logodental.png') ?>" width="160" alt="Logo Dental" />
          </a>
        </div>
      </nav>
    </header>

    <!-- Daftar Form -->
    <div class="container">
      <div class="row justify-content-center align-items-center" style="min-height: 75vh;">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow-sm rounded-4 border-0">
            <div class="card-body p-4">
              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                  <?= $this->session->flashdata('error'); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>

              <div class="text-center mb-4">
                <h4 class="fw-bold">Buat Akun Baru</h4>
                <p class="text-muted mb-0">Isi data di bawah untuk mendaftar</p>
              </div>

              <form method="POST" action="<?= base_url('daftar/simpan') ?>" class="row g-3">
                <div class="col-12">
                  <label class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control rounded-3" required>
                </div>
                <div class="col-12">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control rounded-3" required>
                </div>
                <div class="col-12">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control rounded-3" required>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100 rounded-pill">Daftar</button>
                </div>
              </form>

              <!-- Atau -->
              <div class="text-center my-3">
                <div class="position-relative">
                  <hr>
                  <span class="position-absolute top-50 start-50 translate-middle px-3 bg-white text-muted small">atau</span>
                </div>
              </div>

              <!-- Login Sosial -->
              <div class="d-flex justify-content-center my-2">
                <a href="javascript:;" class="btn btn-outline-secondary rounded-circle p-2">
                  <img src="assets/images/icons/google.png" alt="Login Google" width="24">
                </a>
              </div>

              <!-- Sudah punya akun -->
              <div class="text-center mt-3">
                <p class="mb-0">Sudah punya akun?
                  <a href="<?= base_url('masuk') ?>" class="text-decoration-none fw-medium text-primary">Masuk</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- End wrapper -->

</body>

</html>