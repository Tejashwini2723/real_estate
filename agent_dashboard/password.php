<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Edit Password</title>
      <?php include("php_include/top.php");?>
      <?php include("php_include/head.php");?>
   </head>
   <body>
      <script type="text/javascript"></script>
      <?php include("php_include/header.php");?>
      <div class="modal fade" id="responsive-searchModal" tabindex="-1" aria-labelledby="responsive-searchModal" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="input-group"> 
                     <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2"> 
                     <button class="btn btn-primary" type="button" id="button-addon2">
                     <i class="bi bi-search"></i>
                     </button> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <?php include("php_include/sidebar.php");?>
      <div class="main-content app-content">
         <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
               <h1 class="page-title fw-semibold fs-18 mb-0">Edit Password</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Password</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title"> EDIT PASSWORD</div>
                     </div>
                     <div class="card-body">
                        <?php 
                           $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           $row=mysqli_fetch_array($query);
                           ?>
                        <form method="POST" action="password.php">
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
							     <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" placeholder="Userid" value="<?php echo $userid?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="password" name="old" class="form-control" placeholder="Old Password" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Old Password</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="password" name="new" class="form-control" placeholder="New Pasword" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">New Password</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="password" name="confirm" class="form-control" placeholder="confirm Pasword" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">confirm Password</label>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <?php 
                           if(isset($_POST['submit'])){
                           	$old=$_POST['old'];
                           	$new=$_POST['new'];
                           	$confirm=$_POST['confirm'];
                           	
                           	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           	$row=mysqli_fetch_array($query);
                           	$old_password=$row['password'];
                           	if($confirm!=$old){
                           	if($old==$old_password){
                           		$query=mysqli_query($con,"UPDATE `user` SET `password`='$confirm' WHERE `userid`='$userid'");
                           		if($query){
                           			echo'<script>alert("Password Change Successful");window.location.assign("index.php");</script>';
                           		}
                           	}else{
                           		echo'<script>alert("Old pasword and New Password Do Not Match");window.location.assign("password.php");</script>';
                           	}
                           	}else{
                           		echo'<script>alert("Old pasword and New Password As above Same please add change words Thanku");window.location.assign("password.php");</script>';
                           	}
                           }
                            ?> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <?php include("php_include/footer.php"); ?>
      <script type="text/javascript"></script>
      <div class="scrollToTop"> 
         <span class="arrow">
         <i class="ri-arrow-up-s-fill fs-20"></i>
         </span> 
      </div>
      <div id="responsive-overlay"></div>
      <?php include("php_include/all_script.php"); ?>
   </body>
</html>
