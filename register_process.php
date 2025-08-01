<?php
   include('php_include/connect.php');
   if(isset($_POST['submit'])) {
    $userid = rand(1000000, 9999999);
	$name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$position=$_POST['position'];
      $query=mysqli_query($con,"INSERT INTO `user`( `userid`, `name`, `email`, `mobile`, `password`, `position`) 
											VALUES ('$userid','$name','$email','$mobile','$password','$position')");
											$query=mysqli_query($con,"INSERT INTO `income`( `userid`)  VALUES ('$userid')");
   	        echo"<script>alert('Registered successfully');window.location.assign('welcome_kit.php?userid=$userid');</script>";								 
    }
   else{
    echo"<script>alert('Registered Unsuccessfully');window.location.assign('register.php');</script>";
   }
?>