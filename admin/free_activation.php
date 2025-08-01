<?php
	include("php_include/check_login.php");
	include("php_include/connect.php");
?>
<?php echo $userid= $_SESSION['userid'] ;?>
<!DOCTYPE html>
<?php
if($userid=='selvaboss'){
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
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Free Activation</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                  <form class="user"  method="post" action="free_activation_process.php">
						<div class="form-group">
							<input name="up_userid" type="text" class="form-control " id="referral_userid" style="width:290px;"  placeholder=" ACTIVE ID">
						</div>
						<span id="referral_username"></span>
					
						<div class="form-group">
							<input name="submit" type="submit" class="btn btn-primary" value="submit Data" >
						</div>
						<hr>
                    
                  </form>
					
                 
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
       
          </div>
<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   <tr style="background-color:blue; color:white;">
					  <th>SL</th>
					    <th>ID</th>
                      <th>Name</th>
                      <th>Pack</th>
                      <th>Date</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                   <tr style="background-color:blue; color:white;">
					  <th>SL</th>
					    <th>ID</th>
                      <th>Name</th>
                      <th>Pack</th>
                      <th>Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
					 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `admin_package` order by id desc");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$userid = $row['userid'];
											$query_user=mysqli_query($con,"SELECT * FROM `user` WHERE  email='$userid'");
											$row_user=mysqli_fetch_array($query_user);
										?>
                                        	<tr>
                                            	<td><?php echo $i ?></td>
                                                <td><?php echo $row['userid'] ?></td>
												<td><?php echo $row_user['name'] ?></td>
												<td><?php echo $row['amount'] ?></td>
                                                <td><?php echo $row['date'] ?></td>
												
                                                
												
                                            </tr>
                                        <?php
											$i++;
										}
									}
									else{
									?>
                                    	<tr>
                                        	<td colspan="2">Sorry you have no .</td>
                                        </tr>
                                    <?php
									}
								?>
                  </tbody>
                </table>
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
<script type="text/javascript">
    	$("#referral_userid").change(function(){
    		var referral_userid = $("#referral_userid").val();
    	//	alert(referral_userid);
    		$.post("ajax/check_userid.php",{referral_userid:referral_userid},function(data)
    	//	document.getElementById("demo1").innerHTML = data;
    {
     //   alert(data);
     	document.getElementById("referral_username").innerHTML = data;
    }	
    	
    		);
    		
    	
    	});
    </script> 
</body>

</html>
<?php }else{
    echo '<script>alert("Invalid id");window.location.assign("home.php");</script>';
}?>