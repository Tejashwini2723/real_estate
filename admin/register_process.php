<?php
include("php_include/connect.php");
?>

<?php
    if(isset($_POST['submit'])){
        
        $email = 'GC'.rand('1111111','9999999');
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email1 = mysqli_real_escape_string($con,$_POST['email']);
        $referral_userid = mysqli_real_escape_string($con,$_POST['referral_userid']);
	 	$side = mysqli_real_escape_string($con,$_POST['side']);
	 	$password=mysqli_real_escape_string($con,$_POST['password']);
	 	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	 	$under_userid=mysqli_real_escape_string($con,$_POST['under_userid']);
		
	 	$date = date('Y-m-d');
     	$country="India";
    	
	$flag = 0;
	
	if($name!=''   && $referral_userid!=''){
		//User filled all the fields.
			$query_check = mysqli_query($con,"select * from user where email='$email'");
                 if(mysqli_num_rows($query_check)==0){
						if(check_valid_referral_userid($referral_userid)){
            	  $flag=1;
	        
	        	}else{
						echo '<script>alert("INVALID REFERRAL.");window.location.assign("index.php");</script>';
					}
              	}else{
				//check email
				echo '<script>alert("EMAIL ALREADY USED!");window.location.assign("index.php");</script>';
			}
	}
	else{
		//check all fields are fill
		echo '<script>alert("PLEASE FIELD ALL THE FIELD.");window.location.assign("index.php");</script>';
	}
	

    

	//Now we are heree
	//It means all the information is correct
	//Now we will save all the information

	if($flag==1){
	           
		        
            	        $email=strtoupper("$email");
            	        $email1=strtolower("$email1");
            	        $name=strtoupper("$name");
            	        $referral_userid=strtoupper("$referral_userid");
            	        
		   $query = mysqli_query($con,"INSERT INTO `user`(`email`,`email1`,`password`,`referral_userid`, `under_userid`,`side`, `trn_password`,`status`,`date`) VALUES ('$email','$email1','$password','$referral_userid','$under_userid','$side','$password','In Active','$date')");
			//income table
			$query = mysqli_query($con,"UPDATE `user` SET `name`='$name' WHERE email='$email'");
				$query = mysqli_query($con,"INSERT INTO `income`(`email`)VALUES('$email');");
		
			// tron_passive_stipend table 
			$query = mysqli_query($con,"insert into tree(`userid`) values('$email')");
    		//Insert to side
    		$query = mysqli_query($con,"update tree set `$side`='$email' where userid='$under_userid'");
	//This is the main part to join a user\
		//If you will do any mistake here. Then the site will not work.
		
		//Update count and Income.
		$temp_under_userid = $under_userid;
		$temp_side_count = $side.'count'; //leftcount or rightcount
		
		$temp_side = $side;
		$total_count=1;
		$i=1;
		while($total_count>0){
			$i;
			$q = mysqli_query($con,"select * from tree where userid='$temp_under_userid'");
			$r = mysqli_fetch_array($q);
			$current_temp_side_count = $r[$temp_side_count]+1;
			$temp_under_userid;
			$temp_side_count;
			mysqli_query($con,"update tree set `$temp_side_count`=$current_temp_side_count where userid='$temp_under_userid'");
			
			//income
			if($temp_under_userid!=""){
				$income_data = income($temp_under_userid);
				//check capping
				//$income_data['day_bal'];
				if($income_data['day_bal']<$capping){
					$tree_data = tree($temp_under_userid);
					
					//check leftplusright
					//$tree_data['leftcount'];
					//$tree_data['rightcount'];
					//$leftplusright;
					
					$temp_left_count = $tree_data['leftcount'];
					$temp_right_count = $tree_data['rightcount'];
					//Both left and right side should at least 1 user
					if($temp_left_count>0 && $temp_right_count>0){
						if($temp_side=='left'){
							$temp_left_count;
							$temp_right_count;
							if($temp_left_count<=$temp_right_count){
								
								$new_day_bal = $income_data['day_bal']+0;
								$new_current_bal = $income_data['current_bal']+0;
								$new_total_bal = $income_data['total_bal']+0;
								
								//update income
								mysqli_query($con,"update income set day_bal='$new_day_bal', current_bal='$new_current_bal', total_bal='$new_total_bal' where userid='$temp_under_userid' limit 1");	
							
							}
						}
						else{
							if($temp_right_count<=$temp_left_count){
						
								$new_day_bal = $income_data['day_bal']+0;
								$new_current_bal = $income_data['current_bal']+0;
								$new_total_bal = $income_data['total_bal']+0;
								$temp_under_userid;
								//update income
								if(mysqli_query($con,"update income set day_bal='$new_day_bal', current_bal='$new_current_bal', total_bal='$new_total_bal' where userid='$temp_under_userid'")){
									
								}
							}
						}
					}//Both left and right side should at least 1 user
					
				}
				//change under_userid
				$next_under_userid = getUnderId($temp_under_userid);
				$temp_side = getUnderIdPlace($temp_under_userid);
				$temp_side_count = $temp_side.'count';
				$temp_under_userid = $next_under_userid;	
				
				$i++;
			}
			
			//Chaeck for the last user
			if($temp_under_userid==""){
				$total_count=0;
			}
			
		}//Loop
		
		
		
		

 header("location:conform.php?userid=$email");
                        

		echo mysqli_error($con);

  }

	 
    }
    
?><!--/join user-->
<?php 

function check_valid_referral_userid($referral_userid){
	global $con;
	$query = mysqli_query($con,"select * from user where email='$referral_userid'");
	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}
function side_check($email,$side){
	global $con;
	
	$query =mysqli_query($con,"select * from tree where userid='$email'");
	$result = mysqli_fetch_array($query);
	$side_value = $result[$side];
	if($side_value==''){
		return true;
	}
	else{
		return false;
	}
}
function tree($email){
	global $con;
	$data = array();
	$query = mysqli_query($con,"select * from tree where userid='$email'");
	$result = mysqli_fetch_array($query);
	$data['left'] = $result['left'];
	$data['right'] = $result['right'];
	$data['leftcount'] = $result['leftcount'];
	$data['rightcount'] = $result['rightcount'];
	return $data;
}
function income($userid){
	global $con;
	$data = array();
	$query = mysqli_query($con,"select * from income where email='$userid'");
	$result = mysqli_fetch_array($query);
	$data['day_bal'] = $result['day_bal'];
	$data['current_bal'] = $result['current_bal'];
	$data['total_bal'] = $result['total_bal'];
	
	return $data;
}
function getUnderId($email){
	global $con;
	$query = mysqli_query($con,"select * from user where email='$email'");
	$result = mysqli_fetch_array($query);
	return $result['under_userid'];
}
function getUnderIdPlace($email){
	global $con;
	$query = mysqli_query($con,"select * from user where email='$email'");
	$result = mysqli_fetch_array($query);
	return $result['side'];
}

?>