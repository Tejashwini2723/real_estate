 <?php
 include("php_include/connect.php");
                    if(isset($_POST['edit_off'])){
                        $edit_id=$_POST['edit_id'];
                        $status="of";
                        $update=mysqli_query($con,"UPDATE `user` SET `login_status`='$status' WHERE `id`='$edit_id'");
                        $x_status="In Active";
                         $update=mysqli_query($con,"UPDATE `user` SET `status`='$x_status' WHERE `id`='$edit_id'");
                   echo"<script>alert('ID Off Successful');window.location.assign('id_on_off.php')</script>";
                        
                    }
                ?>
			 <?php
			 include("php_include/connect.php");
                    if(isset($_POST['edit_on'])){
                        $edit_id=$_POST['edit_id'];
                        $status="on";
                        $update=mysqli_query($con,"UPDATE `user` SET `login_status`='$status' WHERE `id`='$edit_id'");
                        $x_status="Active";
                         $update=mysqli_query($con,"UPDATE `user` SET `status`='$x_status' WHERE `id`='$edit_id'");
                  echo"<script>alert('ID on Successful');window.location.assign('id_on_off.php')</script>";
                        
                    }
                ?>