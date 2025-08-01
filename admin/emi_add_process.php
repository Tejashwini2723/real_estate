<?php 
 include("php_include/connect.php");
if(isset($_POST['submit'])){
   $up_userid=$_POST['up_userid'];
 $date=date('Y-m-d');
 
    $query=mysqli_query($con,"SELECT * FROM `loan_pay_list` WHERE `userid`='$up_userid'");
    if(mysqli_num_rows($query)==0){
     $row=mysqli_fetch_array($query);
     ;   
        $a      = date('Y-m-d', strtotime("+7 day"));
        $b      = date('Y-m-d', strtotime("+14 day"));
        $c      = date('Y-m-d', strtotime("+21 day"));
        $d      = date('Y-m-d', strtotime("+28 day"));
        $e      = date('Y-m-d', strtotime("+35 day"));
        $f      = date('Y-m-d', strtotime("+42 day"));
        $g      = date('Y-m-d', strtotime("+49 day"));
        $h      = date('Y-m-d', strtotime("+56 day"));
        $i      = date('Y-m-d', strtotime("+63 day"));
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$a','400')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$b','800')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$c','1200')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$d','1600')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$e','2000')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$f','2400')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$g','2800')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$h','3200')");
        $query  = mysqli_query($con, "INSERT INTO `loan_pay_list`(`userid`, `amount`, `date`,`requery`) VALUES ('$up_userid','400','$i','3600')");
       echo '<script>alert("Done");window.location.assign("home.php");</script>';  
} else{
    echo '<script>alert("Alreade EMI is thair");window.location.assign("home.php");</script>';  
} 
   }  ?>