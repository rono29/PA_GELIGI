<!doctype html>
<html lang="en" class="light-theme">
   <head>
    <?php $this->load->view("admin/_templates/header.php")?>
  </head>
  <body>
    

 <!--start wrapper-->
    <div class="wrapper">

        <!--start topbar-->
        <?php $this->load->view("admin/_templates/topbar.php")?>
        <!--end topbar-->

        <!--start sidebar -->
        <?php $this->load->view("admin/_templates/sidebar.php")?>
        <!--end sidebar -->

        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <!--start breadcrumb-->
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Kelola FAQ</div>
          </div>
          <br>
            <div class="col">
			<a class="btn btn-primary px-5" href="<?php echo base_url() . 'admin/faq/tambah'?>">Tambah Data</a>
		</div>
     <br><br>
          <!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Pertanyaan</th>
										<th>Penjelasan</th>
										<th>Aksi</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Pelayanan Apa Saja Disini?</td>
										<td style="position: relative;">
											<div style="display: flex; flex-direction: column;">
												<div>Ada Scalling Untuk Membersihkan gigi</div>
												<div style="align-self: flex-end; font-size: 9px; color: #999; font-style: italic; margin-top: 4px;">
													Diedit oleh Amanda • 2025-06-08 20:15:34
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center gap-3 fs-6">
												<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
												<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
											</div>
										</td>

									</tr>
									<tr>
										<td>Jam berapa bukanya?</td>
										<td style="position: relative;">
											<div style="display: flex; flex-direction: column;">
												<div>9 pagi hingga 9 malam di hari senin sampai sabtu</div>
												<div style="align-self: flex-end; font-size: 9px; color: #999; font-style: italic; margin-top: 4px;">
													Diedit oleh Amanda • 2025-06-08 20:15:34
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center gap-3 fs-6">
												<a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
												<a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
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
   </div>
  </div>
</div>

     <!--start footer-->
          <?php $this->load->view("admin/_templates/footer.php")?>
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