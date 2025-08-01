<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>SRILN Dashboard</title>
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
			<?php 
                           $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           $row=mysqli_fetch_array($query);
                           ?>
               <div>
                  <p class="fw-semibold fs-18 mb-0">Welcome To SRILN !</p>
				  <h5 class="m-b-10">ID : <?php echo $userid;?> || <?php 
                              if($row1['status']=='Active'){
                                  echo"<font color='green'>ACTIVE ACCOUNT</font>";
                              } else{
                                  echo"<font color='red'>IN ACTIVE ACCOUNT</font>";
                              }
                              ?></h5>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="row">
                     <div class="col-xl-3">
                        <div class="card custom-card">
                           <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                 <div> <span class="avatar avatar-md avatar-rounded bg-primary shadow shadow-primary"> <i class="ti ti-shopping-bag fs-5"></i> </span> </div>
                                 <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-2"> <span class="d-block">Total Orders</span> </div>
                                    <h4 class="fw-semibold mb-3 lh-1">&#8377; 0.00</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="card custom-card">
                           <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                 <div> <span class="avatar avatar-md avatar-rounded bg-secondary shadow shadow-secondary"> <i class="ti ti-currency-dollar fs-5"></i> </span> </div>
                                 <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-2"> <span class="d-block">Total Earnings</span> </div>
                                    <h4 class="fw-semibold mb-3 lh-1">&#8377; 0.00</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="card custom-card">
                           <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                 <div> <span class="avatar avatar-md avatar-rounded bg-success shadow shadow-success"> <i class="ti ti-box fs-5"></i> </span> </div>
                                 <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-2"> <span class="d-block">Products Sold</span> </div>
                                    <span class="d-block mb-2"></span> 
                                    <h4 class="fw-semibold mb-3 lh-1">&#8377; 0.00</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="card custom-card">
                           <div class="card-body">
                              <div class="d-flex align-items-start gap-3 flex-wrap">
                                 <div> <span class="avatar avatar-md avatar-rounded bg-info shadow shadow-info"> <i class="ti ti-moneybag fs-5"></i> </span> </div>
                                 <div class="flex-fill">
                                    <div class="d-flex align-items-center justify-content-between mb-2"> <span class="d-block">Profit Percentage</span> </div>
                                    <span class="d-block mb-2"></span> 
                                    <h4 class="fw-semibold mb-3 lh-1">&#8377; 0.00</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-6 col-xl-6">
                  <div class="card custom-card overflow-hidden">
                     <div class="card-header justify-content-between">
                        <div class="card-title" style="font-size:24px;"> Profile Details </div>
                     </div>
                     <div class="card-body">
					 <font size="5px">
                        <div class="flex-fill"> <span class="fw-medium">Name : <?php echo $row['name'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">Email Address : <?php echo $row['email'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">Phone Number : <?php echo $row['mobile'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">Address : <?php echo $row['address'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">District : <?php echo $row['district'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">State : <?php echo $row['state'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">Country : <?php echo $row['country'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium">Pincode : <?php echo $row['pincode'];?></span> </div>
                        <div class="flex-fill"> <span class="fw-medium"> Status :
						<?php  
						if($row1['status']=='Active'){
                                  echo"<font color='green'>ACTIVE ACCOUNT</font>";
                              } else{
                                  echo"<font color='red'>IN ACTIVE ACCOUNT</font>";
                              }
                              ?>
						</span> </div>
						</font>
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