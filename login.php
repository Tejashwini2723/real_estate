<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login</title>
      <?php include("php_include/head.php");?>
   </head>
   <body style="background-image: url('images/login.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; margin: 0; display: flex; justify-content: center; align-items: center;">
      <section class="section-login padding-t-50 padding-b-100" style="width: 100%; display: flex; justify-content: center; align-items: center; height: 100%; text-align: center;">
         <div class="container" style="display: flex; justify-content: center; align-items: center; height: 100%; padding: 0;">
            <div class="rx-login-form" style="display: flex; justify-content: center; align-items: center; width: 100%; padding: 0;">
               <div class="rx-inner-form" style="width: 100%; max-width: 400px; background-color: rgba(255, 255, 255, 0.8); padding: 30px; border-radius: 10px;">
                  <form method="POST" action="login_process.php">
                     <div class="row">
                        <div class="col-12">
                           <div class="rx-banner text-center rx-banner-effects">
                              <p><img src="images/left-shape.svg" alt="banner-left-shape" class="svg-img left-side">Login
							  <img src="images/right-shape.svg" alt="banner-right-shape" class="svg-img right-side"></p>
                              <h4>Sign <span>In</span></h4>
                           </div>
                        </div>
                        <div class="col-lg-12 col-12 mb-24">
                           <div class="rx-input-box">
                              <input type="text" id="userid" name="userid" placeholder="Enter User ID" class="rx-form-control" required>
                           </div>
                        </div>
                        <div class="col-lg-12 col-12 mb-24">
                           <div class="rx-input-box">
                              <input type="password" id="password-field" name="password" placeholder="Enter Password" class="rx-form-control" required>
                           </div>
                        </div>
                        <center>
                           <a href="forgot.php" class="direct-to" style="color:black;"><b>Forgot Password?</b></a>
                           <hr>
                           <button type="submit" name="submit" class="btn btn-primary" style="width:200px;">Submit</button>
                        </center>
                        <div class="col-12">
                           <hr>
                           <div class="rx-inner-button">
                              <a href="index.php" class="back-to" style="color:green;"><i class="ri-home-4-line"></i>&nbsp;<b>Back to Home</b></a>
                              <a href="register.php" class="direct-to" style="color:red;"><i class="ri-user-add-fill"></i>&nbsp;<b>Regsiter Here !</b></a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <?php include("php_include/all_script.php");?>      
   </body>
</html>
