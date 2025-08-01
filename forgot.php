<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Forgot Password</title>
      <?php include("php_include/head.php");?>
   </head>
   <body style="background-image: url('images/forgot.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; margin: 0; display: flex; justify-content: center; align-items: center;">
      <section class="section-login padding-t-50 padding-b-100" style="width: 100%; display: flex; justify-content: center; align-items: center; height: 100%; text-align: center;">
         <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100%; padding: 0;">
            <div class="rx-login-form" style="display: flex; justify-content: center; align-items: center; width: 100%; padding: 0;">
               <div class="rx-inner-form" style="width: 100%; max-width: 400px; background-color: rgba(255, 255, 255, 0.8); padding: 30px; border-radius: 10px;">
                  <form method="POST" action="#">
                     <div class="row">
                        <div class="col-12">
                           <div class="rx-banner text-center rx-banner-effects">
                              <p><img src="images/left-shape.svg" alt="banner-left-shape" class="svg-img left-side">Forgot Password
							  <img src="images/right-shape.svg" alt="banner-right-shape" class="svg-img right-side"></p>
                              <h4>Forgot <span>Password</span></h4>
                           </div>
                        </div>
                        <div class="col-lg-12 col-12 mb-24">
                           <div class="rx-input-box">
                              <input type="text" id="userid" name="userid" placeholder="Enter User ID" class="rx-form-control" required>
                           </div>
                        </div>
                        <center>
                           <hr>
                           <button type="submit" name="submit" class="btn btn-primary" style="width:200px;">Submit</button>
						   <hr>
                           <div class="">
                              <a href="index.php" class="back-to" style="color:green;"><i class="ri-home-4-line"></i>&nbsp;<b>Back to Home</b></a>
                           </div>
                        </center>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <?php include("php_include/all_script.php");?>      
   </body>
</html>
