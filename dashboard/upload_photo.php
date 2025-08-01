<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Upload Photo</title>
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
               <h1 class="page-title fw-semibold fs-18 mb-0">Photo</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upload Photo</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title">Upload Profile</div>
                     </div>
                     <div class="card-body">
                        <?php 
                           $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           $row=mysqli_fetch_array($query);
                           ?>
                        <form method="POST" action="upload_photo.php" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating floating-info" style="width:360px;">
                                    <input type="hidden" name="name" class="form-control" value="<?php echo $userid;?>" id="floatingInputinfo" placeholder="User Name" style="border-color: #38487c;">
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="input-file" class="form-label">Upload Image</label>
                                    <input class="form-control" name="image" type="file" id="input-file">
                                    <?php 
                                       $query1=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                                       $row1=mysqli_fetch_array($query1);
                                        
                                       if($row1['image']==NULL){
                                          
                                       ?> 
                                    <img src="../img/profile.png" style="width:100px;">
                                    <?php }else{
                                       ?>   
                                    <img src="selfee/<?php echo $row1['image'];?>" width="100px">
                                    <?php
                                       }?>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <?php
                           if(isset($_POST['submit'])){
                           $date = date("y-m-d");
                           $image=$_FILES["image"]["name"];
                           $extensions=array('image/jpg','image/jpeg','image/png');
                           $status='open';
                           
                           $update = mysqli_query($con,"UPDATE `user` SET `image`='$image' WHERE `userid`='$userid'");
                                      
                                          $newname = $image;  
                                          $target = 'selfee/'.$newname;
                                          move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                           if($update){
                           echo '<script>alert("Pic Update successfully");window.location.assign("index.php");</script>';
                           }
                           else{
                           
                           echo '<script>alert("Unknown error occure.");window.location.assign("upload_photo.php");</script>';
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
