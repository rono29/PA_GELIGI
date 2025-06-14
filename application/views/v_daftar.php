<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>Geligi - Daftar</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-3">
        <div class="container-fluid" style="display: flex; justify-content: center;">
          <a href="javascript:;">
            <img src="<?= base_url('depan/img/logodental.png') ?>" width="140" alt="" />
          </a>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-1">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Daftar</h4>
                <p>Buat Akun Baru</p>
              </div>
              <form class="form-body row g-3">
                <div class="col-12">
                  <label for="inputName" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="inputName">
                </div>
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword">
                </div>

                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="button" class="btn btn-primary">Daftar</button>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="position-relative border-bottom my-3">
                    <div class="position-absolute seperator translate-middle-y">or continue with</div>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                    <a href="javascript:;" class=""><img src="assets/images/icons/google.png" alt=""></a>
                  </div>
                </div>
                <div class="col-12 col-lg-12 text-center">
                  <p class="mb-0">Sudah punya akun? <a href="<?= base_url('masuk') ?>">Masuk</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end wrapper-->


</body>

</html>