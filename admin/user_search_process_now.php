 <?php
 include("php_include/connect.php");
					if(isset($_POST['add_product'])){
						$up_userid = $_POST['up_userid'];
						$name = $_POST['name'];
						$mobile = $_POST['mobile'];
						$email = $_POST['email'];
						$referral_userid = $_POST['referral_userid'];
						$password = $_POST['password'];
						$trn_password = $_POST['trn_password'];
						
			$update=mysqli_query($con,"UPDATE `user` SET `email`='$email',`password`='$password',`referral_userid`='$referral_userid',`trn_password`='$trn_password',`name`='$name',`mobile`='$mobile' WHERE `userid`='$up_userid'");			
			echo '<script>alert("Done.");window.location.assign("home.php");</script>';	
					}
						?>