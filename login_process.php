<?php
   session_start();
   require('php_include/connect.php');
  echo $userid = mysqli_real_escape_string($con,$_POST['userid']);
 echo  $password = mysqli_real_escape_string($con,$_POST['password']);
   
   $query = mysqli_query($con,"select * from user where userid='$userid' and password='$password'");
   if(mysqli_num_rows($query)>0){
   $query_user=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");    
   $row_user=mysqli_fetch_array($query_user);    
   
       if($row_user['position']=='admin'){
   	$_SESSION['userid'] = $userid;
   	$_SESSION['id'] = session_id();
   	$_SESSION['login_type'] = "admin";
   	echo '<script>alert("Login Success.");window.location.assign("admin/home.php");</script>';
   	
       }elseif($row_user['position']=='user'){
           
       	$_SESSION['userid'] = $userid;
   	    $_SESSION['id'] = session_id();
        	$_SESSION['login_type'] = "user";    
        	echo '<script>alert("Login Success.");window.location.assign("dashboard/index.php");</script>';
        	
        }elseif($row_user['position']=='agent'){
           
       	$_SESSION['userid'] = $userid;
   	    $_SESSION['id'] = session_id();
        	$_SESSION['login_type'] = "agent";    
        	echo '<script>alert("Login Success.");window.location.assign("agent_dashboard/index.php");</script>';
       }
   }
   else{
   	echo '<script>alert("Email id or password is worng.");window.location.assign("index.php");</script>';
   }
   
   ?>
