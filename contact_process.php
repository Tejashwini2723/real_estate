<?php
include("php_include/connect.php");

    if(isset($_POST['submit'])){
      $name=mysqli_real_escape_string($con,$_POST['name']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
      $subject=mysqli_real_escape_string($con,$_POST['subject']);
       $message=mysqli_real_escape_string($con,$_POST['message']);
	   $rand_id=rand('1111111111','9999999999');
	   
    $query=mysqli_query($con,"INSERT INTO `contact_form`(`name`, `email`, `mobile`, `subject`, `message`, `x_id`)
													VALUES ('$name','$email','$mobile','$subject','$message','$rand_id')");    
    echo '<script>alert("REQUEST SUCCESSFUL.");window.location.assign("contact_form_done.php?id='.$rand_id.'");</script>';
    }
?>