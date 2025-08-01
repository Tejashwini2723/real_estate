<?php

require("php_include/connect.php");

$pass_code = mysqli_real_escape_string($con,$_POST['pass_code']);

$query = mysqli_query($con,"select * from admin where id='1'");
$row=mysqli_fetch_array($query);
$codess=$row['codess'];
	if($codess==$pass_code){
	echo '<script>alert("Login Success.");window.location.assign("home.php");</script>';
	}else{
	    	echo '<script>alert("Code is Wrong please re enter code.");window.location.assign("get_code.php");</script>';
	}
	



?>