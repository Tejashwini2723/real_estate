<?php
include('../php_include/connect.php');
    if(isset($_POST['k_userid'])){
    $k_userid=mysqli_real_escape_string($con,$_POST['k_userid']);
    
        $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$k_userid'");
        $row=mysqli_fetch_array($query);
        $userid=$row['email'];
        $name=$row['name'];
      $query=mysqli_query($con,"SELECT * FROM `user` WHERE `email`='$k_userid'");  
      if(mysqli_num_rows($query)>0){
          echo"<hr>";
        echo "<h3><font color='green'><b> ".$name."<b></font></h3>";
        echo"<hr>";
      }else{
         echo"<hr>";
       echo"<font color='red'>INVALID  USERID</font>";
        echo"<hr>";
        
      }
    }

?>