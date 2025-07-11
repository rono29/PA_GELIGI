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
					<div class="breadcrumb-title pe-3">Kelola Layanan</div>
				</div>
				<br>
				<div class="col">
					<a class="btn btn-primary px-5" href="<?php echo base_url() . 'admin/layanan/tambah' ?>">Tambah Data</a>
				</div><br><br>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Deskripsi</th>
										<th>Gambar</th>
										<th>Aksi</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($layanan as $row): ?>
										<tr>
											<td><?= htmlspecialchars($row->judul) ?></td>
											<td style="position: relative;" class="wrap-text">
												<div style="display: flex; flex-direction: column;">
													<div><?= nl2br(htmlspecialchars($row->deskripsi)) ?></div>
													<!-- Optional info tambahan -->
													<div style="align-self: flex-end; font-size: 9px; color: #999; font-style: italic; margin-top: 4px;">
														Diedit Oleh: <?= $row->id_staf ?>•
														<?= date('Y-m-d H:i:s', strtotime($row->updated_at ?? $row->created_at)) ?>
													</div>
												</div>
											</td>
											<td>
												<img src="<?= base_url('admin/layanan/gambar/' . $row->id_layanan) ?>" style="width: 100px;" alt="gambar">
											</td>
											<td>
												<div class="d-flex align-items-center gap-3 fs-6">
													<a href="<?= base_url('admin/layanan/edit/' . $row->id_layanan) ?>"
														class="text-warning" title="Edit">
														<ion-icon name="pencil-sharp"></ion-icon>
													</a>

													<a href="<?= base_url('admin/layanan/delete/' . $row->id_layanan) ?>"
														class="text-danger"
														onclick="return confirm('Yakin ingin menghapus data ini?')"
														title="Delete">
														<ion-icon name="trash-sharp"></ion-icon>
													</a>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>

							</table>
						</div>
					</div>
				</div>
				<!-- end page content-->
			</div>
			<!--end page content wrapper-->


			<!--start footer-->
			<footer class="footer">
				<div class="footer-text">
					Copyright © 2021. All right reserved.
				</div>
			</footer>
			<!--end footer-->


			<!--Start Back To Top Button-->
			<<a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>



				<!--start overlay-->
				<div class="overlay"></div>
				<!--end overlay-->

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
					title: 'Berhasil!',
					text: '<?= $this->session->flashdata('success') ?>',
					showConfirmButton: false,
					timer: 2000
				});
			</script>
		<?php endif; ?>


</body>

</html>