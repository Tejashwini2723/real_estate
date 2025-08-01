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
              <h6 class="m-0 font-weight-bold text-primary">Oniline List</h6>
			  
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color:blue; color:white;">
					  <th>SL</th>
                      <th>Userid</th>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Mobile</th>
				<th>TRN ID</th>
					   <th>Date</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color:blue; color:white;">
					  <th>SL</th>
                      <th>Userid</th>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Mobile</th>
                      	<th>TRN ID</th>
                       <th>Date</th>
                    </tr>
                  </tfoot>
                  <tbody>
					 <?php
									$i=1;
									$query = mysqli_query($con,"SELECT * FROM `payment` where payment_status='Already Sent'  order by id desc");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
											$userid = $row['userid'];
											$loan_amount = $row['amount'];
										
											
									$query1 = mysqli_query($con,"select * from user where email='$userid'");	
									$row1=mysqli_fetch_array($query1);	
											
											$name = $row1['name'];
											$mobile = $row1['mobile'];
										
										?>
                                        	<tr>
                                            	<td><?php echo $i ?></td>
                                                <td><?php echo $userid ?></td>
												<td><?php echo $name ?></td>
												<td><?php echo $loan_amount ?></td>
													<td><?php echo $mobile ?></td>
											<td><?php echo $row['payment_id']; ?></td>
                                                	<td><?php echo $row['added_on']; ?></td>
                                               
                                               
												
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
