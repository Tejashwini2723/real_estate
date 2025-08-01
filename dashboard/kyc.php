<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Upload KYC</title>
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
               <h1 class="page-title fw-semibold fs-18 mb-0">KYC</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update KYC</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <?php 
               $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
               $row=mysqli_fetch_array($query);
               ?>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title">Update Aadhar</div>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="kyc.php" enctype="multipart/form-data">
                           <p>Upload Aadhar Front Image</p>
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" id="floatingInputinfo" placeholder="Userid" value="<?php echo $userid;?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="text" name="adhar_no" class="form-control" id="floatingInputinfo" placeholder="User Name" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Aadhaar Number</label>
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="input-file" class="form-label">Upload Aadhar Front Image</label>
                                    <input class="form-control" name="image" type="file" id="input-file">
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                           <br>
                           <?php 
                              $query1=mysqli_query($con,"SELECT * FROM `income` WHERE `userid`='$userid'");
                              $row1=mysqli_fetch_array($query1);
                               
                              if($row1['adhar_front']==NULL){
                                 
                              ?> 
                           <img src="../img/aadhar_front.png" style="width:200px;">
                           <?php }else{
                              ?>   
                           <img src="kyc/<?php echo $row1['adhar_front'];?>" width="100px">
                           <?php
                              }?>
                           <br>
                        </form>
                        <?php
                           if(isset($_POST['submit'])){
                           $adhar_no=$_POST['adhar_no'];
                           $date = date("y-m-d");
                           $image=$_FILES["image"]["name"];
                           $extensions=array('image/jpg','image/jpeg','image/png');
                           $status='open';
                           $update = mysqli_query($con,"UPDATE `income` SET `adhar_no`='$adhar_no',`adhar_front`='$image' WHERE `userid`='$userid'");
                              $newname = $image;  
                              $target = 'kyc/'.$newname;
                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                           if($update){
                           echo '<script>alert("Pic Update successfully");window.location.assign("kyc.php");</script>';
                           }
                           else{
                           
                           echo '<script>alert("Unknown error occure.");window.location.assign("kyc.php");</script>';
                           }
                            }
                           ?>  
                     </div>
                     <div class="card-body">
                        <form method="POST" action="kyc.php" enctype="multipart/form-data">
                           <hr style="border-top: 1px solid #38487c; margin-top: 20px; margin-bottom: 20px; width:350px;">
                           <p>Upload Aadhar Back Image</p>
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" id="floatingInputinfo" placeholder="Userid" value="<?php echo $userid;?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="input-file" class="form-label">Upload Aadhar Back Image</label>
                                    <input class="form-control" name="image" type="file" id="input-file">
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit1">Submit</button>
                                 </div>
                              </div>
                           </div>
                           <br>
                           <?php 
                              $query1=mysqli_query($con,"SELECT * FROM `income` WHERE `userid`='$userid'");
                              $row1=mysqli_fetch_array($query1);
                               
                              if($row1['adhar_back']==NULL){
                                 
                              ?> 
                           <img src="../img/aadhar_back.png" style="width:200px;">
                           <?php }else{
                              ?>   
                           <img src="kyc/<?php echo $row1['adhar_back'];?>" width="100px">
                           <?php
                              }?>
                        </form>
                        <?php
                           if(isset($_POST['submit1'])){
                           $date = date("y-m-d");
                           $image=$_FILES["image"]["name"];
                           $extensions=array('image/jpg','image/jpeg','image/png');
                           $status='open';
                           $update = mysqli_query($con,"UPDATE `income` SET `adhar_back`='$image' WHERE `userid`='$userid'");
                              $newname = $image;  
                              $target = 'kyc/'.$newname;
                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                           if($update){
                           echo '<script>alert("Pic Update successfully");window.location.assign("kyc.php");</script>';
                           }
                           else{
                           
                           echo '<script>alert("Unknown error occure.");window.location.assign("kyc.php");</script>';
                           }
                            }
                           ?>  
                     </div>
                     <div class="card-body">
                        <form method="POST" action="kyc.php" enctype="multipart/form-data">
                           <hr style="border-top: 1px solid #38487c; margin-top: 20px; margin-bottom: 20px; width:350px;">
                           <p>Upload Pan Image</p>
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" id="floatingInputinfo" placeholder="Userid" value="<?php echo $userid;?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="text" name="pan_no" class="form-control" id="floatingInputinfo" placeholder="User Name" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Pan Number</label>
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="input-file" class="form-label">Upload Pan Image</label>
                                    <input class="form-control" name="image" type="file" id="input-file">
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit2">Submit</button>
                                 </div>
                              </div>
                           </div>
                           <br>
                           <?php 
                              $query1=mysqli_query($con,"SELECT * FROM `income` WHERE `userid`='$userid'");
                              $row1=mysqli_fetch_array($query1);
                               
                              if($row1['pan_image']==NULL){
                                 
                              ?> 
                           <img src="../img/pan_card.png" style="width:200px;">
                           <?php }else{
                              ?>   
                           <img src="kyc/<?php echo $row1['pan_image'];?>" width="100px">
                           <?php
                              }?>
                        </form>
                        <?php
                           if(isset($_POST['submit2'])){
                           $pan_no=$_POST['pan_no'];
                           $date = date("y-m-d");
                           $image=$_FILES["image"]["name"];
                           $extensions=array('image/jpg','image/jpeg','image/png');
                           $status='open';
                           $update = mysqli_query($con,"UPDATE `income` SET `pan_no`='$pan_no',`pan_image`='$image' WHERE `userid`='$userid'");
                              $newname = $image;  
                              $target = 'kyc/'.$newname;
                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                           if($update){
                           echo '<script>alert("Pic Update successfully");window.location.assign("kyc.php");</script>';
                           }
                           else{
                           
                           echo '<script>alert("Unknown error occure.");window.location.assign("kyc.php");</script>';
                           }
                            }
                           ?>  
                     </div>
                     <div class="card-body">
                        <form method="POST" action="kyc.php" enctype="multipart/form-data">
                           <hr style="border-top: 1px solid #38487c; margin-top: 20px; margin-bottom: 20px; width:350px;">
                           <p>Upload Bank Passbook Image</p>
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" id="floatingInputinfo" placeholder="Userid" value="<?php echo $userid;?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="input-file" class="form-label">Upload Bank Passbook Image</label>
                                    <input class="form-control" name="image" type="file" id="input-file">
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit3">Submit</button>
                                 </div>
                              </div>
                           </div>
                           <br>
                           <?php 
                              $query1=mysqli_query($con,"SELECT * FROM `income` WHERE `userid`='$userid'");
                              $row1=mysqli_fetch_array($query1);
                              if($row1['pass_image']==NULL){
                              ?> 
                           <img src="../img/passbook.jpg" style="width:200px;">
                           <?php }else{
                              ?>   
                           <img src="kyc/<?php echo $row1['pass_image'];?>" width="100px">
                           <?php
                              }?>
                        </form>
                        <?php
                           if(isset($_POST['submit3'])){
                           $date = date("y-m-d");
                           $image=$_FILES["image"]["name"];
                           $extensions=array('image/jpg','image/jpeg','image/png');
                           $status='open';
                           $update = mysqli_query($con,"UPDATE `income` SET `pass_image`='$image' WHERE `userid`='$userid'");
                              $newname = $image;  
                              $target = 'kyc/'.$newname;
                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                           if($update){
                           echo '<script>alert("Pic Update successfully");window.location.assign("kyc.php");</script>';
                           }
                           else{
                           
                           echo '<script>alert("Unknown error occure.");window.location.assign("kyc.php");</script>';
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
