<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Us</title>
      <?php include("php_include/head.php");?>
   </head>
   <body>
      <?php include("php_include/header.php");?>
      <section class="section-breadcrumb padding-b-50">
         <div class="rx-breadcrumb-image" style="background-image: url('images/contact.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
           <div class="rx-breadcrumb-overlay"></div>
            <div class="inner-breadcrumb-contact">
               <div class="main-breadcrumb-contact">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="rx-banner-contact">
                              <h2>Contact Us</h2>
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
                                 <h4>Contact Us</h4>
                              </div>
                              <div class="last-contact">
                                 <ul>
                                    <li>
                                       <a href="index.php">Home</a>
                                    </li>
                                    <li>Contact</li>
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
      <section class="section-contact-details padding-t-50 padding-b-50">
         <div class="container">
            <h3 class="text-center" style="color:#9d7e54;">Contact Information</h3>
            <br>
            <div class="row">
               <div class="col-md-4 col-12 text-center mb-4">
                  <div style="border: 2px solid #9d7e54; padding: 20px; border-radius: 10px; background-color: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                     <h5 style="color: #9d7e54; font-weight: bold; margin-bottom: 10px;">
                        <i class="ri-map-pin-line" style="color: #9d7e54; font-size: 30px; margin-bottom: 15px;"></i> Our Address
                     </h5>
                     <p style="color: #555; font-size: 16px;">Bangalore-560064</p>
                  </div>
               </div>
               <div class="col-md-4 col-12 text-center mb-4">
                  <div style="border: 2px solid #9d7e54; padding: 20px; border-radius: 10px; background-color: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                     <h5 style="color: #9d7e54; font-weight: bold; margin-bottom: 10px;">
                        <i class="ri-phone-line" style="color: #9d7e54; font-size: 30px; margin-bottom: 15px;"></i> Phone Numbers
                     </h5>
                     <p style="color: #555; font-size: 16px;">+91 9874561230</p>
                  </div>
               </div>
               <div class="col-md-4 col-12 text-center mb-4">
                  <div style="border: 2px solid #9d7e54; padding: 20px; border-radius: 10px; background-color: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                     <h5 style="color: #9d7e54; font-weight: bold; margin-bottom: 10px;">
                        <i class="ri-mail-line" style="color: #9d7e54; font-size: 30px; margin-bottom: 15px;"></i> Email
                     </h5>
                     <p style="color: #555; font-size: 16px;">info@gmail.com</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section-contact padding-t-50 padding-b-100">
         <div class="container">
            <h2 class="d-none">Contact</h2>
            <div class="row">
               <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                  <div class="rx-contact-form">
                     <div class="row mb-minus-24">
                        <div class="col-lg-6 col-12 mb-24">
                           <div class="rx-contact-touch-ifrem"><br><br>
                               <img src="images/g3.jpg">
                           </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-24">
                           <div class="rx-inner-form">
                              <h3 style="color:#9d7e54">Feel Free To Contact Us</h3>
                              <br>
                              <form method="POST" action="contact_process.php">
                                 <div class="row">
                                    <div class="col-lg-6 col-12 mb-24">
                                       <div class="rx-input-box">
                                          <label for="name">Your Name*</label>
                                          <input type="text" id="name" name="name" class="rx-form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-24">
                                       <div class="rx-input-box">
                                          <label for="email">Your Email*</label>
                                          <input type="email" id="email" name="email" class="rx-form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-24">
                                       <div class="rx-input-box">
                                          <label for="phone">Your Phone Number*</label>
                                          <input type="number" id="phone" name="mobile" class="rx-form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-24">
                                       <div class="rx-input-box">
                                          <label for="subject">Your Subject*</label>
                                          <input type="text" id="subject" name="subject" class="rx-form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-12 mb-24">
                                       <div class="rx-input-box">
                                          <label for="message">Message*</label>
                                          <textarea class="rx-form-control" name="message" id="message"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                          <button type="submit" name="submit" class="rx-btn-two">Send Message</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include("php_include/footer.php");?>
      <?php include("php_include/all_script.php");?>
   </body>
</html>
