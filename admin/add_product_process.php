<?php
include("php_include/connect.php");
                           if(isset($_POST['submit'])){
                               $product_name      =      mysqli_real_escape_string($con,$_POST['product_name']);
                               $mrp      =      mysqli_real_escape_string($con,$_POST['mrp']);
                               $dp      =      mysqli_real_escape_string($con,$_POST['dp']);
                               $bv      =      mysqli_real_escape_string($con,$_POST['bv']);
                               $brand      =      mysqli_real_escape_string($con,$_POST['brand']);
                               $categary      =      mysqli_real_escape_string($con,$_POST['categary']);
                               $headline      =      mysqli_real_escape_string($con,$_POST['headline']);
                               $content1      =      mysqli_real_escape_string($con,$_POST['content1']);
                               $content2      =      mysqli_real_escape_string($con,$_POST['content2']);
                               $p_code=rand('111111111','999999999');
                               $image=$_FILES["image"]["name"];
                               $status='Pending';
                               $extensions=array('image/jpg','image/jpeg','image/png');
                               	   
                               $query=mysqli_query($con,"INSERT INTO `products`(`product_name`, `mrp`, `dp`, `bv`, `image`,`brand`,`p_code`,`categary`,`headline`,`content1`,`content2`) VALUES ('$product_name','$mrp','$dp','$bv','$image','$brand','$p_code','$categary','$headline','$content1','$content2')");
                               	    
                               	$newname = $image;  
                                $target = 'product_image/'.$newname;
                                move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                               	     if($query){
                               	          echo '<script>alert("ADD SUCCESSFUL.");window.location.assign("add_product.php");</script>';
                               	     }else{
                               	         echo '<script>alert("Sumthing Went Wrong.");window.location.assign("add_product.php");</script>'; 
                               	     }
                               	     
                               	       
                           }
                           ?> 