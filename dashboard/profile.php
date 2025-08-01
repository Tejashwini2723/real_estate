<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Edit Profile</title>
      <?php include("php_include/top.php");?>
      <?php include("php_include/head.php");?>
   </head>
   <body>
      <script type="text/javascript"></script>
      <?php include("php_include/header.php");?>
      <div class="modal fade" id="responsive-searchModal" tabindex="-1" aria-labelledby="responsive-searchModal" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="input-group"> 
                     <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2"> 
                     <button class="btn btn-primary" type="button" id="button-addon2">
                     <i class="bi bi-search"></i>
                     </button> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <?php include("php_include/sidebar.php");?>
      <div class="main-content app-content">
         <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
               <h1 class="page-title fw-semibold fs-18 mb-0">Edit Profile</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title"> EDIT PROFILE</div>
                     </div>
                     <?php 
                        $query=mysqli_query($con,"SELECT * FROM user WHERE userid='$userid'");
                        $row=mysqli_fetch_array($query);
                        ?>
                     <div class="card-body">
                        <form method="POST" action="profile_update_process.php">
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" placeholder="Userid" value="<?php echo $userid?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="text" name="name" class="form-control" id="floatingInputinfo" placeholder="User Name" value="<?php echo $row['name'];?>" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">User Name</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="number" name="mobile" class="form-control" id="floatingInputinfo" placeholder="Mobile" value="<?php echo $row['mobile'];?>" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Mobile</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="email" name="email" class="form-control" id="floatingInputinfo" placeholder="Email" value="<?php echo $row['email'];?>" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Email</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="text" name="city" class="form-control" id="floatingInputinfo" placeholder="city" value="<?php echo $row['city'];?>" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">City</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <select name="country" name="country" id="country" class="form-control" value="<?php echo $row['country'];?>" style="border-color: #38487c;">
                                       <option value="">---- Select Country---- </option>
                                       <option value="Afghanistan">Afghanistan</option>
                                       <option value="Åland Islands">Åland Islands</option>
                                       <option value="Albania">Albania</option>
                                       <option value="Algeria">Algeria</option>
                                       <option value="American Samoa">American Samoa</option>
                                       <option value="Andorra">Andorra</option>
                                       <option value="Angola">Angola</option>
                                       <option value="Anguilla">Anguilla</option>
                                       <option value="Antarctica">Antarctica</option>
                                       <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                       <option value="Argentina">Argentina</option>
                                       <option value="Armenia">Armenia</option>
                                       <option value="Aruba">Aruba</option>
                                       <option value="Australia">Australia</option>
                                       <option value="Austria">Austria</option>
                                       <option value="Azerbaijan">Azerbaijan</option>
                                       <option value="Bahamas">Bahamas</option>
                                       <option value="Bahrain">Bahrain</option>
                                       <option value="Bangladesh">Bangladesh</option>
                                       <option value="Barbados">Barbados</option>
                                       <option value="Belarus">Belarus</option>
                                       <option value="Belgium">Belgium</option>
                                       <option value="Belize">Belize</option>
                                       <option value="Benin">Benin</option>
                                       <option value="Bermuda">Bermuda</option>
                                       <option value="Bhutan">Bhutan</option>
                                       <option value="Bolivia">Bolivia</option>
                                       <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                       <option value="Botswana">Botswana</option>
                                       <option value="Bouvet Island">Bouvet Island</option>
                                       <option value="Brazil">Brazil</option>
                                       <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                       <option value="Brunei Darussalam">Brunei Darussalam</option>
                                       <option value="Bulgaria">Bulgaria</option>
                                       <option value="Burkina Faso">Burkina Faso</option>
                                       <option value="Burundi">Burundi</option>
                                       <option value="Cambodia">Cambodia</option>
                                       <option value="Cameroon">Cameroon</option>
                                       <option value="Canada">Canada</option>
                                       <option value="Cape Verde">Cape Verde</option>
                                       <option value="Cayman Islands">Cayman Islands</option>
                                       <option value="Central African Republic">Central African Republic</option>
                                       <option value="Chad">Chad</option>
                                       <option value="Chile">Chile</option>
                                       <option value="China">China</option>
                                       <option value="Christmas Island">Christmas Island</option>
                                       <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                       <option value="Colombia">Colombia</option>
                                       <option value="Comoros">Comoros</option>
                                       <option value="Congo">Congo</option>
                                       <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                       <option value="Cook Islands">Cook Islands</option>
                                       <option value="Costa Rica">Costa Rica</option>
                                       <option value="Cote D'ivoire">Cote D'ivoire</option>
                                       <option value="Croatia">Croatia</option>
                                       <option value="Cuba">Cuba</option>
                                       <option value="Cyprus">Cyprus</option>
                                       <option value="Czech Republic">Czech Republic</option>
                                       <option value="Denmark">Denmark</option>
                                       <option value="Djibouti">Djibouti</option>
                                       <option value="Dominica">Dominica</option>
                                       <option value="Dominican Republic">Dominican Republic</option>
                                       <option value="Ecuador">Ecuador</option>
                                       <option value="Egypt">Egypt</option>
                                       <option value="El Salvador">El Salvador</option>
                                       <option value="Equatorial Guinea">Equatorial Guinea</option>
                                       <option value="Eritrea">Eritrea</option>
                                       <option value="Estonia">Estonia</option>
                                       <option value="Ethiopia">Ethiopia</option>
                                       <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                       <option value="Faroe Islands">Faroe Islands</option>
                                       <option value="Fiji">Fiji</option>
                                       <option value="Finland">Finland</option>
                                       <option value="France">France</option>
                                       <option value="French Guiana">French Guiana</option>
                                       <option value="French Polynesia">French Polynesia</option>
                                       <option value="French Southern Territories">French Southern Territories</option>
                                       <option value="Gabon">Gabon</option>
                                       <option value="Gambia">Gambia</option>
                                       <option value="Georgia">Georgia</option>
                                       <option value="Germany">Germany</option>
                                       <option value="Ghana">Ghana</option>
                                       <option value="Gibraltar">Gibraltar</option>
                                       <option value="Greece">Greece</option>
                                       <option value="Greenland">Greenland</option>
                                       <option value="Grenada">Grenada</option>
                                       <option value="Guadeloupe">Guadeloupe</option>
                                       <option value="Guam">Guam</option>
                                       <option value="Guatemala">Guatemala</option>
                                       <option value="Guernsey">Guernsey</option>
                                       <option value="Guinea">Guinea</option>
                                       <option value="Guinea-bissau">Guinea-bissau</option>
                                       <option value="Guyana">Guyana</option>
                                       <option value="Haiti">Haiti</option>
                                       <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                       <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                       <option value="Honduras">Honduras</option>
                                       <option value="Hong Kong">Hong Kong</option>
                                       <option value="Hungary">Hungary</option>
                                       <option value="Iceland">Iceland</option>
                                       <option value="India" selected >India</option>
                                       <option value="Indonesia">Indonesia</option>
                                       <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                       <option value="Iraq">Iraq</option>
                                       <option value="Ireland">Ireland</option>
                                       <option value="Isle of Man">Isle of Man</option>
                                       <option value="Israel">Israel</option>
                                       <option value="Italy">Italy</option>
                                       <option value="Jamaica">Jamaica</option>
                                       <option value="Japan">Japan</option>
                                       <option value="Jersey">Jersey</option>
                                       <option value="Jordan">Jordan</option>
                                       <option value="Kazakhstan">Kazakhstan</option>
                                       <option value="Kenya">Kenya</option>
                                       <option value="Kiribati">Kiribati</option>
                                       <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                       <option value="Korea, Republic of">Korea, Republic of</option>
                                       <option value="Kuwait">Kuwait</option>
                                       <option value="Kyrgyzstan">Kyrgyzstan</option>
                                       <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                       <option value="Latvia">Latvia</option>
                                       <option value="Lebanon">Lebanon</option>
                                       <option value="Lesotho">Lesotho</option>
                                       <option value="Liberia">Liberia</option>
                                       <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                       <option value="Liechtenstein">Liechtenstein</option>
                                       <option value="Lithuania">Lithuania</option>
                                       <option value="Luxembourg">Luxembourg</option>
                                       <option value="Macao">Macao</option>
                                       <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                       <option value="Madagascar">Madagascar</option>
                                       <option value="Malawi">Malawi</option>
                                       <option value="Malaysia">Malaysia</option>
                                       <option value="Maldives">Maldives</option>
                                       <option value="Mali">Mali</option>
                                       <option value="Malta">Malta</option>
                                       <option value="Marshall Islands">Marshall Islands</option>
                                       <option value="Martinique">Martinique</option>
                                       <option value="Mauritania">Mauritania</option>
                                       <option value="Mauritius">Mauritius</option>
                                       <option value="Mayotte">Mayotte</option>
                                       <option value="Mexico">Mexico</option>
                                       <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                       <option value="Moldova, Republic of">Moldova, Republic of</option>
                                       <option value="Monaco">Monaco</option>
                                       <option value="Mongolia">Mongolia</option>
                                       <option value="Montenegro">Montenegro</option>
                                       <option value="Montserrat">Montserrat</option>
                                       <option value="Morocco">Morocco</option>
                                       <option value="Mozambique">Mozambique</option>
                                       <option value="Myanmar">Myanmar</option>
                                       <option value="Namibia">Namibia</option>
                                       <option value="Nauru">Nauru</option>
                                       <option value="Nepal">Nepal</option>
                                       <option value="Netherlands">Netherlands</option>
                                       <option value="Netherlands Antilles">Netherlands Antilles</option>
                                       <option value="New Caledonia">New Caledonia</option>
                                       <option value="New Zealand">New Zealand</option>
                                       <option value="Nicaragua">Nicaragua</option>
                                       <option value="Niger">Niger</option>
                                       <option value="Nigeria">Nigeria</option>
                                       <option value="Niue">Niue</option>
                                       <option value="Norfolk Island">Norfolk Island</option>
                                       <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                       <option value="Norway">Norway</option>
                                       <option value="Oman">Oman</option>
                                       <option value="Pakistan">Pakistan</option>
                                       <option value="Palau">Palau</option>
                                       <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                       <option value="Panama">Panama</option>
                                       <option value="Papua New Guinea">Papua New Guinea</option>
                                       <option value="Paraguay">Paraguay</option>
                                       <option value="Peru">Peru</option>
                                       <option value="Philippines">Philippines</option>
                                       <option value="Pitcairn">Pitcairn</option>
                                       <option value="Poland">Poland</option>
                                       <option value="Portugal">Portugal</option>
                                       <option value="Puerto Rico">Puerto Rico</option>
                                       <option value="Qatar">Qatar</option>
                                       <option value="Reunion">Reunion</option>
                                       <option value="Romania">Romania</option>
                                       <option value="Russian Federation">Russian Federation</option>
                                       <option value="Rwanda">Rwanda</option>
                                       <option value="Saint Helena">Saint Helena</option>
                                       <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                       <option value="Saint Lucia">Saint Lucia</option>
                                       <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                       <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                       <option value="Samoa">Samoa</option>
                                       <option value="San Marino">San Marino</option>
                                       <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                       <option value="Saudi Arabia">Saudi Arabia</option>
                                       <option value="Senegal">Senegal</option>
                                       <option value="Serbia">Serbia</option>
                                       <option value="Seychelles">Seychelles</option>
                                       <option value="Sierra Leone">Sierra Leone</option>
                                       <option value="Singapore">Singapore</option>
                                       <option value="Slovakia">Slovakia</option>
                                       <option value="Slovenia">Slovenia</option>
                                       <option value="Solomon Islands">Solomon Islands</option>
                                       <option value="Somalia">Somalia</option>
                                       <option value="South Africa">South Africa</option>
                                       <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                       <option value="Spain">Spain</option>
                                       <option value="Sri Lanka">Sri Lanka</option>
                                       <option value="Sudan">Sudan</option>
                                       <option value="Suriname">Suriname</option>
                                       <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                       <option value="Swaziland">Swaziland</option>
                                       <option value="Sweden">Sweden</option>
                                       <option value="Switzerland">Switzerland</option>
                                       <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                       <option value="Taiwan">Taiwan</option>
                                       <option value="Tajikistan">Tajikistan</option>
                                       <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                       <option value="Thailand">Thailand</option>
                                       <option value="Timor-leste">Timor-leste</option>
                                       <option value="Togo">Togo</option>
                                       <option value="Tokelau">Tokelau</option>
                                       <option value="Tonga">Tonga</option>
                                       <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                       <option value="Tunisia">Tunisia</option>
                                       <option value="Turkey">Turkey</option>
                                       <option value="Turkmenistan">Turkmenistan</option>
                                       <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                       <option value="Tuvalu">Tuvalu</option>
                                       <option value="Uganda">Uganda</option>
                                       <option value="Ukraine">Ukraine</option>
                                       <option value="United Arab Emirates">United Arab Emirates</option>
                                       <option value="United Kingdom">United Kingdom</option>
                                       <option value="United States">United States</option>
                                       <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                       <option value="Uruguay">Uruguay</option>
                                       <option value="Uzbekistan">Uzbekistan</option>
                                       <option value="Vanuatu">Vanuatu</option>
                                       <option value="Venezuela">Venezuela</option>
                                       <option value="Viet Nam">Viet Nam</option>
                                       <option value="Virgin Islands, British">Virgin Islands, British</option>
                                       <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                       <option value="Wallis and Futuna">Wallis and Futuna</option>
                                       <option value="Western Sahara">Western Sahara</option>
                                       <option value="Yemen">Yemen</option>
                                       <option value="Zambia">Zambia</option>
                                       <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                    <label for="floatingInputinfo" style="color:#38487c;">Country</label> 
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <select class="form-select" id="inputState" name="state" class="form-control" value="<?php echo $row['state'];?>" style="border-color: #38487c;">
                                       <option value="SelectState">Select State</option>
                                       <option value="Andra Pradesh">Andra Pradesh</option>
                                       <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                       <option value="Assam">Assam</option>
                                       <option value="Bihar">Bihar</option>
                                       <option value="Chhattisgarh">Chhattisgarh</option>
                                       <option value="Goa">Goa</option>
                                       <option value="Gujarat">Gujarat</option>
                                       <option value="Haryana">Haryana</option>
                                       <option value="Himachal Pradesh">Himachal Pradesh</option>
                                       <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                       <option value="Jharkhand">Jharkhand</option>
                                       <option value="Karnataka">Karnataka</option>
                                       <option value="Kerala">Kerala</option>
                                       <option value="Madya Pradesh">Madya Pradesh</option>
                                       <option value="Maharashtra">Maharashtra</option>
                                       <option value="Manipur">Manipur</option>
                                       <option value="Meghalaya">Meghalaya</option>
                                       <option value="Mizoram">Mizoram</option>
                                       <option value="Nagaland">Nagaland</option>
                                       <option value="Orissa">Orissa</option>
                                       <option value="Punjab">Punjab</option>
                                       <option value="Rajasthan">Rajasthan</option>
                                       <option value="Sikkim">Sikkim</option>
                                       <option value="Tamil Nadu">Tamil Nadu</option>
                                       <option value="Telangana">Telangana</option>
                                       <option value="Tripura">Tripura</option>
                                       <option value="Uttaranchal">Uttaranchal</option>
                                       <option value="Uttar Pradesh">Uttar Pradesh</option>
                                       <option value="West Bengal">West Bengal</option>
                                       <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                       <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                       <option value="Chandigarh">Chandigarh</option>
                                       <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                       <option value="Daman and Diu">Daman and Diu</option>
                                       <option value="Delhi">Delhi</option>
                                       <option value="Lakshadeep">Lakshadeep</option>
                                       <option value="Pondicherry">Pondicherry</option>
                                    </select>
                                    <label for="floatingInputinfo" class="form-label"  style="color:#38487c;">State</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <select class="form-select" id="inputDistrict" name="district" class="form-control" value="<?php echo $row['district'];?>" required style="border-color: #38487c;">
                                       <option selected value="">-- select one -- </option>
                                       <option>...</option>
                                    </select>
                                    <label for="floatingInputinfo" class="form-label"  style="color:#38487c;">District</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="number" name="pincode" class="form-control" id="floatingInputinfo" placeholder="Pincode" value="<?php echo $row['pincode'];?>" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Pincode</label>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <?php include("php_include/footer.php"); ?>
      <script type="text/javascript"></script>
      <div class="scrollToTop"> 
         <span class="arrow">
         <i class="ri-arrow-up-s-fill fs-20"></i>
         </span> 
      </div>
      <div id="responsive-overlay"></div>
      <?php include("php_include/all_script.php"); ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script>
         var AndraPradesh = ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
         var ArunachalPradesh = ["Anjaw","Changlang","Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Siang","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang","Itanagar"];
         var Assam = ["Baksa","Barpeta","Biswanath","Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup Metropolitan","Kamrup (Rural)","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Dima Hasao","Sivasagar","Sonitpur","South Salmara Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];
         var Bihar = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];
         var Chhattisgarh = ["Balod","Baloda Bazar","Balrampur","Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
         var Goa = ["North Goa","South Goa"];
         var Gujarat = ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
         var Haryana = ["Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurugram","Hisar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamunanagar"];
         var HimachalPradesh = ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"];
         var JammuKashmir = ["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
         var Jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
         var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
         var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
         var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
         "Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
         var Maharashtra = ["Ahmednagar","Akola","Amravati","Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli","Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik","Osmanabad","Palghar","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","Yavatmal"];
         var Manipur = ["Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
         var Meghalaya = ["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
         var Mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
         var Nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
         var Odisha = ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
         var Punjab = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
         var Rajasthan = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
         var Sikkim = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
         var TamilNadu = ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
         var Telangana = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar","Jogulamba","Kamareddy","Karimnagar","Khammam","Komaram Bheem","Mahabubabad","Mahbubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];
         var Tripura = ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
         var UttarPradesh = ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
         var Uttarakhand  = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
         var WestBengal = ["Alipurduar","Bankura","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah","Jalpaiguri","Jhargram","Kalimpong","Kolkata","Malda","Murshidabad","Nadia","North 24 Parganas","Paschim Bardhaman","Paschim Medinipur","Purba Bardhaman","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];
         var AndamanNicobar = ["Nicobar","North Middle Andaman","South Andaman"];
         var Chandigarh = ["Chandigarh"];
         var DadraHaveli = ["Dadra Nagar Haveli"];
         var DamanDiu = ["Daman","Diu"];
         var Delhi = ["Central Delhi","East Delhi","New Delhi","North Delhi","North East Delhi","North West Delhi","Shahdara","South Delhi","South East Delhi","South West Delhi","West Delhi"];
         var Lakshadweep = ["Lakshadweep"];
         var Puducherry = ["Karaikal","Mahe","Puducherry","Yanam"];
         
         
         $("#inputState").change(function(){
         var StateSelected = $(this).val();
         var optionsList;
         var htmlString = "";
         
         switch (StateSelected) {
           case "Andra Pradesh":
               optionsList = AndraPradesh;
               break;
           case "Arunachal Pradesh":
               optionsList = ArunachalPradesh;
               break;
           case "Assam":
               optionsList = Assam;
               break;
           case "Bihar":
               optionsList = Bihar;
               break;
           case "Chhattisgarh":
               optionsList = Chhattisgarh;
               break;
           case "Goa":
               optionsList = Goa;
               break;
           case  "Gujarat":
               optionsList = Gujarat;
               break;
           case "Haryana":
               optionsList = Haryana;
               break;
           case "Himachal Pradesh":
               optionsList = HimachalPradesh;
               break;
           case "Jammu and Kashmir":
               optionsList = JammuKashmir;
               break;
           case "Jharkhand":
               optionsList = Jharkhand;
               break;
           case  "Karnataka":
               optionsList = Karnataka;
               break;
           case "Kerala":
               optionsList = Kerala;
               break;
           case  "Madya Pradesh":
               optionsList = MadhyaPradesh;
               break;
           case "Maharashtra":
               optionsList = Maharashtra;
               break;
           case  "Manipur":
               optionsList = Manipur;
               break;
           case "Meghalaya":
               optionsList = Meghalaya ;
               break;
           case  "Mizoram":
               optionsList = Mizoram;
               break;
           case "Nagaland":
               optionsList = Nagaland;
               break;
           case  "Orissa":
               optionsList = Orissa;
               break;
           case "Punjab":
               optionsList = Punjab;
               break;
           case  "Rajasthan":
               optionsList = Rajasthan;
               break;
           case "Sikkim":
               optionsList = Sikkim;
               break;
           case  "Tamil Nadu":
               optionsList = TamilNadu;
               break;
           case  "Telangana":
               optionsList = Telangana;
               break;
           case "Tripura":
               optionsList = Tripura ;
               break;
           case  "Uttaranchal":
               optionsList = Uttaranchal;
               break;
           case  "Uttar Pradesh":
               optionsList = UttarPradesh;
               break;
           case "West Bengal":
               optionsList = WestBengal;
               break;
           case  "Andaman and Nicobar Islands":
               optionsList = AndamanNicobar;
               break;
           case "Chandigarh":
               optionsList = Chandigarh;
               break;
           case  "Dadar and Nagar Haveli":
               optionsList = DadraHaveli;
               break;
           case "Daman and Diu":
               optionsList = DamanDiu;
               break;
           case  "Delhi":
               optionsList = Delhi;
               break;
           case "Lakshadeep":
               optionsList = Lakshadeep ;
               break;
           case  "Pondicherry":
               optionsList = Pondicherry;
               break;
         }
         
         
         for(var i = 0; i < optionsList.length; i++){
           htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
         }
         $("#inputDistrict").html(htmlString);
         
         });
      </script>
   </body>
</html>