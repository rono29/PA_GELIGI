<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Jadwal Dokter - Geligi Dental Care</title>

  <!-- Vendor CSS -->
  <link href="<?= base_url('depan/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('depan/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('depan/css/main.css') ?>" rel="stylesheet">
</head>

<body class="solid-nav">
  <section id="jadwal" class="section">
    <div class="container">
      <div class="row">
        <?php foreach ($dokter_dengan_jadwal as $dokter): ?>
        <div class="col-lg-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                  <img src="<?= base_url('depan/img/doc.jpg') ?>" class="img-fluid rounded mb-3" alt="Foto Dokter">
                  <h4><?= $dokter->nama ?></h4>
                </div>
                <div class="col-lg-7">
                  <form class="form-reservasi">
                    <input type="hidden" name="id_dokter" value="<?= $dokter->id_user ?>">
                    <div class="mb-3">
                      <label>Pilih Tanggal</label>
                      <input type="date" class="form-control input-tanggal" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                      <label>Pilih Jam</label>
                      <div class="d-flex flex-wrap gap-2 pilihan-jam"></div>
                      <input type="hidden" name="jam" class="input-jam">
                    </div>
                    <div class="mb-3">
                      <label>Keluhan</label>
                      <textarea class="form-control input-keluhan" name="keluhan" required></textarea>
                    </div>
                    <button type="button" class="btn btn-primary btn-konfirmasi" data-nama="<?= $dokter->nama ?>">Reservasi</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Modal Konfirmasi -->
  <div class="modal fade" id="confirmModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <h5>Konfirmasi Reservasi</h5>
        <p class="text-nama-dokter"></p>
        <form id="formSubmitReservasi" method="post" action="<?= base_url('admin/reservasi/simpanLangsung') ?>">
          <input type="hidden" name="dokterLama" id="confirmIdDokter">
          <input type="hidden" name="tglLama" id="confirmTgl">
          <input type="hidden" name="waktuLama" id="confirmJamInput">
          <input type="hidden" name="keluhanLama" id="confirmKeluhanInput">

          <div class="mb-3">
            <select name="rencanaPerawatanLama" id="rencanaPerawatanLama" class="form-select" required>
              <option disabled selected>Pilih Rencana Perawatan</option>
              <option>Pencabutan Gigi (Exodontic)</option>
              <option>Pembersihan Karang Gigi (Scaling)</option>
              <option>Penambalan Gigi (Restorasi)</option>
              <option>Perawatan Saluran Akar</option>
              <option>Pembuatan Gigi Palsu (Prostesa)</option>
              <option>Merapikan Gigi (Orthodontic)</option>
              <option>Veneer + Bleaching</option>
            </select>
          </div>

          <div class="mb-3">
            <select name="jenis_reservasiLama" id="jenisReservasi" class="form-select" required>
              <option value="">Pilih Jenis Reservasi</option>
              <option value="reguler">Reguler</option>
              <option value="kontrol">Kontrol Ulang</option>
            </select>
          </div>

          <input type="hidden" name="tipe_pasien" value="lama">

          <button type="submit" class="btn btn-primary">Iya</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        </form>
      </div>
    </div>
  </div>

  <script src="<?= base_url('depan/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script>
    $(document).ready(function() {
      $('.input-tanggal').on('change', function() {
        const tanggal = $(this).val();
        const form = $(this).closest('.form-reservasi');
        const id_dokter = form.find('input[name="id_dokter"]').val();
        const pilihanJam = form.find('.pilihan-jam');

        $.post("<?= base_url('home/get_jadwal_by_dokter') ?>", {
          id_dokter,
          tanggal
        }, function(res) {
          let jadwal = JSON.parse(res);
          let html = jadwal.length ? '' : '<div class="text-muted">Tidak ada jadwal</div>';
          jadwal.forEach(j => {
            html += `<button type="button" class="btn btn-outline-primary pilih-jam" data-jam="${j.waktu}">${j.waktu.slice(0,5)}</button>`;
          });
          pilihanJam.html(html);
        });
      });

      $(document).on('click', '.pilih-jam', function() {
        const form = $(this).closest('.form-reservasi');
        form.find('.pilih-jam').removeClass('btn-primary').addClass('btn-outline-primary');
        $(this).removeClass('btn-outline-primary').addClass('btn-primary');
        form.find('.input-jam').val($(this).data('jam'));
      });

      $('.btn-konfirmasi').on('click', function() {
        const form = $(this).closest('.form-reservasi');
        const dokter = form.find('input[name="id_dokter"]').val();
        const tanggal = form.find('input[name="tanggal"]').val();
        const jam = form.find('input[name="jam"]').val();
        const keluhan = form.find('.input-keluhan').val();

        if (!tanggal || !jam || !keluhan) {
          alert('Mohon lengkapi semua data.');
          return;
        }

        $('#confirmIdDokter').val(dokter);
        $('#confirmTgl').val(tanggal);
        $('#confirmJamInput').val(jam);
        $('#confirmKeluhanInput').val(keluhan);
        $('.text-nama-dokter').text("Reservasi untuk " + $(this).data('nama') + "?");

        new bootstrap.Modal(document.getElementById('confirmModal')).show();
      });
    });
  </script>
</body>

</html>
