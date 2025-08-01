<?php
   include('php_include/connect.php');
   if(isset($_POST['submit'])) {
    $userid=$_POST['userid'];
    $property_id=$_POST['property_id'];
	$seller_name=$_POST['seller_name'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
	$property_address=$_POST['property_address'];
	$land_type=$_POST['land_type'];
	$ownership=$_POST['ownership'];
	$property_image=$_POST['property_image'];
	$price=$_POST['price'];
	$payment_options=$_POST['payment_options'];
	$facilities=$_POST['facilities'];
	$port_info=$_POST['port_info'];
	$image=$_FILES["image"]["name"];
                           $extensions=array('image/jpg','image/jpeg','image/png');
                           $status='open';
	
      $query=mysqli_query($con,"UPDATE `sell` SET `userid`='$userid',`seller_name`='$seller_name',`mobile`='$mobile',`address`='$address',`property_address`='$property_address',`land_type`='$land_type',`ownership`='$ownership',`property_image`='$image',`price`='$price',`payment_options`='$payment_options',`facilities`='$facilities',`port_info`='$port_info' WHERE `property_id`='$property_id'");
   	        $newname = $image;  
                              $target = '../dashboard/property_images/'.$newname;
                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
			echo"<script>alert('Added successfully');window.location.assign('index.php');</script>";								 
    }
   else{
    echo"<script>alert('Added Unsuccessfully');window.location.assign('sell1.php');</script>";
   }
?>