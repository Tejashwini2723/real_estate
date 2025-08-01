0 <?php
 include("php_include/connect.php");
					if(isset($_POST['add_product'])){
						$up_userid = $_POST['up_userid'];
						$bank_name = $_POST['bank_name'];
						$acc_no = $_POST['acc_no'];
						$ifsc = $_POST['ifsc'];
						$branck = $_POST['branck'];
						
			$update=mysqli_query($con,"UPDATE `income` SET `bank_name`='$bank_name',`acc_no`='$acc_no',`ifsc`='$ifsc',`branck`='$branck' WHERE `userid`='$up_userid'");			
			echo '<script>alert("Done.");window.location.assign("home.php");</script>';	
					}
						?>