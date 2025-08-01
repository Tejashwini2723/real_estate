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
            <h5 class="">Profile</h5>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

       

          <div class="row">

            
            <div class="col-xl-12 col-lg-5">
              <div class="card shadow mb-4">
                
                <!-- Card Body -->
                <div class="card-body">
                  
                   <div class="custom-form-area input-boxed">
                                    <!--Form To have user messages-->
                                 <?php
               include("php_include/connect.php");
               if(isset($_GET['userid'])){
                   $userid=$_GET['userid'];
                   $query=mysqli_query($con,"SELECT * FROM `user` WHERE email='$userid'");
                   $row=mysqli_fetch_array($query);
                  
               }
               ?>  
                           <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                                <div class="custom-form-area input-boxed">
                                   <div class="account-card__body">
                            <center><h4>Your GC TOKEN Registration is Successful..!</h4></center>
                               <center>  <h2><span class="base--color"><?php echo $row['name'];?></span></h2></center>
                            <div class="table-responsive">
                                      <div ='form-horizontal'>
                                          <table class="table table-striped" style="color: white;">
                                             <tr>
                                                 <td colspan="2" style="background-color:#c2a100;">  
                                               <center> <h5> Your login details as below:</h5></center>
                                                 </td>
                                            </tr>
                                            
                                            <tr>
                                                 <td><center>Contract Id:</center></td>
                                                 <td><center><?php echo $row['email'];?></center></td>
                                            </tr>
                                            <tr>
                                                 <td><center><font color='green'>Password:</font></center></td>
                                                 <td><center><font color='green'><?php echo $row['password'];?></font></center></td>
                                            </tr>
                                            
                                            <tr>
                                                 <td colspan="2">  
                                               <center> <h5><a href="login.php"> <font color='white'>Click Here for Login</font></a></h5></center>
                                                 </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>       
                                    <br>
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
