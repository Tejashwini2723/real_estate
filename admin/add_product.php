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

  <title>My Admin  - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>

      

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                  <form class="user"  method="post" action="add_product_process.php"  enctype="multipart/form-data">
						<div class="form-group">
							<input name="brand" type="text" class="form-control "  style="width:290px;"  placeholder="Product Brand">
						</div>	
						<div class="form-group">
							<input name="product_name" type="text" class="form-control "  style="width:290px;"  placeholder="Product Name">
						</div>
						
						<div class="form-group">
							<select name="categary" class="form-control "  style="width:290px;">
                                  <option value="RECHARGE SHOPS">RECHARGE SHOPS</option>
                                   <option value="MOBILE SERVICES">MOBILE SERVICES</option>
                                    <option value="VEHICLE">VEHICLE </option>
                                    <option value="MOBILE PRODUCTS">MOBILE PRODUCTS </option>
                                    <option value="HEALTH">HEALTH</option>
                                    <option value="CLOTH">CLOTH</option>
                                    <option value="GROCETY">GROCERY</option>
                                    <option value="MADICAL">MEDICAL</option>
                                    <option value="HOME NEEDS">HOME NEEDS</option>
                                    <option value="AGRICULTURE">AGRICULTURE</option>
                                    <option value="HOME APPLIANCES">HOME APPLIANCES</option>
                                    <option value="ELECTRICAL AND ELECTRONIC ">ELECTRICAL AND ELECTRONIC </option>
                                    <option value="JEWELLERY PRODUCTS">JEWELLERY PRODUCTS </option>
                                    <option value="SOCIAL SERVICES">SOCIAL SERVICES  </option>
                                     <option value="OTHER SERVICES">OTHER SERVICES   </option>
                                     <option value="COMMUNITY MEN WHOMEN">COMMUNITY MEN WHOMEN   </option>
                                    <option value="OTHERS">OTHERS</option>
                                </select>
						</div>
						<div class="form-group">
							<input name="mrp" type="text" class="form-control "  style="width:290px;" placeholder="MRP">
						</div>
						<div class="form-group">
							<input name="dp" type="text" class="form-control " style="width:290px;"  placeholder="DP">
						</div>
						<div class="form-group">
							<input name="bv" type="text" class="form-control " style="width:290px;"  placeholder="BV">
						</div>
						<div class="form-group">
							<input type="file" name="image" class="form-control"  style="width:290px;" required>
						</div>
					  <div class="form-group">
							<input type="text" name="headline" class="form-control"  style="width:290px;" placeholder="headline" required>
						</div>
						<div class="form-group">
						      <textarea  name="content1" rows="4" cols="50" placeholder="About Product" required></textarea>
						</div>
							<div class="form-group">
						      <textarea  name="content2" rows="4" cols="50" placeholder="About Product" required></textarea>
						</div>
						<div class="form-group">
							<input name="submit" type="submit" class="btn btn-primary" value="Submit Product" >
						</div>
						<hr>
                    
                  </form>
					
                 
                </div>
              </div>
            </div>

          </div>
 <?php
		
				
				if(isset($_POST['submit'])){
					$up_userid=$_POST['up_userid'];
					$left=$_POST['left'];
					$right=$_POST['right'];
	
						
						$up=mysqli_query($con,"UPDATE `user` SET `left_count`='$left',`right_count`='$right',`award_left_count`='$left',`award_right_count`='$right' WHERE `email`='$up_userid'");
							echo '<script>alert("successfully changed");</script>';
					
				
			}
		?> 
          <!-- Content Row -->
         
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
