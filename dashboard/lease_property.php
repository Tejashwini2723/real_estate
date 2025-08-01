<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Buy Properties</title>
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
                  <div class="input-group">
                     <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2">
                     <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                  </div>
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
                        <li class="breadcrumb-item active" aria-current="page">Buy Properties</li>
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
                              <h5 class="fw-semibold text-center"> Buy Properties </h5>
                              <br>
                           </div>
                           <div class="col-xl-12">
                              <div class="tab-content" id="myTabContent1">
                                 <div class="tab-pane show active p-0 border-0" id="pricing-monthly1-pane" role="tabpanel" aria-labelledby="pricing-monthly1" tabindex="0">
                                    <div class="row justify-content-center">
                                       <?php 
                                          include("php_include/connect.php");
                                          $query = mysqli_query($con, "SELECT * FROM `sell` WHERE `ownership`='lease'");
                                          while ($row = mysqli_fetch_array($query)) { 
                                          ?>
                                       <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                          <div class="card custom-card overflow-hidden">
                                             <div class="card-body bg-primary position-relative d-flex justify-content-center align-items-center">
                                                <?php 
                                                   if($row['property_image'] == NULL) { 
                                                   ?> 
                                                <img src="../images/1.webp" alt="Property Image" class="img-fluid" style="max-width: 100%; height: auto; width: 300px; object-fit: cover;">
                                                <?php 
                                                   } else { 
                                                   ?>  
                                                <img src="property_images/<?php echo $row['property_image'];?>" alt="Property Image" class="img-fluid" style="max-width: 100%; height: auto; width: 300px; object-fit: cover;">													 
                                                <?php 
                                                   } 
                                                   ?>
                                             </div>
                                             <div class="card-body p-0">
                                                <div class="p-4">
                                                   <ul class="list-unstyled mb-0">
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Property Address: <?php echo $row['property_address']; ?></strong></span>
                                                      </li>
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Property Type: <?php echo $row['land_type']; ?></strong></span>
                                                      </li>
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Price: &#8377; <?php echo $row['price']; ?></strong></span>
                                                      </li>
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Ownership Type: <?php echo $row['ownership']; ?></strong></span>
                                                      </li>
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Payment Option: <?php echo $row['payment_options']; ?></strong></span>
                                                      </li>
                                                      <br>
                                                      <h5>Owner Contact Details</h5>
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Owner Name: <?php echo $row['seller_name']; ?></strong></span>
                                                      </li>
                                                      <li class="d-flex align-items-center mb-3">
                                                         <span class="me-2"><i class="fa-regular fa-circle-check fs-15 text-success"></i></span>
                                                         <span><strong class="me-1 d-inline-block">Owner Phone Number: <?php echo $row['mobile']; ?></strong></span>
                                                      </li>
                                                      <li class="d-grid">
                                                         <a href="buy_now.php?property_id=<?php echo $row['property_id']; ?>"><button class="btn btn-primary btn-wave" style="width:200px;">Buy Now</button></a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php } // End while loop ?>
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
      <div class="scrollToTop">
         <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
      </div>
      <div id="responsive-overlay"></div>
      <?php include("php_include/all_script.php"); ?>
   </body>
</html>
