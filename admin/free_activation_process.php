<?php 
include("php_include/connect.php");

  if(isset($_POST['submit'])){
  $up_userid=$_POST['up_userid']; 
     $pin=rand('11111111111111','99999999999999');
     
    $amount=1200;
   $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$up_userid'");
		$row=mysqli_fetch_array($query);
		$status=$row['status']; 
		if($status=='In Active'){
    $query_check=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$up_userid'");
    if($row=mysqli_num_rows($query_check)>0){
  
			//Pin is ok
		
        $capping=1250;
        $query_i=mysqli_query($con,"SELECT * FROM `income` WHERE `email`='$up_userid'");     
        $row1=mysqli_fetch_array($query_i);
       $current_bal=$row1['current_bal'];
   
       $date=date('Y-m-d H:i:s');
     $new_capping= 1250;
       $update1=mysqli_query($con,"UPDATE `user` SET `capping`='$new_capping' WHERE email='$up_userid'");
       $update1=mysqli_query($con,"UPDATE `user` SET `pack`='0' WHERE email='$up_userid'");
       $update2=mysqli_query($con,"UPDATE `user` SET `status`='Active' WHERE email='$up_userid'");
       $update3=mysqli_query($con,"UPDATE `user` SET `paid_date`='$date' WHERE email='$up_userid'");
       $update3=mysqli_query($con,"INSERT INTO `package`(`userid`, `x_code`, `date`, `amount`, `status`,`num_counts`,`level_status`,`com_distrbute`) VALUES ('$up_userid','$pin','$date','0','on','0','off','1')"); 
      $update3=mysqli_query($con,"INSERT INTO `admin_package`(`userid`, `x_code`, `date`, `amount`, `status`) VALUES ('$up_userid','$pin','$date','0','on')"); 
 
  echo '<script>alert("Activate Successful");window.location.assign("free_activation.php");</script>';  
    
   
    }else{
        echo '<script>alert("Invalid id");window.location.assign("free_activation.php");</script>';  
      }
		}else{
        echo '<script>alert("This ID Already Activated");window.location.assign("free_activation.php");</script>';  
      }
}


?>