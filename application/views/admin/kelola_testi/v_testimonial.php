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
									<tr>
										<td>ini@email.com</td>
										<td>5</td>
										<td class="wrap-text">"Saya datang untuk perawatan behel, dokternya sabar banget jelasin prosesnya.
											Prosedur cepat, hasilnya memuaskan.
											Suasana klinik juga nyaman dan bikin tenang."</td>
										<td>
											<div class="col">
												<button type="button" class="btn btn-sm btn-off">
													<ion-icon name="arrow-up-circle-sharp"></ion-icon>Unggah</button>
												<button type="button" class="btn btn-sm btn-danger extra-small-btn ">
													<ion-icon name="trash-sharp"></ion-icon></button>
											</div>
											<div style="align-self: flex-end; font-size: 9px; color: #999; font-style: italic; margin-top: 4px;">
												Diunggah oleh Amanda • 2025-06-08 20:15:34
											</div>
										</td>
									</tr>
									<tr>
										<td>itu@gmail.com</td>
										<td>4</td>
										<td class="wrap-text">"Pelayanannya luar biasa! Dokternya ramah, proses scalling-nya nyaman,
											dan ruangannya bersih banget. Saya jadi nggak takut ke dokter gigi lagi.
											Recommended banget buat perawatan gigi!"</td>
										<td>

											<div class="col">
												<button type="button" class="btn btn-sm btn-off ">
													<ion-icon name="arrow-up-circle-sharp"></ion-icon>Unggah</button>
												<button type="button" class="btn btn-sm btn-danger extra-small-btn ">
													<ion-icon name="trash-sharp"></ion-icon></button>
											</div>
											<div style="align-self: flex-end; font-size: 9px; color: #999; font-style: italic; margin-top: 4px;">
												Diunggah oleh Amanda • 2025-06-08 20:15:34
											</div>
										</td>

									</tr>
									<tr>
										<td>ii@examples.com</td>
										<td>5</td>
										<td class="wrap-text">"Kliniknya bersih, stafnya ramah, dan hasil tambal gigi saya rapi.
											Selebihnya oke banget!"</td>
										<td>
											<div class="col">
												<input type="file" id="uploadFile" style="display: none;" />
												<button type="button" class="btn btn-sm btn-primary extra-small-btn" onclick="document.getElementById('uploadFile').click();">
													<ion-icon name="arrow-up-circle-sharp"></ion-icon> Unggah
												</button>
												<button type="button" class="btn btn-sm btn-danger extra-small-btn ">
													<ion-icon name="trash-sharp"></ion-icon></button>
											</div>

										</td>

									</tr>
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