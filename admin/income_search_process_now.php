 <?php
 include("php_include/connect.php");
					if(isset($_POST['add_product'])){
						$up_userid = $_POST['up_userid'];
						$current_bal = $_POST['current_bal'];
						$roi = $_POST['roi'];
						$referal_income = $_POST['referal_income'];
						$bl_loan = $_POST['bl_loan'];
						$loan_amount = $_POST['loan_amount'];
						$cashback = $_POST['cashback'];
						$utitity_bill_wallet = $_POST['utitity_bill_wallet'];
			$update=mysqli_query($con,"UPDATE `income` SET `current_bal`='$current_bal',`referal_income`='$referal_income',`roi`='$roi',`loan_amount`='$loan_amount',`bl_loan`='$bl_loan',`cashback`='$cashback',`utitity_bill_wallet`='$utitity_bill_wallet' WHERE `userid`='$up_userid'");			
			echo '<script>alert("Done.");window.location.assign("home.php");</script>';	
					}
						?>