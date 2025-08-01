 <?php
 include("php_include/connect.php");
					if(isset($_POST['add_product'])){
						$up_userid = $_POST['up_userid'];
						$auto_upgrade = $_POST['auto_upgrade'];
						$day_bal = $_POST['day_bal'];
						$referal_income = $_POST['referal_income'];
						$current_bal = $_POST['current_bal'];
						$total_bal = $_POST['total_bal'];
						$wallet = $_POST['wallet'];
						$re_purchase = $_POST['re_purchase'];
						$recharge_amount = $_POST['recharge_amount'];
						
			$update=mysqli_query($con,"UPDATE `income` SET `auto_upgrade`='$auto_upgrade',`day_bal`='$day_bal',`current_bal`='$current_bal',`total_bal`='$total_bal',`referal_income`='$referal_income',`wallet`='$wallet',`re_purchase`='$re_purchase',`recharge_amount`='$recharge_amount' WHERE email='$up_userid'");			
			echo '<script>alert("Done.");window.location.assign("edit_payment_list.php");</script>';	
					}
						?>