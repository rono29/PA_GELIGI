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
            <div class="breadcrumb-title pe-3">Dashboard</div>
          </div>
          <!--end breadcrumb-->


          <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3">
             <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Total Data Reservasi</p>
                      <h4 class="mb-0 text-info">1.5M</h4>
                    </div>
                    <div class="ms-auto text-info fs-2">
                      <ion-icon name="people-sharp"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
             <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Total Rekam Medis</p>
                      <h4 class="mb-0 text-info">1.5M</h4>
                    </div>
                    <div class="ms-auto text-info fs-2">
                      <ion-icon name="people-sharp"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <p class="mb-1">Antrian Saat Ini</p>
                      <h4 class="mb-0 text-info">1.5M</h4>
                    </div>
                    <div class="ms-auto text-info fs-2">
                      <ion-icon name="people-sharp"></ion-icon>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          <!--end row-->


             <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0">Reservasi Hari Ini</h6>
                   <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
                <input class="form-control" type="text" placeholder="Search for anything">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div>
             </form>
             <a class="nav-link" href="javascript:;">
                    <div class="">
                      <ion-icon name="search-sharp"></ion-icon>
                    </div>
                  </a>
        
                 </div>
                 <div class="table-responsive mt-2">
                  <table class="table align-middle mb-0">
                    <thead class="table-light">
                      <tr>
                        <th>#ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>#89742</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="<?= base_url('assets/images/products/11.png') ?>" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$214</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 8, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#68570</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="<?= base_url('assets/images/products/07.png') ?>" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Sports Time Watch</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$185</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 9, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#38567</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="<?= base_url('assets/images/products/17.png') ?>" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Women Red Heals</h6>
                            </div>
                          </div>
                        </td>
                        <td>3</td>
                        <td>$356</td>
                        <td><span class="badge alert-danger">Cancelled</span></td>
                        <td>Apr 10, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#48572</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="<?= base_url('assets/images/products/04.png') ?>" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$149</td>
                        <td><span class="badge alert-success">Completed</span></td>
                        <td>Apr 11, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#96857</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="<?= base_url('assets/images/products/10.png') ?>" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                            </div>
                          </div>
                        </td>
                        <td>2</td>
                        <td>$199</td>
                        <td><span class="badge alert-danger">Cancelled</span></td>
                        <td>Apr 15, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><ion-icon name="pencil-sharp"></ion-icon></a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><ion-icon name="trash-sharp"></ion-icon></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>#96857</td>
                        <td>
                          <div class="d-flex align-items-center gap-3">
                            <div class="product-box border">
                               <img src="<?= base_url('assets/images/products/12.png') ?>" alt="">
                            </div>
                            <div class="product-info">
                              <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                            </div>
                          </div>
                        </td>
                        <td>1</td>
                        <td>$699</td>
                        <td><span class="badge alert-warning">Pending</span></td>
                        <td>Apr 18, 2021</td>
                        <td>
                          <div class="d-flex align-items-center gap-3 fs-6">
                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><ion-icon name="eye-sharp"></ion-icon></a>
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

          </div>
          <!-- end page content-->
         </div>
         <!--end page content wrapper-->


           <!--start footer-->
          <?php $this->load->view("admin/_templates/footer.php")?>
          <!--end footer-->

         <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->

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
    <script src="<?= base_url('assets/plugins/chartjs/chart.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/index3.js') ?>"></script>
    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>


  </body>
</html>