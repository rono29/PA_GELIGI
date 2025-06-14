  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- loader-->
	  <link href="<?= base_url('assets/css/pace.min.css') ?>" rel="stylesheet" />
	  <script src="<?= base_url('assets/js/pace.min.js') ?>"></script>

    <!--plugins-->
    <link href="<?= base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/plugins/metismenu/css/metisMenu.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap-extended.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap') ?>" rel="stylesheet">

    <!--Theme Styles-->
    <link href="<?= base_url('assets/css/dark-theme.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/semi-dark.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/header-colors.css') ?>" rel="stylesheet" />

    <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1))." - ".ucfirst($this->uri->segment(2))?></title>
  </head>