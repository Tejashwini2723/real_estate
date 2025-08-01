<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Blogs</title>
      <?php include("php_include/head.php"); ?>
   </head>
   <body>
      <?php include("php_include/header.php"); ?>
      <section class="section-breadcrumb padding-b-50" >
         <div class="rx-breadcrumb-image" style="background-image: url('images/gallery.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
               <div class="main-breadcrumb-contact">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="rx-banner-contact">
                              <h2>Blogs</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="rx-banner-breadcrumb">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="breadcrumb-contact">
                              <div class="main-heading">
                                 <h4>Blogs</h4>
                              </div>
                              <div class="last-contact">
                                 <ul>
                                    <li>
                                       <a href="index.php">Home</a>
                                    </li>
                                    <li>Blogs</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section-room padding-t-50 padding-b-100">
    <div class="container">
        <div class="row mb-minus-24">
            <?php 
                include("php_include/connect.php");
                $query = mysqli_query($con, "SELECT * FROM `blog`");
                
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-4 col-sm-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000">
                    <div class="rx-rooms-main-box">
                        <div class="rooms-box-front">
                            <h3>Blog Name: <?php echo $row['name']; ?></h3>

                            <?php 
                                if ($row['image'] == NULL) {
                            ?> 
                                <img src="images/1.webp" class="img-fluid" style="max-width: 100%; height: auto; width: 400px; object-fit: cover;">
                            <?php 
                                } else {
                            ?>   
                                <img src="admin/blog_image/<?php echo $row['image']; ?>" class="img-fluid" style="max-width: 100%; height: auto; width: 400px; object-fit: cover;">
                            <?php 
                                }
                            ?>
                            <br>
                        </div>

                        <div class="rooms-box-back">
                            <?php 
                                if ($row['image'] == NULL) {
                            ?> 
                                <img src="images/1.webp" class="img-fluid" style="max-width: 100%; height: auto; width: 400px; object-fit: cover;">
                            <?php 
                                } else {
                            ?>   
                                <img src="admin/blog_image/<?php echo $row['image']; ?>" class="img-fluid" style="max-width: 100%; height: auto; width: 400px; object-fit: cover;">
                            <?php 
                                }
                            ?>
                            <br>
                            <div class="content-wrap">
                                <div class="box-overlay"></div>
                                 <?php 
                                if ($row['image'] == NULL) {
                            ?> 
                                <img src="images/1.webp" class="img-fluid" style="max-width: 100%; height: auto; width: 400px; object-fit: cover;">
                            <?php 
                                } else {
                            ?>   
                                <img src="admin/blog_image/<?php echo $row['image']; ?>" class="img-fluid" style="max-width: 100%; height: auto; width: 400px; object-fit: cover;">
                            <?php 
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                    }
                } else {
                    echo "No blogs available.";
                }
            ?>
        </div>
    </div>
</section>
<?php include("php_include/footer.php"); ?>
      <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
      <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
      <script src="assets/js/vendor/jquery-ui.min.js"></script>
      <script src="assets/js/vendor/aos.js"></script>
      <script src="assets/js/vendor/smoothscroll.min.js"></script>
      <script src="assets/js/vendor/jquery.fancybox.min.js"></script>
      <script src="assets/js/vendor/slick.min.js"></script>
      <script src="assets/js/vendor/owl.carousel.min.js"></script>
      <script src="assets/js/vendor/swiper-bundle.min.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
