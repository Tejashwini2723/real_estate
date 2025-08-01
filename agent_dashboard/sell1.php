<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Sell</title>
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
                        <li class="breadcrumb-item active" aria-current="page">Sell</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title">Select Address</div>
                     </div>
                     <div class="card-body">
                        <?php 
                           $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           $row=mysqli_fetch_array($query);
                           ?>
						   <?php 
                           $query1=mysqli_query($con,"SELECT * FROM `sell` WHERE `userid`='$userid'");
                           $row1=mysqli_fetch_array($query1);
                           ?>
                        <div class="row">
                           <div class="col-12 col-md-12 col-lg-12">
                              <form method="POST" action="sell_process_1.php" enctype="multipart/form-data">
                                 <h5>Seller Information</h5>
								 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="property_id" class="form-control" placeholder="Property ID" value="<?php echo $row1['property_id'];?>" style="border-color: #38487c;">
                                    <input type="hidden" name="userid" class="form-control" placeholder="Userid" value="<?php echo $userid?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="text" name="seller_name" class="form-control" id="seller_name" placeholder="Full Name / Company Name" style="border-color: #38487c; width:390px;" required>
                                    <label for="seller_name" style="color:#38487c;">Full Name / Company Name</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="number" name="mobile" class="form-control" id="contact" placeholder="Phone Number" style="border-color: #38487c; width:390px;" required>
                                    <label for="contact" style="color:#38487c;">Phone Number</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <textarea name="address" class="form-control" id="address" placeholder="Address" style="border-color: #38487c; width:390px; height:100px;" required></textarea>
                                    <label for="address" style="color:#38487c;">Address</label>
                                 </div>
                                 <h5>Property Details</h5>
                                 <div class="form-floating mb-3">
                                    <textarea name="property_address" class="form-control" id="propertyaddress" placeholder="Property Address" style="border-color: #38487c; width:390px; height:100px;" required></textarea>
                                    <label for="propertyaddress" style="color:#38487c;">Property Address</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="text" name="land_size" class="form-control" id="land_size" placeholder="Land Size (sqm/acres)" style="border-color: #38487c; width:390px;" required>
                                    <label for="land_size" style="color:#38487c;">Land Size (sqm/acres)</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="land_type" class="form-select" name="land_type" style="border-color: #38487c; width:390px;" required>
                                       <option value="">Select Land Type</option>
                                       <option value="Residential">Residential</option>
                                       <option value="Commercial">Commercial</option>
                                       <option value="Industrial">Industrial</option>
                                       <option value="Agricultural">Agricultural</option>
                                    </select>
                                    <label for="land_type" style="color:#38487c;">Land Type</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="ownership" class="form-select" name="ownership" style="border-color: #38487c; width:390px;" required>
                                       <option value="">Select Ownership Type</option>
                                       <option value="Sell">Sell</option>
                                       <option value="Rent">Rent</option>
                                       <option value="Lease">Lease</option>
                                    </select>
                                    <label for="ownership" style="color:#38487c;">Ownership Type</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="file" name="image" class="form-control" id="image" placeholder="Legal Documents (Title Deed, Survey Plan)" style="border-color: #38487c; width:390px;" required>
                                    <label for="image" style="color:#38487c;">Property Images / Videos</label>
                                 </div>
                                 <h5>Pricing & Payment Terms</h5>
                                 <div class="form-floating mb-3">
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Asking Price" style="border-color: #38487c; width:390px;" required>
                                    <label for="price" style="color:#38487c;">Asking Price</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="payment_options" class="form-select" name="payment_options" style="border-color: #38487c; width:390px;">
                                       <option value="">Select Payment Option</option>
                                       <option value="Full Payment">Full Payment</option>
                                       <option value="Installments">Installments</option>
                                       <option value="Financing Available">Financing Available</option>
                                    </select>
                                    <label for="payment_options" style="color:#38487c;">Payment Options</label>
                                 </div>
                                
                                 <h5>Infrastructure & Facilities</h5>
                                 <div class="form-floating mb-3">
                                    <textarea name="facilities" class="form-control" id="facilities" placeholder="Road Access, Water, Electricity, Sewage System, Nearby Amenities" style="border-color: #38487c; width:390px; height:100px;"></textarea>
                                    <label for="facilities" style="color:#38487c;">Facilities (Road, Water, Electricity, etc.)</label>
                                 </div>
                                 <h5>Port-Specific Information (if applicable)</h5>
                                 <div class="form-floating mb-3">
                                    <textarea name="port_info" class="form-control" id="port_info" placeholder="Water Depth, Cargo Handling, Customs, Transport Connectivity" style="border-color: #38487c; width:390px; height:100px;"></textarea>
                                    <label for="port_info" style="color:#38487c;">Port-Specific Details</label>
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