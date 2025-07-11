<!doctype html>
<html lang="id" class="light-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Geligi Dental - Login</title>

  <!-- Loader -->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!-- Bootstrap & Plugins -->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body style="background-color: #f5f6fa;">

  <div class="wrapper">

    <!-- Header Logo -->
    <header>
      <nav class="navbar navbar-light bg-transparent p-4">
        <div class="container d-flex justify-content-center">
          <a href="<?= base_url() ?>">
            <img src="<?= base_url('depan/img/logodental.png') ?>" width="160" alt="Logo Dental" />
          </a>
        </div>
      </nav>
    </header>

    <!-- Login Card -->
    <div class="container">
      <div class="row justify-content-center align-items-center" style="min-height: 75vh;">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow-sm rounded-4 border-0">
            <div class="card-body p-4">

              <div class="text-center mb-4">
                <h4 class="fw-bold">Masuk ke Akun</h4>
                <p class="text-muted mb-1">Selamat datang kembali! Silakan login.</p>

                <!-- Tombol Kembali ke Beranda -->
                <a href="<?= base_url('home') ?>">Kembali ke Home</a>
              </div>

              <!-- Error Message -->
              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger mt-3">
                  <?= $this->session->flashdata('error') ?>
                </div>
              <?php endif; ?>

              <form action="<?= base_url('masuk/login') ?>" method="post" class="row g-3">
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control rounded-3" id="inputEmail" name="email" required>
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control rounded-3" id="inputPassword" name="password" required>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100 rounded-pill">Masuk</button>
                </div>
              </form>

              <!-- Atau -->
              <div class="text-center my-3">
                <div class="position-relative">
                  <hr>
                  <span class="position-absolute top-50 start-50 translate-middle px-3 bg-white text-muted small">atau</span>
                </div>
              </div>

              <!-- Social Login -->
              <div class="d-flex justify-content-center my-2">
                <a href="javascript:;" class="btn btn-outline-secondary rounded-circle p-2">
                  <img src="assets/images/icons/google.png" alt="Login Google" width="24">
                </a>
              </div>

              <!-- Link ke Daftar -->
              <div class="text-center mt-3">
                <p class="mb-0">Belum punya akun? <a href="<?= base_url('daftar') ?>" class="text-decoration-none fw-medium text-primary">Daftar</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>