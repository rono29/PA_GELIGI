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
					<div class="breadcrumb-title pe-3">Penjadwalan</div>
				</div>
				<br>
				<?php if ($this->session->userdata('role') === 'staf'): ?>
					<div class="col">
						<a class="btn btn-primary px-5" href="<?php echo base_url() . 'admin/jadwal/tambah' ?>">Tambah Data</a>
					</div>
				<?php endif; ?>
				<br><br>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Nama Dokter</th>
										<th>Hari</th>
										<th>Jam Praktik</th>
										<th>Status</th>
										<?php if ($this->session->userdata('role') === 'staf'): ?>
											<th>Aksi</th>
										<?php endif; ?>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($reservasi as $row): ?>
										<tr>
											<td><?= $row->nama ?></td>
											<td><?= $row->hari ?></td>
											<td><?= $row->waktu ?></td>
<td>
  <?php if ($row->status === 'aktif'): ?>
    <span class="badge bg-success">Aktif</span>
  <?php else: ?>
    <span class="badge bg-danger"><?= ucfirst($row->status) ?></span>
  <?php endif; ?>
</td>											<?php if ($this->session->userdata('role') === 'staf'): ?>
												<td>
													<div class="d-flex align-items-center gap-3 fs-6">
														<a href="<?= base_url('admin/jadwal/edit/' . $row->id_jadwal) ?>" class="text-warning">
															<ion-icon name="pencil-sharp"></ion-icon>
														</a>
														<a href="<?= base_url('admin/jadwal/delete/' . $row->id_jadwal) ?>" onclick="return confirm('Yakin ingin menghapus jadwal ini?');" class="text-danger">
															<ion-icon name="trash-sharp"></ion-icon>
														</a>
													</div>
												</td>
											<?php endif; ?>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<!-- end page content-->
			</div>
			<!--end page content wrapper-->


			<!--start footer-->
			<?php $this->load->view("admin/_templates/footer.php") ?>
			<!--end footer-->


			<!--Start Back To Top Button-->
			<<a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>



				<!--start overlay-->
				<div class="overlay"></div>
				<!--end overlay-->

		</div>
	</div>
	<!--end wrapper-->


	<!-- JS Files-->
	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<!--plugins-->
	<script src="<?= base_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/datatable/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/table-datatable.js') ?>"></script>

	<!-- Main JS-->
	<script src="<?= base_url('assets/js/main.js') ?>"></script>

	<?php if ($this->session->flashdata('success')): ?>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			Swal.fire({
				icon: 'success',
				title: 'Sukses!',
				text: '<?= $this->session->flashdata('success') ?>',
				timer: 2000,
				showConfirmButton: false
			});
		</script>
	<?php endif; ?>

	<?php if ($this->session->flashdata('error')): ?>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			Swal.fire({
				icon: 'error',
				title: 'Gagal!',
				text: '<?= $this->session->flashdata('error') ?>',
				timer: 2000,
				showConfirmButton: false
			});
		</script>
	<?php endif; ?>



</body>

</html>