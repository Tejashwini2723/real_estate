<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Blog</title>
      <?php include("php_include/top.php");?>
      <?php include("php_include/head.php");?>
   </head>
   <body>
      <script type="text/javascript"></script>
      <?php include("php_include/header.php");?>
      <div class="modal fade" id="responsive-searchModal" tabindex="-1" aria-labelledby="responsive-searchModal" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="input-group"> <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2"> <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button> </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <?php include("php_include/sidebar.php");?>
      <div class="main-content app-content">
         <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
               <h1 class="page-title fw-semibold fs-18 mb-0">Dashboard</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-body">
                        <div class="row mb-5">
                           <div class="col-xl-12">
                              <h5 class="fw-semibold text-center"> Blog </h5><br>
                           </div>
                           <div class="col-xl-12">
                              <div class="tab-content" id="myTabContent1">
                                 <div class="tab-pane show active p-0 border-0" id="pricing-monthly1-pane" role="tabpanel" aria-labelledby="pricing-monthly1" tabindex="0">
                                    <div class="row justify-content-center">
                                       <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                          <div class="card custom-card overflow-hidden">
                                             <div class="card-body bg-primary position-relative d-flex justify-content-center align-items-center">
                                                 <img src="../images/1.webp" alt="Plan Icon" class="img-fluid" style="max-width: 100%; height: auto; width: 300px; object-fit: cover;">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <noscript>
         <p>To display this page you need a browser that supports JavaScript.</p>
      </noscript>
      <?php include("php_include/footer.php"); ?>
      <script type="text/javascript"></script>
      <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
      <div id="responsive-overlay"></div>
      <?php include("php_include/all_script.php"); ?>
   </body>
</html>