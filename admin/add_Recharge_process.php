<?php 
include("php_include/connect.php");

  if(isset($_POST['submit'])){
  $up_userid=$_POST['up_userid']; 
     
    $amount=349;
   $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$up_userid'");
		$row=mysqli_fetch_array($query);

    $query_check=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$up_userid'");
    if($row=mysqli_num_rows($query_check)>0){
  
        $query_i=mysqli_query($con,"SELECT * FROM `income` WHERE `email`='$up_userid'");     
        $row1=mysqli_fetch_array($query_i);
       $recharge_amount=$row1['recharge_amount'];
   
       $date=date('Y-m-d H:i:s');
 
       $update1=mysqli_query($con,"UPDATE `income` SET `recharge_amount`='349' WHERE email='$up_userid'");
       $update3=mysqli_query($con,"INSERT INTO `recharge_list`(`userid`, `amount`, `date`) VALUES ('$up_userid','$amount','$date')"); 
 
  echo '<script>alert("Add Successful");window.location.assign("add_Recharge.php");</script>';  
    
   
    }else{
        echo '<script>alert("Invalid id");window.location.assign("add_Recharge.php");</script>';  
      }
	
}


?>