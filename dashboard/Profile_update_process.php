<?php include("php_include/top.php");?>

 <?php
       if(isset($_POST['submit'])){
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$city=$_POST['city'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$district=$_POST['district'];
		$pincode=$_POST['pincode'];
		$name=$_POST['name'];
		
		$query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
		$row=mysqli_fetch_array($query);

		if($query){
			$query=mysqli_query($con,"UPDATE `user` SET `name`='$name',`email`='$email',`mobile`='$mobile',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`pincode`='$pincode' WHERE `userid`='$userid'");
			if($query){
				echo'<script>alert("Update Successful");window.location.assign("profile.php");</script>';
			}
		}else{
			echo'<script>alert("Invalid TRN Password");window.location.assign("profile.php");</script>';
		}
		
	}
     ?> 