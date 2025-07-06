<!doctype html>
<html lang="en" class="light-theme">
<head>
    <meta charset="UTF-8">
    <title>Preview Data Reservasi</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="mb-4">Preview Data Rekam Medis</h3>

    <table class="table table-bordered">
        <tr><th>Nama</th><td><?= $detail->nama ?></td></tr>
        <tr><th>Tempat, Tanggal Lahir</th><td><?= $detail->tmpt_lahir ?>, <?= date('d-m-Y', strtotime($detail->tgl_lahir)) ?></td></tr>
        <tr><th>Jenis Kelamin</th><td><?= ucfirst($detail->jk) ?></td></tr>
        <tr><th>Alamat</th><td><?= $detail->alamat ?></td></tr>
        <tr><th>No. HP</th><td><?= $detail->no_hp ?></td></tr>
        <tr><th>Pekerjaan</th><td><?= $detail->pekerjaan ?></td></tr>
        <tr><th>Status Pernikahan</th><td><?= ucfirst($detail->status) ?></td></tr>

        <tr class="table-secondary"><th colspan="2">Data Medis</th></tr>
        <tr><th>Golongan Darah</th><td><?= $detail->goldar ?></td></tr>
        <tr><th>Tekanan Darah</th><td><?= $detail->blood_press ?></td></tr>
        <tr><th>Riwayat Jantung</th><td><?= $detail->jantung ?></td></tr>
        <tr><th>Diabetes</th><td><?= $detail->diabetes ?></td></tr>
        <tr><th>Haemophilia</th><td><?= $detail->haemophilia ?></td></tr>
        <tr><th>Hepatitis</th><td><?= $detail->hepatitis ?></td></tr>
        <tr><th>Sakit Lain</th><td><?= $detail->sakit_lain ?></td></tr>
        <tr><th>Alergi Obat</th><td><?= $detail->alergi_obat ?></td></tr>
        <tr><th>Alergi Makanan</th><td><?= $detail->alergi_makanan ?></td></tr>

        <tr class="table-secondary"><th colspan="2">Data Rekam Medis</th></tr>
        <tr><th>No Rekam Medis</th><td><?= $detail->no_rekammedis ?></td></tr>
        <tr><th>Tanggal Periksa</th><td><?= date('d-m-Y', strtotime($detail->tgl_periksa)) ?></td></tr>
        <tr><th>Gigi</th><td><?= $detail->gigi ?></td></tr>
        <tr><th>Diagnosa</th><td><?= $detail->diagnosa ?></td></tr>
        <tr><th>Perawatan</th><td><?= $detail->perawatan ?></td></tr>
        <tr><th>Keterangan Tambahan</th><td><?= $detail->keterangan ?></td></tr>
    </table>

    <a href="<?= base_url('admin/rekammedis') ?>" class="btn btn-secondary mt-2">Kembali</a>
</div>
</body>
</html>
