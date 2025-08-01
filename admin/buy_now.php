<?php
	include("php_include/check_login.php");
	include("php_include/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Admin Dashboard</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  
<?php include("php_include/menu.php");?>
  <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
<?php include("php_include/nav.php");?>    
	<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User List</h6>
			  
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php 
         include("php_include/connect.php");
         if (isset($_GET['property_id'])) {
             $property_id = $_GET['property_id'];
             $query = mysqli_query($con, "SELECT * FROM `sell` WHERE property_id = '$property_id'");
             $row = mysqli_fetch_array($query);
         ?>
         <?php 
                  if($row['property_image'] == NULL) { 
                  ?> 
               <img src="../images/1.webp" alt="Property Image" class="img-fluid" style="max-width: 100%; height: auto; width: 300px; object-fit: cover;">
               <?php 
                  } else { 
                  ?>  
               <img src="https://sriln.in/dashboard/property_images/<?php echo $row['property_image'];?>" alt="Property Image" class="img-fluid" style="max-width: 100%; height: auto; width: 300px; object-fit: cover;">													 
               <?php 
                  } 
                  ?>
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
                  <?php } ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    <?php include("php_include/footer.php");?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
