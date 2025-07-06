<!doctype html>
<html lang="en" class="light-theme">
    <h3>Preview Data Reservasi</h3>
<table class="table">
  <tr><th>Nama</th><td><?= $detail->nama ?></td></tr>
  <tr><th>Tempat, Tgl Lahir</th><td><?= $detail->tmpt_lahir ?>, <?= $detail->tgl_lahir ?></td></tr>
  <tr><th>Jenis Kelamin</th><td><?= ucfirst($detail->jk) ?></td></tr>
  <tr><th>Alamat</th><td><?= $detail->alamat ?></td></tr>
  <tr><th>Nomor HP</th><td><?= $detail->no_hp ?></td></tr>
  <tr><th>Keluhan</th><td><?= $detail->keluhan ?></td></tr>
  <tr><th>No Antrian</th><td><?= $detail->no_antrian ?></td></tr>
</table>
<a href="<?= base_url('admin/reservasi') ?>" class="btn btn-secondary">Kembali</a>
