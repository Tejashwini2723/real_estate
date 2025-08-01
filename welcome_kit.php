<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Welcome Kit</title>
      <?php include("php_include/head.php");?>
   </head>
   <body>
      <?php include("php_include/header.php");?>
      <section class="section-breadcrumb padding-b-50">
         <div class="rx-breadcrumb-image" style="background-image: url('images/contact.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
               <div class="main-breadcrumb-contact">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="rx-banner-contact">
                              <h2>Welcome Kit</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rx-banner-breadcrumb">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="breadcrumb-contact">
                              <div class="main-heading">
                                 <h4>Welcome Kit</h4>
                              </div>
                              <div class="last-contact">
                                 <ul>
                                    <li>
                                       <a href="index.php">Home</a>
                                    </li>
                                    <li>Welcome Kit</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section-contact-details padding-t-50 padding-b-50">
         <div class="container">
            <h3 class="text-center" style="color:#9d7e54;">Welcome Kit</h3>
            <br>
            <div class="row">
               <?php
                     include("php_include/connect.php");
                     
                         if(isset($_GET['userid'])){
                     	$userid = mysqli_real_escape_string($con, $_GET['userid']);
                     	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                     	$row=mysqli_fetch_array($query);
                     	$userid=$row['userid'];
                     	$email=$row['email'];
                     	$mobile=$row['mobile'];
                     	$name=$row['name'];
                     	$password=$row['password'];
                     }else{
                     	$userid="";
                     }
                     
                     ?>
               <p style="text-align:justify;">
                  Date: <font color="blue"><?php echo $row['date'];?></font><br>
                  Dear, <font color="blue"><?php echo $row['name'];?></font><br>
                  USERID:  <font color="blue"><?php echo $userid;?></font><br>
                  PASSWORD:  <font color="blue"><?php echo $row['password'];?></font><br><br>
               <p>   We’re excited to have you join our community. At SRILN, we’re committed to simplifying your real estate journey by connecting you directly with property owners—no brokers, no hidden fees. Whether you’re buying, selling, or renting, our platform is designed to offer you transparency, convenience, and security every step of the way.</p>
               <p>
                  If you have any questions or need assistance, we’re here to help. Welcome aboard, and we look forward to helping you find your perfect property!
               </p>
               <p><br>Warm regards,</p>
               <p><br>SRILN</p>
               <br>
               <p> 7th Ward Bhobi Colony,<br>Siruguppa-583121</p>
               </p>
            </div>
         </div>
      </section>
      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_script.php");?>
   </body>
</html>