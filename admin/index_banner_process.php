	 <?php
	 	include("php_include/connect.php");
						if(isset($_POST['submit'])){
									
									$headline = $_POST['headline'];
									$date_start = $_POST['date_start'];
								    $date_end = $_POST['date_end'];
								    $status="Active";
							        $image=$_FILES["image"]["name"];
	
	
	                                  $extensions=array('image/jpg','image/jpeg','image/png');
											
		                            $query=mysqli_query($con,"INSERT INTO `index_slider_banner`(`image`, `headline`, `date_start`, `date_end`, `status`) VALUES ('$image','$headline','$date_start','$date_end','Pending')");
		
		                            $newname = $image;  
		                            $target = 'b_image/'.$newname;
		                            move_uploaded_file( $_FILES['image']['tmp_name'], $target);
		                            echo '<script>alert("Submited Successfully.");window.location.assign("index_banner.php");</script>';
	                                
								}
						?>