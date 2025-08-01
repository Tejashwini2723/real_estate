 <?php
 include("php_include/connect.php");
					if(isset($_POST['add_product'])){
						$status = $_POST['status'];
						$up_userid = $_POST['up_userid'];
					
		if($status=='on')	{			
			$update=mysqli_query($con,"UPDATE `user` SET `status`='In Active' WHERE `email`='$up_userid'");			
			echo '<script>alert("Done.");window.location.assign("home.php");</script>';	
		}elseif($status=='of'){
		$update=mysqli_query($con,"UPDATE `user` SET `status`='Active' WHERE `email`='$up_userid'");			
			echo '<script>alert("Done.");window.location.assign("home.php");</script>';		    
		}
					}
						?>