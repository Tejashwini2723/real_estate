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
         

       

          <div class="row">

            
            <div class="col-xl-12 col-lg-5">
              <div class="card shadow mb-4">
                
                <!-- Card Body -->
                <div class="card-body">
                  
                   <div class="custom-form-area input-boxed">
                                    <!--Form To have user messages-->
                                  <?php
                                  if(isset($_GET['id'])){
                                     $id=$_GET['id']; 
                                      $side=$_GET['side']; 
                                  }
                                  ?>  
                                  
                                    <br>
                                    <form class="main-form" id="contact-us-form" action="register_process.php" method="post">
                                        <span class="done-msg"></span>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="input-wrapper">
                                                  
                                                  <center>  <input class="form-control"  name="name" type="text" placeholder="NAME" style="width:290px; border-radius:10px;" required>  </center> 
                                                <br>
                                                  <center>  <input class="form-control"  name="mobile" type="text" placeholder="MOBILE" style="width:290px; border-radius:10px;" required>  </center> 
                                                 <br>
                                                 <center>  <input class="form-control"  name="email" type="text" placeholder="EMAIL" style="width:290px; border-radius:10px;" required>  </center> 
                                                  <br>
                                                  <center>  <input class="form-control"  name="password" type="text" placeholder="PASSWORD" style="width:290px; border-radius:10px;" required>  </center> 
                                                <br>
                                                    <center> <input class="form-control"  name="referral_userid" placeholder="REFERRAL USERID" type="text" style="width:290px; border-radius:10px;" required>  </center> 
                                               <br>
                                                <center> <input class="form-control"  name="email" placeholder="EMAIL ID" type="text" style="width:290px; border-radius:10px;" required>  </center> 
                                                  <input   name="side"  type="hidden" value="<?php echo $side?>" required>     
                                                <input   name="under_userid"  type="hidden" value="<?php echo $id?>" required>
                                                <br>
                                                <center> <input class="btn btn-primary"  name="submit"  type="submit" style="width:200px; border-radius:10px;" required>  </center> 
                                                </div>
                                            </div>
											
                                           
										</div>
                                    </form>
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
