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
            <h5 class="">Password</h5>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

       <?php
			
		?> 

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Userid</h6>
                  
                </div>
                <!-- php -->
				<?php
				include("php_include/connect.php");
					if(isset($_POST['edit_btn'])){
						$id = $_POST['edit_id'];
						$query = "SELECT * FROM `user` WHERE `id`='$id'";
						$query_run = mysqli_query($con,$query);
						
						foreach($query_run as $row){
				?>
				
				<!-- php -->
                <div class="card-body">
                  <label><b>Edit Userid is :</b> <?php echo $row['email'];?></label>
                  <hr>
				  
					<form action="edit_user_list.php" method="post" class="user">
						
						<div class="form-group">
						    <label><font color="red">*</font>Name:</label>
							<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
							<input name="edit_name" type="text" value="<?php echo $row['name'];?>" class="form-control " id="exampleInputEmail" style="width:290px;" aria-describedby="emailHelp" placeholder="Mame">
						</div>
						<div class="form-group">
						    <label><font color="red">*</font>Mobile:</label>
							<input name="edit_mobile" type="text" value="<?php echo $row['mobile'];?>" class="form-control " id="exampleInputPassword" style="width:290px;" placeholder="Mobile">
						</div>
						<div class="form-group">
						    <label><font color="red">*</font>Email:</label>
							<input name="edit_gmail" type="text" value="<?php echo $row['email1'];?>" class="form-control " id="exampleInputPassword" style="width:290px;" placeholder="Mobile">
						</div>
							<div class="form-group">
						    <label><font color="red">*</font>Referral:</label>
							<input name="edit_referral_userid" type="text" value="<?php echo $row['referral_userid'];?>" class="form-control " id="exampleInputPassword" style="width:290px;" placeholder="email">
						</div>
						<div class="form-group">
						    <label><font color="red">*</font>Password:</label>
							<input name="edit_password" type="text" value="<?php echo $row['password'];?>" class="form-control " style="width:290px;" id="exampleInputPassword" placeholder="password">
						</div>
							<div class="form-group">
						    <label><font color="red">*</font>TRN Password:</label>
							<input name="edit_trn_password" type="text" value="<?php echo $row['trn_password'];?>" class="form-control " style="width:290px;" id="exampleInputPassword" placeholder="password">
						</div>
						<div class="form-group">
							<button  type="submit" name="update" class="btn btn-primary">Edit Data Now</button>
							<button href="user_list.php" class="btn btn-danger">Cancel Edit</button>
						</div>
						<hr>
                   </form> 
                 
					
                 
                </div>
				<?php
						}
					}
				?>
              </div>
			  <?php
					if(isset($_POST['update'])){
						$id = $_POST['edit_id'];
						$name = $_POST['edit_name'];
						$mobile = $_POST['edit_mobile'];
						$referral_userid = $_POST['edit_referral_userid'];
						$password = $_POST['edit_password'];
						$edit_trn_password = $_POST['edit_trn_password'];
						$edit_gmail = $_POST['edit_gmail'];
						$total_purchase = $_POST['total_purchase'];
						
						$query = "UPDATE `user` SET `email1`='$edit_gmail',`name`='$name',`mobile`='$mobile',`referral_userid`='$referral_userid',`password`='$password',`trn_password`='$edit_trn_password' where `id`='$id'";
						$query_run= mysqli_query($con,$query);
						if($query_run){
							echo '<script>alert("Data successfully Updated");window.location.assign("user_list.php");</script>';
						}else{
							echo '<script>alert("Please Field All Thw Field");</script>';
						}
						}
			  ?>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Page Title</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    hello Content
					
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
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
