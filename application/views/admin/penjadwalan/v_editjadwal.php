<!doctype html>
<html lang="en" class="light-theme">

<head>
	<?php $this->load->view("admin/_templates/header.php") ?>
</head>

<body>
	<!--start wrapper-->
	<div class="wrapper">

		<!--start topbar-->
		<?php $this->load->view("admin/_templates/topbar.php") ?>
		<!--end topbar-->

		<!--start sidebar -->
		<?php $this->load->view("admin/_templates/sidebar.php") ?>
		<!--end sidebar -->

		<!-- start page content wrapper-->
		<div class="page-content-wrapper">
			<!-- start page content-->
			<div class="page-content">

				<!--start breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Jadwal</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<form method="post" action="<?= base_url('admin/jadwal/update/' . $jadwal->id_jadwal) ?>" enctype="multipart/form-data">
						<div class="card-body">

							<!-- Dokter Praktik -->
							<!-- <div class="mb-3">
								<label class="form-label">Dokter Praktik</label>
								<select class="form-select" name="dokterLama" required>
									<option value="">Pilih Dokter</option>
									<?php foreach ($dokter as $d) : ?>
										<option value="<?= $d->id_user ?>" <?= $jadwal->id_user == $d->id_user ? 'selected' : '' ?>>
											<?= $d->nama ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div> -->
							
							<input type="hidden" name="id_dokter" value="<?= $jadwal->id_dok ?>" class="form-control" required>

							<div class="mb-3">
								<label class="form-label">Nama Dokter</label>
								<input type="text" name="dokter" value="<?= $jadwal->nama ?>" class="form-control" required>
							</div>


							<!-- Jam Praktik -->
							<div class="mb-3">
								<label class="form-label">Jam Praktik</label>
								<input type="time" name="waktu" class="form-control" value="<?= $jadwal->waktu ?>" required>
							</div>

							<!-- Hari / Tanggal -->
							<div class="mb-3">
								<label class="form-label">Hari / Tanggal</label>
								<input type="date" name="date" class="form-control" value="<?= $jadwal->tgl ?>" required>
							</div>

							<label class="form-label">Status</label>
							<select class="form-select mb-3" name="status" required>
								<option value="">-- Pilih Status --</option>
								<option value="aktif">Aktif</option>
								<option value="tidak_aktif">Tidak Aktif</option>
							</select>

							<!-- Gambar -->
							<div class="mb-3">
								<label class="form-label">Gambar (Opsional)</label>
								<input type="file" name="gambar" class="form-control">
								<?php if (!empty($jadwal->gambar)) : ?>
									<div class="mt-2">
										<img src="<?= base_url('uploads/jadwal/' . $jadwal->gambar) ?>" alt="Gambar Jadwal" style="max-width: 150px;">
									</div>
								<?php endif; ?>
							</div>

							<!-- Tombol Submit -->
							<div class="d-flex justify-content-end">
								<a href="<?= base_url('admin/jadwal') ?>" class="btn btn-secondary me-2">Batal</a>
								<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
							</div>

						</div>
					</form>
				</div>

			</div>
			<!--end page content-->
		</div>
		<!--end page content wrapper-->

		<!--start footer-->
		<?php $this->load->view("admin/_templates/footer.php") ?>
		<!--end footer-->

		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>

		<!--start overlay-->
		<div class="overlay"></div>
		<!--end overlay-->

	</div>
	<!--end wrapper-->

	<!-- JS Files -->
	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/main.js') ?>"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</body>

</html>