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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,500,500i,900,900i" rel="stylesheet">

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


          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <?php
					if(isset($_POST['add_product'])){
						$up_userid = $_POST['up_userid'];
						
    					$query=mysqli_query($con,"SELECT * FROM `income` WHERE `email`='$up_userid'");
    					$row=mysqli_fetch_array($query);
    					$auto_upgrade=$row['auto_upgrade'];
    					$day_bal=$row['day_bal'];
    					$referal_income=$row['referal_income'];
    					$current_bal=$row['current_bal'];
    					$total_bal=$row['total_bal'];
    					$wallet=$row['wallet'];
    					$re_purchase=$row['re_purchase'];
    					$recharge_amount=$row['recharge_amount'];
    					}
						?>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><p>ID: <?php echo $up_userid ?></p></h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    
                 <form method="POST" action="edit_payment_process_now.php" enctype="multipart/form-data" class="form-groups">
                     <input type="hidden" name="up_userid" class="form-control" style="width:290px;" value="<?php echo $up_userid?>" required="">
							<p>AUTO UPGRADE AMOUNT</p>
							<input type="text" name="auto_upgrade" class="form-control" style="width:290px;" value="<?php echo $auto_upgrade?>" required=""><br>
							<p>MATCHING AMOUNT</p>
							<input type="text" name="day_bal" class="form-control" style="width:290px;" value="<?php echo $day_bal?>" required=""><br>
							<p>REFERRAL INCOME</p>
							<input type="text" name="referal_income" class="form-control" style="width:290px;" value="<?php echo $referal_income?>" required=""><br>
							<p>BANK WALLET</p>
							<input type="text" name="current_bal" class="form-control" style="width:290px;" value="<?php echo $current_bal?>" required=""><br>
							<p>GRAND TOTAL EARNING</p>
							<input type="text" name="total_bal" class="form-control" style="width:290px;" value="<?php echo $total_bal?>" required=""><br>
							<hr>
							<p>PURCHASE WALLET</p>
							<input type="text" name="wallet" class="form-control" style="width:290px;" value="<?php echo $wallet?>" required=""><br>
							<p>RE PUTCHASE WALLET</p>
							<input type="text" name="re_purchase" class="form-control" style="width:290px;" value="<?php echo $re_purchase?>" required=""><br>
							<p>RE CHARGE WALLET</p>
							<input type="text" name="recharge_amount" class="form-control" style="width:290px;" value="<?php echo $recharge_amount?>" required=""><br>
							
							<input type="submit" name="add_product" value="Submit Product" class="form-control" style="background-color:#c8b970; width:200px; color:white;" >
						</form>
					
               
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
                  
                </div>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>

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
