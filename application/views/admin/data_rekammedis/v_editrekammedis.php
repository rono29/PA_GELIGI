<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="UTF-8">
    <title>Edit Rekam Medis</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h3 class="mb-4">Edit Data Rekam Medis</h3>

    <form action="<?= base_url('admin/rekammedis/update/' . $detail->id_RM) ?>" method="post">
        <table class="table table-bordered">
            <!-- Data Pasien (readonly) -->
            <tr><th>Nama</th><td><?= $detail->nama ?></td></tr>
            <tr><th>Tempat, Tanggal Lahir</th><td><?= $detail->tmpt_lahir ?>, <?= date('d-m-Y', strtotime($detail->tgl_lahir)) ?></td></tr>
            <tr><th>Jenis Kelamin</th><td><?= ucfirst($detail->jk) ?></td></tr>
            <tr><th>Alamat</th><td><?= $detail->alamat ?></td></tr>
            <tr><th>No. HP</th><td><?= $detail->no_hp ?></td></tr>
            <tr><th>Pekerjaan</th><td><?= $detail->pekerjaan ?></td></tr>
            <tr><th>Status Pernikahan</th><td><?= ucfirst($detail->status) ?></td></tr>

            <!-- Data Medis (readonly) -->
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

            <!-- Data Rekam Medis (editable) -->
            <tr class="table-secondary"><th colspan="2">Data Rekam Medis</th></tr>
            <tr>
                <th>No Rekam Medis</th>
                <td><input type="text" name="no_rekammedis" class="form-control" value="<?= $detail->no_rekammedis ?>"></td>
            </tr>
            <tr>
                <th>Tanggal Periksa</th>
                <td><input type="date" name="tgl_periksa" class="form-control" value="<?= $detail->tgl_periksa ?>"></td>
            </tr>
            <tr>
                <th>Gigi</th>
                <td><input type="text" name="gigi" class="form-control" value="<?= $detail->gigi ?>"></td>
            </tr>
            <tr>
                <th>Diagnosa</th>
                <td><input type="text" name="diagnosa" class="form-control" value="<?= $detail->diagnosa ?>"></td>
            </tr>
            <tr>
                <th>Perawatan</th>
                <td><input type="text" name="perawatan" class="form-control" value="<?= $detail->perawatan ?>"></td>
            </tr>
            <tr>
                <th>Keterangan Tambahan</th>
                <td><textarea name="keterangan" class="form-control"><?= $detail->keterangan ?></textarea></td>
            </tr>
        </table>

        <a href="<?= base_url('admin/rekammedis') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
</body>
</html>
