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
            <div class="card-header py-3">BV CHANGE </h6>
			  
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color:blue; color:white">
                      <th>Userid</th>
                      <th>Name</th>
                      <th>subject</th>
                      <th>Date</th>
                      <th>Rply</th>
                      <th>Sent Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:blue; color:white">
                      <th>Userid</th>
                      <th>Name</th>
                      <th>subject</th>
                      <th>Date</th>
                      <th>Rply</th>
                      <th>Sent Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
					 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `chatbox` WHERE `sts`='no'");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$up_userid = $row['userid'];
										$query1 = mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$up_userid'");	
										$row1=mysqli_fetch_array($query1);	
										?>
                                        	<tr>
                                                <td><?php echo $up_userid ?></td>
                                                <td><?php echo $row1['name'];?></td>
												<td><?php echo $row['message'];?></td>
												<td><?php echo $row['send_date'];?></td>
												
												<td>
												    <form method="post" action="chat.php">
												       <input type="hidden" name="id" class="form-control" value="<?php echo $id?>">
												       <input type="text" name="mgs" class="form-control" placeholder='Reply Here'>
												</td>
                                                
												<td><input type="submit" name="submit" class="btn btn-primary" value="Process"></td>
												</form>
												
                                            </tr>
                                        <?php
											$i++;
										}
									}
									else{
									?>
                                    	<tr>
                                        	<td colspan="2">Sorry you have no list.</td>
                                        </tr>
                                    <?php
									}
								?>
                  </tbody>
                </table>
			<?php 
			if(isset($_POST['submit'])){
			    $id=$_POST['id'];
			    $mgs=$_POST['mgs'];
			    $update=mysqli_query($con,"UPDATE `chatbox` SET `status`='$mgs',`sts`='done' WHERE `id`='$id'");
			    			echo '<script>alert("Done.");window.location.assign("chat.php");</script>';	
			}
			?>
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
