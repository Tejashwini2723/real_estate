<?php
include("../php_include/connect.php");
    if(isset($_POST['referral_userid'])){
    $referral_userid=mysqli_real_escape_string($con,$_POST['referral_userid']);
    
        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$referral_userid'");
        $row=mysqli_fetch_array($query);
        $userid=$row['email'];
        $name=$row['name'];
      if($userid==$referral_userid){
          echo"<hr>";
        echo "<h3><font color='white'><b> ".$name."<b></font></h3>";
        echo"<hr>";
      }else{
         echo"<font color='red'>INVALID REFERRAL USERID</font>"; 
      }
    }

?>