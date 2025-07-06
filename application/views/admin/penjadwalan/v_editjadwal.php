<form method="post" action="<?= base_url('admin/jadwal/update/' . $jadwal->id_jadwal) ?>">
	<label>Nama Dokter</label>
	<input type="text" name="dokter" value="<?= $jadwal->nama ?>" class="form-control" required>

	<label>Tanggal</label>
	<input type="date" name="date" value="<?= $jadwal->tgl ?>" class="form-control" required>

	<label>Waktu</label>
	<input type="time" name="waktu" value="<?= $jadwal->waktu ?>" class="form-control" required>

	<br>
	<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>
