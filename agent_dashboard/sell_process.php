<?php
   include('php_include/connect.php');
   if(isset($_POST['submit'])) {
    $userid=$_POST['userid'];
	$district=$_POST['district'];
    $taluk=$_POST['taluk'];
    $hobli=$_POST['hobli'];
	$village=$_POST['village'];
	$deals=$_POST['deals'];
	$property_id=rand('11111111111','99999999999');
	
      $query=mysqli_query($con,"INSERT INTO `sell`(`userid`, `district`, `taluk`, `hobli`, `village`, `deals`, `property_id`) 
											VALUES ('$userid','$district','$taluk','$hobli','$village','$deals','$property_id')");
   	        echo"<script>alert('Added successfully');window.location.assign('sell1.php?property_id=$property_id');</script>";								 
    }
   else{
    echo"<script>alert('Added Unsuccessfully');window.location.assign('sell.php');</script>";
   }
?>