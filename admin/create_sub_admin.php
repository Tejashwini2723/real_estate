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
            <h5 class="">Create Sub Admin</h5>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

       

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-4 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Sub Admin</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <form class="user"  method="post" action="create_sub_admin.php">
				   <div class="form-group">
                      <input name="userid" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Userid">
                    </div>
                    <div class="form-group">
                      <input name="name" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Your email">
                    </div>
					<div class="form-group">
                      <input name="mobile" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Mobile">
                    </div>
                    <div class="form-group">
                      <input name="position" type="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Position">
                    </div>
                    
                   <div class="form-group">
                      <input name="submit" type="submit" class="btn btn-primary" value="submit">
                    </div>
                    <hr>
                    
                  </form>
                </div>
				
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-8 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Details of Sub Admin</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<tr>
								<th>SL</th>
								<th>Userid</th>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Position</th>
								<th>Delete Sub Admin</th>
							</tr>
							<tbody>
								<?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `sub_admin`");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id=$row['id'];
											$userid=$row['userid'];
											$name=$row['name'];
											$email=$row['email'];
											$mobile=$row['mobile'];
											$position=$row['position'];
											$status=$row['status'];
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $userid; ?></td>
										<td><?php echo $name; ?></td>
										<td><?php echo $email; ?></td>
										<td><?php echo $mobile; ?></td>
										<td><?php echo $position; ?></td>
										<td>
											<form>
												<input name="delete" type="submit" class="btn btn-primary" value="delete">
											</form>
										</td>
									</tr>
								<?php
								$i++;
										}
									}else{
								?>
									<tr>
										<td colspan="7">No Submin Data Here</td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
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
