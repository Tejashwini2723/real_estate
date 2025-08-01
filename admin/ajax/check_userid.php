<?php
include('../php_include/connect.php');
    if(isset($_POST['referral_userid'])){
    $referral_userid=mysqli_real_escape_string($con,$_POST['referral_userid']);
    
        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$referral_userid'");
        $row=mysqli_fetch_array($query);
        $userid=$row['email'];
        $name=$row['name'];
      $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$referral_userid'");  
      if(mysqli_num_rows($query)>0){
          echo"<hr>";
        echo "<h5><font color='green'><b> ".$name."<b></font></h5>";
        echo"<hr>";
      }else{
         echo"<hr>";
       echo"<font color='red'>INVALID  USERID</font>";
        echo"<hr>";
        
      }
    }

?>