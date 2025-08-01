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
            <h5 class="">Edit Product</h5>
           </div>

        

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                  <?php
			if(isset($_POST['edit_id'])){
				$id=$_POST['id'];
				$query=mysqli_query($con,"SELECT * FROM `products` WHERE `id`='$id'");
				$row=mysqli_fetch_array($query);
			
		?> 
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Product  Name: <?php echo $row['product']; ?> </h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
             
                  <form class="user"  method="post" action="edit_products.php">
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<div class="form-group">
						    <p>Product Name</p>
							<input name="product" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['product']; ?>">
						</div>
						<div class="form-group">
						    <p>MRP</p>
							<input name="mrp" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['mrp']; ?>">
						</div>
						<div class="form-group">
						    <p>DP</p>
							<input name="dp" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['dp']; ?>">
						</div>
						<div class="form-group">
						    <p>DISCOUNT</p>
							<input name="discount" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['discount']; ?>">
						</div>
						<div class="form-group">
						    <p>ML / GM</p>
							<input name="qty" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['qty']; ?>">
						</div>
						<div class="form-group">
							<input name="category" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['category']; ?>">
						</div>
						<div class="form-group">
						    <p>Now Total Stock</p>
							<input name="total_stock" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['total_stock']; ?>">
						</div>
						<div class="form-group">
						    <p>BV</p>
							<input name="bv" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['bv']; ?>">
						</div>
						<div class="form-group">
						    <p>Total 10 Level Amount</p>
							<input name="level_amount" type="text" class="form-control"  style="width:290px;"  value="<?php echo $row['level_amount']; ?>">
						</div>
						<div class="form-group">
							<input name="submit" type="submit" class="btn btn-primary" value="submit All Details" >
						</div>
						<hr>
                    
                  </form>
					
            <?php
			}
		?>  
                </div>
              </div>
            </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $product=$_POST['product'];
        $mrp=$_POST['mrp'];
        $dp=$_POST['dp'];
        $discount=$_POST['discount'];
        $qty=$_POST['qty'];
        $category=$_POST['category'];
        $total_stock=$_POST['total_stock'];
        $bv=$_POST['bv'];
        $level_amount=$_POST['level_amount'];
        if($product!='' && $mrp!='' && $dp!='' && $discount!='' && $qty!='' && $category!='' && $total_stock!='' && $bv!='' && $level_amount){
            $update=mysqli_query($con,"UPDATE `products` SET `product`='$product',`mrp`='$mrp',`dp`='$dp',`discount`='$discount',`qty`='$qty',`category`='$category',`total_stock`='$total_stock',`bv`='$bv',`level_amount`='$level_amount' WHERE `id`='$id'");
            if($update){
                echo"<script>alert('Product Edit Successful');window.location.assign('product_list.php')</script>";
            }else{
                echo"<script>alert('Please Field All the Field');window.location.assign('add_products.php')</script>";
            }
        }
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
