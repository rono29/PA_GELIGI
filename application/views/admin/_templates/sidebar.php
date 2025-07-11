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
    $current = uri_string();
    $role = $this->session->userdata('role');
    ?>

    <!-- Dashboard: semua role bisa lihat -->
    <a href="<?= base_url('admin/dashboard') ?>"
      class="tp-link <?= $current == 'admin/dashboard' ? 'active' : '' ?>"
      style="<?= $current == 'admin/dashboard' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
      <div class="parent-icon"><ion-icon name="home-sharp"></ion-icon></div>
      <div class="menu-title">Dashboard</div>
    </a>

    <!-- Untuk admin dan dokter -->
    <?php if (in_array($role, ['staf', 'dokter'])): ?>
      <a href="<?= base_url('admin/reservasi') ?>"
        class="tp-link <?= $current == 'admin/reservasi' ? 'active' : '' ?>"
        style="<?= $current == 'admin/reservasi' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="bag-handle-sharp"></ion-icon></div>
        <div class="menu-title">Data Reservasi</div>
      </a>

      <a href="<?= base_url('admin/rekammedis') ?>"
        class="tp-link <?= $current == 'admin/rekammedis' ? 'active' : '' ?>"
        style="<?= $current == 'admin/rekammedis' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="briefcase-sharp"></ion-icon></div>
        <div class="menu-title">Data Rekam Medis</div>
      </a>

      <a href="<?= base_url('admin/antrian') ?>"
        class="tp-link <?= $current == 'admin/antrian' ? 'active' : '' ?>"
        style="<?= $current == 'admin/antrian' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="gift-sharp"></ion-icon></div>
        <div class="menu-title">Antrian</div>
      </a>

      <a href="<?= base_url('admin/jadwal') ?>"
        class="tp-link <?= $current == 'admin/jadwal' ? 'active' : '' ?>"
        style="<?= $current == 'admin/jadwal' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="leaf-sharp"></ion-icon></div>
        <div class="menu-title">Penjadwalan</div>
      </a>
    <?php endif; ?>

    <!-- Hanya untuk admin -->
    <?php if ($role == 'staf'): ?>
      <a href="<?= base_url('admin/layanan') ?>"
        class="tp-link <?= $current == 'admin/layanan' ? 'active' : '' ?>"
        style="<?= $current == 'admin/layanan' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="newspaper-sharp"></ion-icon></div>
        <div class="menu-title">Kelola Layanan</div>
      </a>

      <a href="<?= base_url('admin/artikel') ?>"
        class="tp-link <?= $current == 'admin/artikel' ? 'active' : '' ?>"
        style="<?= $current == 'admin/artikel' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="server-sharp"></ion-icon></div>
        <div class="menu-title">Kelola Artikel</div>
      </a>

      <a href="<?= base_url('admin/faq') ?>"
        class="tp-link <?= $current == 'admin/faq' ? 'active' : '' ?>"
        style="<?= $current == 'admin/faq' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="lock-closed-sharp"></ion-icon></div>
        <div class="menu-title">Kelola FAQ</div>
      </a>

      <a href="<?= base_url('admin/testimonial') ?>"
        class="tp-link <?= $current == 'admin/testimonial' ? 'active' : '' ?>"
        style="<?= $current == 'admin/testimonial' ? 'background: linear-gradient(90deg, #a94b87, #d16ba5); font-weight:bold; color:white;' : '' ?>">
        <div class="parent-icon"><ion-icon name="person-circle-sharp"></ion-icon></div>
        <div class="menu-title">Kelola Testimonial</div>
      </a>
    <?php endif; ?>
  </ul>

  <!--end navigation-->
</aside>