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
					<div class="breadcrumb-title pe-3">Kelola Testimonial</div>
				</div>
				<br>
				<br><br>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Email</th>
										<th>Rating</th>
										<th>Testimonial</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($testi as $row): ?>
										<tr>
											<td><?= htmlspecialchars($row->email) ?></td>
											<td><?= htmlspecialchars($row->rating) ?></td>
											<td class="wrap-text"><?= nl2br(htmlspecialchars($row->testimonial)) ?></td>
											<td>
												<div class="col">
													<?php if ($row->status === 'pending'): ?>
														<a href="<?= base_url('admin/testimonial/unggah/' . $row->id_testimonial) ?>"
															class="btn btn-sm btn-primary extra-small-btn"
															onclick="return confirm('Yakin ingin mengunggah testimonial ini?')">
															<ion-icon name="arrow-up-circle-sharp"></ion-icon> Unggah
														</a>
													<?php else: ?>
														<button class="btn btn-sm btn-secondary extra-small-btn" disabled>
															<ion-icon name="checkmark-circle-sharp"></ion-icon> Sudah Diunggah
														</button>
													<?php endif; ?>


													<button type="submit" class="btn btn-sm btn-danger extra-small-btn">
														<ion-icon name="trash-sharp"></ion-icon>
													</button>
												</div>
												<div style="align-self: flex-end; font-size: 9px; color: #999; font-style: italic; margin-top: 4px;">
													Status: <?= ucfirst($row->status) ?> •
													Diunggah oleh <?= $row->updated_by ?? '—' ?> •
													<?= date('Y-m-d H:i:s', strtotime($row->updated_at ?? $row->created_at)) ?>
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
			<?php $this->load->view("admin/_templates/footer.php") ?>
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


</body>

</html>