<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Form Done</title>
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
                              <h2>Contact Form Done</h2>
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
                                 <h4>Contact Form Done</h4>
                              </div>
                              <div class="last-contact">
                                 <ul>
                                    <li>
                                       <a href="index.php">Home</a>
                                    </li>
                                    <li>Contact</li>
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
            <h3 class="text-center" style="color:#9d7e54;">Contact Form Done</h3>
            <br>
            <div class="row">
               <center>
                  <?php
                     include("php_include/connect.php");
                     date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                     if(isset($_GET['id'])){
                         $x_id=$_GET['id'];
                       
                         $query=mysqli_query($con,"SELECT * FROM `contact_form` WHERE `x_id`='$x_id'");
                         $row=mysqli_fetch_array($query);
                     }
                     ?>
                  <h3>
                     REQUEST SUCCESSFUL
                     <hr>
                     REQUEST ID : <font color='#9d7e54'><?php echo $x_id;?></font><br>
                     REQUEST DATE : <font color='#9d7e54'><?php echo $row['date'];?></font><br>
                     REQUEST NAME : <font color='#9d7e54'><?php echo strtoupper($row['name']);?></font>
                  </h3>
               </center>
            </div>
         </div>
      </section>
      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_script.php");?>
   </body>
</html>
