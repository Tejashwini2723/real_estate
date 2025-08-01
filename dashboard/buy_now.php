<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Property Details</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <?php include("php_include/top.php");?>
      <?php include("php_include/head.php");?>
   </head>
   <body style="font-family: Arial, sans-serif; background-color: #f9f9f9;">
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
      <?php 
         include("php_include/connect.php");
         if (isset($_GET['property_id'])) {
             $property_id = $_GET['property_id'];
             $query = mysqli_query($con, "SELECT * FROM `sell` WHERE property_id = '$property_id'");
             $row = mysqli_fetch_array($query);
         ?>
      <div class="container" style="padding-top: 100px;">
         <div class="property-details" style="background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
            <h1 class="text-center" style="color: #38487c; font-size: 2rem;">Buy Now </h1>
            <div class="property-image" style="border-radius: 8px; overflow: hidden; margin-bottom: 20px;">
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
            <div class="info-item" style="margin-bottom: 20px;">
               <h2 style="color: #38487c;">Seller Information</h2>
               <p><strong style="color: #38487c; font-size:20px;">Seller Name:</strong> <span style="font-size:20px;"><?php echo $row['seller_name'];?></span></p>
               <p><strong style="color: #38487c; font-size:20px;">Phone Number:</strong> <span style="font-size:20px;"><?php echo $row['mobile'];?></span></p>
               <p><strong style="color: #38487c; font-size:20px;">Address:</strong>  <span style="font-size:20px;"><?php echo $row['address'];?></span></p>
            </div>
            <div class="info-item" style="margin-bottom: 20px;">
               <h2 style="color: #38487c;">Property Details</h2>
               <p><strong style="color: #38487c; font-size:20px;">Land Size:</strong><span style="font-size:20px;"><?php echo $row['land_size'];?></span></p>
               <p><strong style="color: #38487c; font-size:20px;">Land Type:</strong><span style="font-size:20px;"><?php echo $row['land_type'];?></span></p>
               <p><strong style="color: #38487c; font-size:20px;">Ownership Type:</strong><span style="font-size:20px;"><?php echo $row['ownership'];?></span></p>
               <p><strong style="color: #38487c; font-size:20px;">Property Address:</strong><span style="font-size:20px;"><?php echo $row['property_address'];?></span></p>
            </div>
            <div class="info-item" style="margin-bottom: 20px;">
               <h2 style="color: #38487c;">Pricing & Payment Terms</h2>
               <p><strong style="color: #38487c; font-size:20px;">Asking Price:</strong><span style="font-size:20px;"><?php echo $row['price'];?></span></p>
               <p><strong style="color: #38487c; font-size:20px;">Payment Options:</strong><span style="font-size:20px;"><?php echo $row['payment_options'];?></span></p>
            </div>
            <div class="info-item" style="margin-bottom: 20px;">
               <h2 style="color: #38487c;">Facilities</h2>
               <p><span style="font-size:20px;"> <?php echo $row['facilities'];?></span></p>
            </div>
            <div class="info-item" style="margin-bottom: 20px;">
               <h2 style="color: #38487c;">Port-Specific Information</h2>
               <p><span style="font-size:20px;"><?php echo $row['port_info'];?></span></p>
            </div>
            <div class="text-center" style="margin-top: 30px;">
               <button class="btn btn-primary" onclick="window.history.back();" style="background-color: #38487c; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px;">Back to Listings</button>
            </div>
         </div>
      </div>
      <?php } ?>
      <script type="text/javascript"></script>
      <noscript>
         <p>To display this page you need a browser that supports JavaScript.</p>
      </noscript>
      <?php include("php_include/footer.php"); ?>
      <script type="text/javascript"></script>
      <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
      <div id="responsive-overlay"></div>
      <?php include("php_include/all_script.php"); ?>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
   </body>
</html>
