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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add News</h6>
                  <?php
						
						include"../php_include/connect.php";
						
								if(isset($_POST['add_product'])){
									$headline = $_POST['headline'];
									$start_date = $_POST['start_date'];
									$end_date = $_POST['end_date'];
									$w3review = $_POST['w3review'];
									$image = $_POST['image'];
									$image=$_FILES["image"]["name"];
	                                $extensions=array('image/jpg','image/jpeg','image/png');
		                            $array = mysqli_query($con,"INSERT INTO `news`(`headline`, `start_date`, `end_date`, `w3review`, `image`, `userid`) VALUES ('$headline','$start_date','$end_date','$w3review','$image','$userid')");
		
		                            $newname = $image;  
		                            $target = 'news_image/'.$newname;
		                            move_uploaded_file( $_FILES['image']['tmp_name'], $target);
		
		                           echo '<script>alert("News  Add Successfully.");window.location.assign("hot_news.php");</script>';
	                                
								}
						?>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                 <form method="post" action="hot_news.php" enctype="multipart/form-data" class="form-groups">
							<input type="text" name="headline" class="form-control" style="width:290px;" placeholder="Headline " required=""><br>
							<input type="date" name="start_date" class="form-control" style="width:290px;" placeholder="Start Date" required=""><br>
						<input type="date" name="end_date" class="form-control" style="width:290px;" placeholder="End Daste" required=""><br>
						<textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="subject"></textarea>	
							<br>
							<label>Upload Product Image</label>
							<input type="file" name="image" class="form-control" style="width:290px;" > <br>
							
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
                  <h6 class="m-0 font-weight-bold text-primary">News List</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    	<div class="table-responsive">
                        	<table class="table table-bordered table-striped">
                            	<tr>
                                	<th>S.L.</th>
                                    <th>Headline</th>
                                    <th>S Date</th>
                                    <th>E Date</th>
                                    <th>Subject</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
									$i=1;
									$query = mysqli_query($con,"select * from  news");
									if(mysqli_num_rows($query)>0){
										while($row=mysqli_fetch_array($query)){
											$id = $row['id'];
										
										?>
                                        	<tr>
                                            	<td><?php echo $i ?></td>
                                                <td><?php echo $row['headline']; ?></td>
                                                <td><?php echo $row['start_date']; ?></td>
                                                <td><?php echo $row['end_date']; ?></td>
                                                <td><?php echo $row['w3review']; ?></td>
                                                
                                                <td>
                                                    <form method="post" action="add_products.php">
                                                        <input name="id" type="hidden" value="<?php echo $id?>" >
                                                        <input name="delete_id" type="submit" value="Delete News" class="btn btn-danger" >
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
                                        	<td colspan="7">Sorry you have no Product List.</td>
                                        </tr>
                                    <?php
									}
								?>
                            </table>
                        </div>
              <?php
                if(isset($_POST['delete_id'])){
                    $id=$_POST['id'];
                $query=mysqli_query($con,"DELETE FROM `news` WHERE `id`='$id'");
                if($query){
                    echo"<script>alert('Product Delete Successful');window.location.assign('hot_news.php');";
                }
                }
              ?>      
					
                  </div>
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
