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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color:blue; color:white;">
					  <th>SL</th>
                      <th>Userid</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Password</th>
                      <th>Status</th>
                      <th>Edit ID</th>	
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot style="background-color:blue; color:white;">
                    <tr>
					  <th>SL</th>
                      <th>Userid</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Password</th>
                       <th>Status</th>
                      <th>Edit ID</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
					 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `user` WHERE `position`='user' order by id desc");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$userid = $row['userid'];
											$name = $row['name'];
											$mobile = $row['mobile'];
											$password = $row['password'];
											$status = $row['status'];
										
										?>
                                        	<tr>
                                            	<td><?php echo $i ?></td>
                                                <td><?php echo $userid ?></td>
												<td><?php echo $name ?><br>
												ADDRESS: <br>
												 NAME:<?php echo $row['name']?><br>
                                                  MOBILE:<?php echo $row['mobile']?><br>
                                                  ADDRESS:<?php echo $row['address']?><br>
                                                  <hr>
                                                  CITY:<?php echo $row['city']?><br>
                                                  DISTRICT:<?php echo $row['district']?><br>
                                                  STATE:<?php echo $row['state']?><br>
                                                  COUNTRY:<?php echo $row['country']?><br>
                                                  PINCODE:<?php echo $row['pincode']?><br>
												</td>
												<td><?php echo $mobile ?></td>
                                                <td><?php echo $password ?></td>
                                                 <td><?php echo $status ?></td>
                                                <td>
													<form method="post" action="edit_user_list.php">
														<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
														<input type="submit" name="edit_btn" value="Edit" class="btn btn-primary" >
													</form>
												</td>
												<td>
													<form method="post" action="user_list.php">
														<input type="hidden" name="delete_id" value="<?php echo $id; ?>">
														<input type="submit" name="delete_btn" value="Delete" class="btn btn-danger" >
													</form>
												</td>
                                            </tr>
                                        <?php
											$i++;
										}
									}
									else{
									?>
                                    	<tr>
                                        	<td colspan="2">Sorry you have no pin.</td>
                                        </tr>
                                    <?php
									}
								?>
                  </tbody>
                </table>
				<form action="" method="" ><input name="submit" value="Download Excel Sheet" class="btn btn-primary"></form>
              </div>
            </div>
          </div>
<?php
                     if(isset($_POST['delete_id'])){
                       $id=$_POST['id'];
                       $update=mysqli_query($con,"DELETE FROM `user` WHERE `id`='$id'");
                       echo '<script>alert("Deleted.");window.location.assign("user_list.php");</script>';
                     }
                     ?>
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
