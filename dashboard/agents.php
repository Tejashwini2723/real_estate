<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Agents</title>
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
                        <li class="breadcrumb-item active" aria-current="page">Agents</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title">Agents</div>
                     </div>
                     <div class="card-body">
                        <?php 
                           $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           $row=mysqli_fetch_array($query);
                           ?>
                        <div class="row">
                           <div class="col-12 col-md-12 col-lg-12">
                              <form method="POST" action="agent_process.php">
							  <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" placeholder="Userid" value="<?php echo $userid?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="text" name="agent_name" class="form-control" id="agentname" placeholder="Full Name" style="border-color: #38487c; width:390px;">
                                    <label for="agent_name" style="color:#38487c;">Full Name</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="number" name="mobile" class="form-control" id="contact" placeholder="Phone Number" style="border-color: #38487c; width:390px;">
                                    <label for="contact" style="color:#38487c;">Phone Number</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" style="border-color: #38487c; width:390px;">
                                    <label for="email" style="color:#38487c;">Email Address</label>
                                 </div>
								 <div class="form-floating mb-3">
                                    <input type="text" name="f_name" class="form-control" id="name" placeholder="Full Name / Company Name" style="border-color: #38487c; width:390px;">
                                    <label for="name" style="color:#38487c;">Father / Husband Name</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <textarea name="address" class="form-control" id="address" placeholder="Property Address" style="border-color: #38487c; width:390px; height:100px;"></textarea>
                                    <label for="address" style="color:#38487c;">Address</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="number" name="pincode" class="form-control" id="pincode" placeholder="Land Size (sqm/acres)" style="border-color: #38487c; width:390px;">
                                    <label for="pincode" style="color:#38487c;">Pincode</label>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit Form</button>
                                 </div>
                              </form>
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