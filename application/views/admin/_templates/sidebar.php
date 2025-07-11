<?php
$role = $this->session->userdata('role');
$controller = $this->router->fetch_class(); // otomatis ambil controller saat ini
?>

<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="<?= base_url('depan/img/logodental.png') ?>" class="logo-icon" alt="logo icon">
    </div>
    <div class="toggle-icon ms-auto">
      <ion-icon name="menu-sharp"></ion-icon>
    </div>
  </div>

  <!--navigation-->
  <ul class="metismenu" id="menu">
    <?php
    $role = $this->session->userdata('role');
    $controller = $this->router->fetch_class();
    ?>

    <!-- Dashboard -->
    <a href="<?= base_url('admin/dashboard') ?>"
      class="tp-link <?= $controller == 'dashboard' ? 'active' : '' ?>"
      style="<?= $controller == 'dashboard' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
      <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon></div>
      <div class="menu-title">Dashboard</div>
    </a>

    <!-- Untuk staf & dokter -->
    <?php if (in_array($role, ['staf', 'dokter'])): ?>

      <a href="<?= base_url('admin/reservasi') ?>"
        class="tp-link <?= $controller == 'reservasi' ? 'active' : '' ?>"
        style="<?= $controller == 'reservasi' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="bag-handle-sharp"></ion-icon></div>
        <div class="menu-title">Data Reservasi</div>
      </a>

      <a href="<?= base_url('admin/rekammedis') ?>"
        class="tp-link <?= $controller == 'rekammedis' ? 'active' : '' ?>"
        style="<?= $controller == 'rekammedis' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="briefcase-sharp"></ion-icon></div>
        <div class="menu-title">Data Rekam Medis</div>
      </a>

      <a href="<?= base_url('admin/antrian') ?>"
        class="tp-link <?= $controller == 'antrian' ? 'active' : '' ?>"
        style="<?= $controller == 'antrian' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="gift-sharp"></ion-icon></div>
        <div class="menu-title">Antrian</div>
      </a>

      <a href="<?= base_url('admin/jadwal') ?>"
        class="tp-link <?= $controller == 'jadwal' ? 'active' : '' ?>"
        style="<?= $controller == 'jadwal' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="leaf-sharp"></ion-icon></div>
        <div class="menu-title">Penjadwalan</div>
      </a>
    <?php endif; ?>

    <!-- Hanya staf -->
    <?php if ($role == 'staf'): ?>
      <a href="<?= base_url('admin/layanan') ?>"
        class="tp-link <?= $controller == 'layanan' ? 'active' : '' ?>"
        style="<?= $controller == 'layanan' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="newspaper-sharp"></ion-icon></div>
        <div class="menu-title">Kelola Layanan</div>
      </a>

      <a href="<?= base_url('admin/artikel') ?>"
        class="tp-link <?= $controller == 'artikel' ? 'active' : '' ?>"
        style="<?= $controller == 'artikel' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="server-sharp"></ion-icon></div>
        <div class="menu-title">Kelola Artikel</div>
      </a>

      <a href="<?= base_url('admin/faq') ?>"
        class="tp-link <?= $controller == 'faq' ? 'active' : '' ?>"
        style="<?= $controller == 'faq' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="lock-closed-sharp"></ion-icon></div>
        <div class="menu-title">Kelola FAQ</div>
      </a>

      <a href="<?= base_url('admin/testimonial') ?>"
        class="tp-link <?= $controller == 'testimonial' ? 'active' : '' ?>"
        style="<?= $controller == 'testimonial' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="person-circle-sharp"></ion-icon></div>
        <div class="menu-title">Kelola Testimonial</div>
      </a>
    <?php endif; ?>
  </ul>
  <!--end navigation-->
</aside>