<?php
   include('php_include/connect.php');
   if(isset($_POST['submit'])) {
    $userid=$_POST['userid'];
	$agent_name=$_POST['agent_name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
	$f_name=$_POST['f_name'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	
      $query=mysqli_query($con,"INSERT INTO `agents`( `userid`, `agent_name`, `mobile`, `email`, `f_name`, `address`, `pincode`) 
											VALUES ('$userid','$agent_name','$mobile','$email','$f_name','$address','$pincode')");
   	        echo"<script>alert('Added successfully');window.location.assign('index.php');</script>";								 
    }
   else{
    echo"<script>alert('Added Unsuccessfully');window.location.assign('agent.php');</script>";
   }
?>