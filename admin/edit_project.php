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
               <div class="container-fluserid">
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  </div>
                  <?php
                     //$msg="";
                     $userid = $_SESSION['userid'];
                     	
                     
                     ?> 
                  <div class="row">
                     <!-- Area Chart -->
                     <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                              <h6 class="m-0 font-weight-bold text-primary">Edit Project Images</h6>
                           </div>
                           <!-- Card Body -->
                           <div class="card-body">
                              <?php
                                 include("php_include/connect.php");
                                 
                                 // Check if edit_id is set from the POST request
                                 if(isset($_POST['edit_id'])){
                                     $id = $_POST['edit_id'];
                                 
                                     $query = "SELECT * FROM `project` WHERE `id`='$id'";
                                     $query_run = mysqli_query($con, $query);
                                     
                                     if(mysqli_num_rows($query_run) > 0) {
                                         $row = mysqli_fetch_array($query_run);
                                 ?>
                              <form class="user" method="post" action="edit_project.php" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter Project Name" required style="width:290px;">
                                 </div>
                                 <div class="form-group">
                                    <label for="image">Project Image:</label>
                                    <img src="project_image/<?php echo $row['image']; ?>" alt="Current Image" style="max-width: 100px; max-height: 100px;">
                                    <input type="file" name="image" class="form-control" style="width:290px;">
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                                 </div>
                                 <hr>
                              </form>
                              <?php
                                 } else {
                                     echo "No Project found with that ID.";
                                 }
                                 }
                                 
                                 if(isset($_POST['submit'])) {
                                 $id = $_POST['id'];
                                 $name = $_POST['name'];
                                 $image = $_FILES["image"]["name"];
                                 
                                 if(!empty($image)) {
                                     $extensions = array('image/jpg', 'image/jpeg', 'image/png');
                                     $target = 'project_image/' . $image;
                                     
                                     if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                                         $update = mysqli_query($con, "UPDATE `project` SET `name`='$name', `image`='$image' WHERE `id`='$id'");
                                         
                                         if($update) {
                                             echo '<script>alert("Project updated successfully!"); window.location.assign("project.php");</script>';
                                         } else {
                                             echo '<script>alert("Error occurred while updating the project."); window.location.assign("edit_project.php");</script>';
                                         }
                                     } else {
                                         echo '<script>alert("Failed to upload image. Please try again."); window.location.assign("edit_project.php");</script>';
                                     }
                                 } else {
                                     $update = mysqli_query($con, "UPDATE `project` SET `name`='$name' WHERE `id`='$id'");
                                     
                                     if($update) {
                                         echo '<script>alert("Project updated successfully!"); window.location.assign("project.php");</script>';
                                     } else {
                                         echo '<script>alert("Error occurred while updating the Project."); window.location.assign("edit_project.php");</script>';
                                     }
                                 }
                                 }
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Content Row -->
               </div>
               <!-- /.container-fluserid -->
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