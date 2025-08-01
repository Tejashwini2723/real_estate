<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <?php include("php_include/top.php");?>
   <?php include("php_include/head.php");?>
   <body>
      <script type="text/javascript"></script>
      <?php include("php_include/header.php");?>
      <div class="modal fade" id="responsive-searchModal" tabindex="-1" aria-labelledby="responsive-searchModal" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="input-group"> <input type="text" class="form-control border-end-0" placeholder="Search Anything ..." aria-label="Search Anything ..." aria-describedby="button-addon2"> <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button> </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <?php include("php_include/sidebar.php");?>
      <div class="main-content app-content">
         <div class="container-fluid">
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
               <h1 class="page-title fw-semibold fs-18 mb-0">Dashboard</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title">Select Address</div>
                     </div>
                     <div class="card-body">
                        <?php 
                           $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                           $row=mysqli_fetch_array($query);
                           ?>
                        <div class="row">
                           <div class="col-12 col-md-12 col-lg-12">
                              <form method="POST" action="sell_process.php">
                                 <div class="form-floating mb-3">
                                    <input type="hidden" name="userid" class="form-control" value="<?php echo $userid;?>" id="floatingInputinfo" placeholder="User Name" style="border-color: #38487c; width:290px;">
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="district" class="form-select" name="district" onchange="updateTaluks()" style="border-color: #38487c; width:390px;">
                                       <option value="">Select a District</option>
                                       <option value="BAGALKOTE">BAGALKOTE</option>
                                       <option value="BALLARI">BALLARI</option>
                                       <option value="BANGALORE RURAL">BANGALORE RURAL</option>
                                       <option value="BELAGAVI">BELAGAVI</option>
                                       <option value="BENGALURU">BENGALURU</option>
                                       <option value="BIDAR">BIDAR</option>
                                       <option value="CHAMARAJANAGARA">CHAMARAJANAGARA</option>
                                       <option value="CHIKKABALLAPUR">CHIKKABALLAPUR</option>
                                       <option value="CHIKKAMAGALURU">CHIKKAMAGALURU</option>
                                       <option value="CHITRADURGA">CHITRADURGA</option>
                                       <option value="DAKSHINA KANNADA">DAKSHINA KANNADA</option>
                                       <option value="DAVANAGERE">DAVANAGERE</option>
                                       <option value="DHARWAD">DHARWAD</option>
                                       <option value="GADAG">GADAG</option>
                                       <option value="HASSAN">HASSAN</option>
                                       <option value="HAVERI">HAVERI</option>
                                       <option value="KALABURAGI">KALABURAGI</option>
                                       <option value="KODAGU">KODAGU</option>
                                       <option value="KOLAR">KOLAR</option>
                                       <option value="KOPPAL">KOPPAL</option>
                                       <option value="MANDYA">MANDYA</option>
                                       <option value="MYSORE">MYSORE</option>
                                       <option value="RAICHUR">RAICHUR</option>
                                       <option value="RAMANAGARA">RAMANAGARA</option>
                                       <option value="SHIVAMOGGA">SHIVAMOGGA</option>
                                       <option value="TUMAKURU">TUMAKURU</option>
                                       <option value="UDUPI">UDUPI</option>
                                       <option value="UTTAR KANNADA">UTTAR KANNADA</option>
                                       <option value="VIJAYANAGARA">VIJAYANAGARA</option>
                                       <option value="VIJAYAPURA">VIJAYAPURA</option>
                                       <option value="YADAGIR">YADAGIR</option>
                                    </select>
                                    <label for="district" style="color:#38487c;">District</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="taluk" name="taluk" class="form-select" onchange="updateHoblis()" style="border-color: #38487c; width:390px;">
                                       <option value="">Select a Taluk</option>
                                    </select>
                                    <label for="taluk" style="color:#38487c;">Taluk</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="hobli" class="form-select" name="hobli" style="border-color: #38487c; width:390px;">
                                       <option value="">Select a Hobli</option>
                                    </select>
                                    <label for="hobli" style="color:#38487c;">Hobli</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <input type="text" name="village" class="form-control" id="floatingInputinfo" placeholder="Village" style="border-color: #38487c; width:390px;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Village</label>
                                 </div>
                                 <div class="form-floating mb-3">
                                    <select id="deals" class="form-select" name="deals" style="border-color: #38487c; width:390px;">
                                       <option value="">Select a Deal Type</option>
                                       <option value="Building">Building</option>
                                       <option value="Villas">Villas</option>
                                       <option value="Plots">Plots</option>
                                       <option value="Commercial - Retail">Commercial - Retail</option>
                                       <option value="Office Space">Office Space</option>
                                       <option value="Commercial Leasing">Commercial Leasing</option>
                                       <option value="Farm House">Farm House</option>
                                       <option value="Farm Land">Farm Land</option>
                                       <option value="Industrial Leasing">Industrial Leasing</option>
                                       <option value="Industrial Sale Purchase">Industrial Sale Purchase</option>
                                       <option value="Land">Land</option>
                                       <option value="FSI">FSI</option>
                                       <option value="Hotels">Hotels</option>
                                       <option value="Hospitals">Hospitals</option>
                                       <option value="School">School</option>
                                       <option value="Multi Story Apartment">Multi Story Apartment</option>
                                       <option value="Rented Commercial">Rented Commercial</option>
                                       <option value="Residential Leasing">Residential Leasing</option>
                                    </select>
                                    <label for="deals" style="color:#38487c;">Deals Type</label>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript"></script>
      <noscript>
         <p>To display this page you need a browser that supports JavaScript.</p>
      </noscript>
      <?php include("php_include/footer.php"); ?>
      <script type="text/javascript"></script>
      <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
      <div id="responsive-overlay"></div>
      <script>
         function updateTaluks() {
           const districtSelect = document.getElementById('district');
           const talukSelect = document.getElementById('taluk');
           const hobliSelect = document.getElementById('hobli');
           talukSelect.innerHTML = '<option value="">Select a Taluk</option>';
           hobliSelect.innerHTML = '<option value="">Select a Hobli</option>';
           const district = districtSelect.value;
           let taluks = [];
            switch(district) {
         	  case 'BAGALKOTE':  // BAGALKOTE
         	  taluks = ['Badami','Bagalkote', 'Bilagi', 'Guledagudda', 'Hunagund', 'Ilkal', 'Jamakhandi', 'Mudhol', 'Rabakavi Banahatti'];
         	  break;
         	case 'BALLARI':  // BALLARI
         	  taluks = ['Ballari', 'Kampli', 'Kurugodu', 'Sandur', 'Sirguppa'];
         	  break;
         	  case 'BANGALORE RURAL':  // BANGALORE RURAL
         	  taluks = ['Devanahalli', 'Doddaballapura', 'Hoskote', 'Nelamangala'];
         	  break;
         	case 'BELAGAVI':  // BELAGAVI
         	  taluks = ['Athani', 'Bailhongal', 'Belagavi', 'Chikkodi', 'Gokak', 'Hukkeri', 'Kagavada', 'Khanapur', 'Kittura', 'Mudalagi', 'Nippani', 'Raibag', 'Ramdurga', 'Savadatti','Yaragatti'];
         	  break;
         	case 'BENGALURU':  // BENGALURU
         	  taluks = ['Anekal','Bangalore-East','Bangalore-North','Bangalore-South', 'Yalahanka'];
         	  break;
         	case 'BIDAR':  // BIDAR
         	  taluks = ['Aurad','Basavakalyan','Bhalki','Bidar', 'Chitguppa', 'Hulasura','Humnabad','Kamalanagara'];
         	  break;
         	case 'CHAMARAJANAGARA':  // CHAMARAJANAGARA
         	  taluks = ['Chamarajanagara', 'Gundlupet','Kollegala', 'Kollegala(Hanuru)','Yalandur'];
         	  break;
         	case 'CHIKKABALLAPUR':  // CHIKKABALLAPUR
         	  taluks = ['Bagepalli', 'Cheluru', 'Chikballapur', 'Chinthamani', 'Gauribidanur','Gudibande', 'Manchenahalli', 'Sidlaghatta'];
         	  break;
         	case 'CHIKKAMAGALURU':  // CHIKKAMAGALURU
         	  taluks = [ 'Ajjampura', 'Chikkamagaluru', 'Kadur','Kalasa', 'Koppa', 'Mudigere', 'Narasimharajapura', 'Sringeri', 'Tarikere'];
         	  break;
         	case 'CHITRADURGA':  // CHITRADURGA
         	  taluks = ['Challakere', 'Chitradurga', 'Hiriyur', 'Holalkere', 'Hosadurga', 'Molakalmur'];
         	  break;
         	case 'DAKSHINA KANNADA':  // DAKSHINA KANNADA
         	  taluks = ['Bantwal', 'Belthangady', 'Kadaba', 'Mangalore', 'Mudabidri', 'Mulki', 'Puttur', 'Sullia', 'Ullal'];
         	  break;
         	case 'DAVANAGERE':  // DAVANAGERE
         	  taluks = ['Channagiri', 'Davanagere', 'Harihar', 'Honnali', 'Jagalur', 'Nyamati'];
         	  break;
         	case 'DHARWAD':  // DHARWAD
         	  taluks = ['Alnavara', 'Annigeri', 'Dharawad', 'Hubballi', 'Hubballi Nagara', 'Kalgatgi', 'Kundgol', 'Navalgund'];
         	  break;
         	case 'GADAG':  // GADAG
         	  taluks = ['Gadag', 'Gajendragad', 'Laxmeshwar', 'Mundargi', 'Naragund', 'Ron', 'Shirahatti'];
         	  break;
         	case 'HASSAN':  // HASSAN
         	  taluks = ['Alur', 'Arkalgud', 'Arsikere', 'Belur', 'Channarayapatna', 'Hassan', 'Holenarasipura', 'Sakleshpura'];
         	  break;
         	case 'HAVERI':  // HAVERI
         	  taluks = ['Byadagi', 'Hangal', 'Haveri', 'Hirekerur', 'Ranebennur', 'Ratteehalli', 'Savanur', 'Shiggaon'];
         	  break;
         	case 'KALABURAGI':  // KALABURAGI
         	  taluks = ['Afzalpur', 'Aland', 'Chincholi', 'Chittapur', 'Jevargi', 'Kamalapura', 'Sedam','Shahabada', 'Yadrami'];
         	  break;
         	case 'KODAGU':  // KODAGU
         	  taluks = ['Kushalanagara', 'Madikeri', 'Ponnampete', 'Somawarpet', 'Virajpet'];
         	  break;
         	case 'KOLAR':  // KOLAR
         	  taluks = ['Bangarpet', 'K.G.F', 'Kolar', 'Malur', 'Mulbagal', 'Srinivaspur'];
         	  break;
         	case 'KOPPAL':  // KOPPAL
         	  taluks = ['Gangavathi', 'Kanakagiri', 'Karatagi', 'Koppal', 'Kukanura', 'Kushtagi', 'Yelburga'];
         	  break;
         	case 'MANDYA':  // MANDYA
         	  taluks = ['Krpet', 'Maddur', 'Malavalli', 'Mandya', 'Nagamangala', 'Pandavapura', 'Srirangapatna'];
         	  break;
         	case 'MYSORE':  // MYSORE
         	  taluks = ['Heggadadevanakote', 'Hunsur','K.R.Nagar', 'Mysore', 'Nanjangud', 'Periyapatana', 'Saligrama','Saraguru', 'T.Narasipura'];
         	  break;
         	case 'RAICHUR':  // RAICHUR
         	  taluks = ['Arakera', 'Devdurga', 'Lingasugur', 'Manvi', 'Maski', 'Raichur', 'Sindhanur', 'Siravara'];
         	  break;
         	case 'RAMANAGARA':  // RAMANAGARA
         	  taluks = ['Channapatna', 'Harohalli', 'Kanakpura', 'Magadi', 'Ramanagar'];
         	  break;
         	case 'SHIVAMOGGA':  // SHIVAMOGGA
         	  taluks = ['Bhadravathi', 'Hosanagar', 'Sagar', 'Shikaripura', 'Shivamogga', 'Soraba', 'Thirthally'];
         	  break;
         	case 'TUMAKURU':  // TUMAKURU
         	  taluks = ['Chiknayakanahalli', 'Gubbi', 'Koratagere', 'Kunigal', 'Madhugiri', 'Pavagada', 'Sira', 'Tiptur', 'Tumakuru', 'Turuvekere'];
         	  break;
         	case 'UDUPI':  // UDUPI
         	  taluks = ['Bramhavara', 'Byndur', 'Hebri', 'Kapu', 'Karkala', 'Kundapura', 'Udupi'];
         	  break;
         	case 'UTTAR KANNADA':  // UTTAR KANNADA
         	  taluks = ['Ankola', 'Bhatkal', 'Dandeli', 'Haliyal', 'Honnavar', 'Joida', 'Karwar', 'Kumta', 'Mundgod', 'Siddapur', 'Sirsi', 'Yellapur'];
         	  break;
         	case 'VIJAYANAGARA':  // VIJAYANAGARA
         	  taluks = ['Hadagali', 'Hagaribommanahalli', 'Harapanahalli', 'Hospet', 'Kotturu', 'Kudligi'];
         	  break;
         	case 'VIJAYAPURA':  // VIJAYAPURA
         	  taluks = ['Alamela', 'Babaleshvara', 'Basavan Bagewadi', 'Chadachana', 'Devara Hipparagi', 'Indi', 'Kolhara', 'Muddebihal', 'Nidagundi', 'Sindagi', 'Talikoti', 'Tikota', 'Vijayapura'];
         	  break;
         	case 'YADAGIR':  // YADAGIR
         	  taluks = ['Gurumitakala', 'Hunisigi', 'Shahapur', 'Shorapur', 'Vadagera', 'Yadgir'];
         	  break;
         	default:
         	  taluks = [];
           }
           taluks.forEach(taluk => {
         	const option = document.createElement('option');
         	option.value = taluk;
         	option.textContent = taluk;
         	talukSelect.appendChild(option);
           });
         }
         function updateHoblis() {
           const talukSelect = document.getElementById('taluk');
           const hobliSelect = document.getElementById('hobli');
           hobliSelect.innerHTML = '<option value="">Select a Hobli</option>';
           const taluk = talukSelect.value;
           let hoblis = [];
           switch(taluk) {
         	case 'Badami':  
         	  hoblis = ['Badami', 'Kerura', 'Kulageri'];
         	  break;
         	case 'Bagalkote':
         	  hoblis = ['Bagalakota', 'Kaladagi', 'Seetimani'];
         	break;
         	case 'Bilagi':  
         	  hoblis = ['Anagavadi', 'Beelagi'];
         	break;
         	case 'Guledagudda':  
         	  hoblis = ['Gulledagudda'];
         	break;
         	case 'Hunagund':  
         	  hoblis = ['Ameenagada', 'Hunagunda', 'Karadi'];
         	  break;
         	case 'Ilkal':  
         	  hoblis = ['Ameenagada', 'Ilakalla','Karadi'];
         	  break;
         	case 'Jamakhandi':  
         	  hoblis = ['Jamakhandi', 'Savalagi', 'Teradala'];
         	break;
         	case 'Mudhol':  
         	  hoblis = ['Lokapura', 'Mudhola'];
         	break;
         	case 'Rabakavi Banahatti':  
         	  hoblis = ['Mudhola', 'Teradala'];
         	break;
         	case 'Ballari':  
         	  hoblis = ['Ballari','Bellary','Koluru','Moka','Rupanagudi'];
         	break;
         	case 'Kampli':  
         	  hoblis = ['Kampli', 'Kurugobu'];
         	break;
         	case 'Kurugodu':  
         	  hoblis = ['Koluru', 'Kurugodu'];
         	break;
         	case 'Sandur':  
         	  hoblis = ['Choranuru', 'Sanduru', 'Toranagallu'];
         	break;
         	case 'Sirguppa':  
         	  hoblis = ['Hachcholli', 'Karuru', 'Siruguppa','Tekkalakote'];
         	break;
         	case 'Devanahalli':  
         	  hoblis = ['Channarayapatna', 'Kasaba','Kundana','Vijayapura'];
         	break;
         	case 'Doddaballapura':  
         	  hoblis = ['Doddabelavangala','Kasaba','Madure','Sasalu','Tubagiri'];
         	break;
         	case 'Hoskote':  
         	  hoblis = ['Anugondanahalli', 'Jadigehalli', 'Kasaba','nandagudi','Sulibele'];
         	break;
         	case 'Nelamangala':  
         	  hoblis = ['Kasaba', 'Kasaba-2','Sompura','Sompura-2','Tyamagundla','Tyamagundla-2'];
         	break;
         	case 'Athani':  
         	  hoblis = ['Anantapura', 'Athani', 'Telasanga'];
         	break;
         	case 'Bailhongal':  
         	  hoblis = ['Bailhongal', 'Nesaragi'];
         	break;
         	case 'Belagavi':  
         	  hoblis = ['Bagevadi', 'Belagavi','Kakati','Uchaganva'];
         	break;
         	case 'Chikkodi':  
         	  hoblis = ['Chikkodi','Nagaramunnoli','Sadalaga'];
         	break;
         	case 'Gokak':  
         	  hoblis = ['Gokak', 'Kowjalagi'];
         	break;
         	case 'Hukkeri':  
         	  hoblis = ['Hukkeri', 'Sankeshvara','Yamakanamardi'];
         	break;
         	case 'Kagavada':  
         	  hoblis = ['Kagavada'];
         	break;
         	case 'Khanapur':  
         	  hoblis = ['Beedi','Gunji','Jamboti','Khanapura'];
         	break;
         	case 'Kittura':  
         	  hoblis = ['Kittura'];
         	break;
         	case 'Mudalagi':  
         	  hoblis = ['Arabhanvi', 'Kowjalagi'];
         	break;
         	case 'Nippani':  
         	  hoblis = ['Nippani', 'Sadalaga'];
         	break;
         	case 'Raibag':  
         	  hoblis = ['Rayabaga', 'Kudachi'];
         	break;
         	case 'Ramdurga':  
         	  hoblis = ['K Chandaragi', 'Katakola','Mudakavi','Surebana'];
         	break;
         	case 'Savadatti':  
         	  hoblis = ['Munavalli','Muragoda','Savadatti'];
         	break;
         	case 'Yaragatti':  
         	  hoblis = ['Yaragatti'];
         	break;
         	case 'Anekal':  
         	  hoblis = ['Attibele-1', 'Attibele-2','Jigani','Jigani-2','Kasaba','Kasaba-2','Sarjapura-1','Sarjapura-2','Sarjapura-3'];
         	break;
         	case 'Bangalore-East':  
         	  hoblis = ['Bidarahalli-1','Bidarahalli-2','Bidarahalli-3','K R Pura-1','K R Pura-2','K R Pura-3','Mahadevapura','Marathahalli','Varturu-1','Varturu-2'];
         	break;
         	case 'Bangalore-North':  
         	  hoblis = ['Dasanapura-1','Dasanapura-2','Dasanapura-3', 'Kasaba-1','Kasaba-2','Yashavantapura-1','Yashavantapura-2'];
         	break;
         	case 'Bangalore-South':  
         	  hoblis = ['Beguru-1','Beguru-2','Beguru-3','Kengeri-1','Kengeri-2','Kengeri-3','Kengeri-4','Tavarekere-1','Tavarekere-2','Tavarekere-3','Uttarahalli-1','Uttarahalli-2','Uttarahalli-3','Uttarahalli-4','Uttarahalli-5'];
         	break;
         	case 'Yalahanka':  
         	  hoblis = ['Hesarughatta-1','Hesarughatta-2','Jala-1','Jala-2','Jala-3','Yalahanka-1','Yalahanka-2','Yalahanka-3'];
         	break;
         	case 'Aurad':  
         	  hoblis = ['Chintaki','Dabaka','Owradabi','Santapura','Tanakusanura'];
         	break;
         	case 'Basavakalyan':  
         	  hoblis = ['Basavakalyan','Kohinura','Mantala','Mudabi','Rajeshvara'];
         	break;
         	case 'Bhalki':  
         	  hoblis = ['Bhalki','Halabarga','Khataka Chinchuli','Lakhanaganva','Nitturabh','Sayaganva'];
         	break;
         	case 'Bidar':  
         	  hoblis = ['Bagadala','Beedara Uttara','Beedara Dakshina','Janavada','Kamatana','Mannalli'];
         	break;
         	case 'Chitguppa':  
         	  hoblis = ['Bemalakheda', 'Chitaguppa','Nirna'];
         	break;
         	case 'Hulasura':  
         	  hoblis = ['Hulasura'];
         	break;
         	case 'Humnabad':  
         	  hoblis = ['Dubalagundi','Hallilikhedabi','Humanabada'];
         	break;
         	case 'Kamalanagara':  
         	  hoblis = ['Dabaka','Kamalanagara','Tanakusanura'];
         	break;
         	case 'Chamarajanagara':  
         	  hoblis = ['Chandakavadi','Haradanahalli','Harave','Kasaba','Santemarahalli'];
         	break;
         	case 'Gundlupet':  
         	  hoblis = ['Beguru','Hangala','Kasaba Gundlupet','Terakanambi'];
         	break;
         	case 'Kollegala':  
         	  hoblis = ['Kasaba Kollegala','Palya'];
         	break;
         	case 'Kollegala(Hanuru)':  
         	  hoblis = ['Hanuru','Lokkanahalli','Ramapura'];
         	break;
         	case 'Yalandur':  
         	  hoblis = ['Agara','Kasaba Yalandur'];
         	break;
         	case 'Bagepalli':  
         	  hoblis = ['Guluru','Kasaba Bagepalli','Mittemari','Patapalya'];
         	break;
         	case 'Cheluru':  
         	  hoblis = ['Cheluru','Chilakalanerpu','Mittemari Cheluru','Patapalya Cheluru'];
         	break;
         	case 'Chikballapur':  
         	  hoblis = ['Kasaba Chikballapur','Mandikallu','Nandi'];
         	break;
         	case 'Chinthamani':  
         	  hoblis = ['Ambajidurga','Chilakalanerpu','kaivara','Kasaba Chinthamani','Munganahalli','Muragamalla'];
         	break;
         	case 'Gauribidanur':  
         	  hoblis = ['D Palya','Hosuru','Kasaba Gauribidanur','Nagaragere','Tondebavi'];
         	break;
         	case 'Gudibande':  
         	  hoblis = ['Kasaba Gudibande','Somenahalli'];
         	break;
         	case 'Manchenahalli':  
         	  hoblis = ['Manchenahalli'];
         	break;
         	case 'Sidlaghatta':  
         	  hoblis = ['Bashettihalli', 'Jangamakote','Kasaba Sidlaghatta','Sadali'];
         	break;
         	case 'Ajjampura':  
         	  hoblis = ['Ajjampura','Shivani'];
         	break;
         	case 'Chikkamagaluru':  
         	  hoblis = ['Alduru','Ambale','Avati','Jagara','Kasaba Chikkamagaluru','Khandya','Lakya','Vastare'];
         	break;
         	case 'Kadur':  
         	  hoblis = ['Ajjampura Kadur','Beeruru','Chowlahiriyur','Hirenalluru','Kasaba Kadur','Panchanahalli','Sakharayapattana','Singatagere','Yagati'];
         	break;
         	case 'Kalasa':  
         	  hoblis = ['Kalasa'];
         	break;
         	case 'Koppa':  
         	  hoblis = ['Hariharapura','Kasaba Koppa','Megunda'];
         	break;
         	case 'Mudigere':  
         	  hoblis = ['Baluru','Banakal','Gonibeedu','Kasaba Mudigere'];
         	break;
         	case 'Narasimharajapura':  
         	  hoblis = ['Balehonnuru','Kasaba Narasimharajapura'];
         	break;
         	case 'Sringeri':  
         	  hoblis = ['Kasaba Sringeri','Kigga'];
         	break;
         	case 'Tarikere':  
         	  hoblis = ['Amrutapura','Kasaba Tarikere','Lakkavalli','Lingadahalli'];
         	break;
         	case 'Challakere':  
         	  hoblis = ['Kasaba Challakere','Nayakanahatti','Parashuraopura','Talaku'];
         	break;
         	case 'Chitradurga':  
         	  hoblis = ['Bharamasagara','Hireguntanuru','Kasaba Chitradurga','Turuvanuru'];
         	break;
         	case 'Hiriyur':  
         	  hoblis = ['Aimangala','Dharmapura','J G Halli','Kasaba'];
         	break;
         	case 'Holalkere':  
         	  hoblis = ['Beedurga','Kasaba','Ramagiri','Talya'];
         	break;
         	case 'Hosadurga':  
         	  hoblis = ['Kasaba','Madadakere','Mattodu','Shreerampura'];
         	break;
         	case 'Molakalmur':  
         	  hoblis = ['Devasamudra','Kasaba'];
         	break;
         	case 'Bantwal':  
         	  hoblis = ['Bantvala','Panemangaluru','Vitla'];
         	break;
         	case 'Belthangady':  
         	  hoblis = ['Beltangadi','Kokkada','Venuru'];
         	break;
         	case 'Kadaba':  
         	  hoblis = ['Kadaba','Panja','Uppinangadi'];
         	break;
         	case 'Mangalore':  
         	  hoblis = ['Gurupura','Mangaluru-A','Mangaluru-B','Suratkal'];
         	break;
         	case 'Mudabidri':  
         	  hoblis = ['Mudabidri'];
         	break;
         	case 'Mulki':  
         	  hoblis = ['Mulki'];
         	break;
         	case 'Puttur':  
         	  hoblis = ['Putturu','Uppinangadi'];
         	break;
         	case 'Sullia':  
         	  hoblis = ['Panja','Sulya'];
         	break;
         	case 'Ullal':  
         	  hoblis = ['Mangaluru-B','Panemangaluru'];
         	break;
         	case 'Channagiri':  
         	  hoblis = ['Basavapattana-1','Basavapattana-2','Kasaba','Santebennuru-1','Santebennuru-2','Ubrani'];
         	break;
         	case 'Davanagere':  
         	  hoblis = ['Anagodu','Kasaba','Mayakonda'];
         	break;
         	case 'Harihar':  
         	  hoblis = ['Kasaba','Malebennuru'];
         	break;
         	case 'Honnali':  
         	  hoblis = ['Govinakovi-2','Kasaba','Sasvehalli-1','Sasvehalli-2'];
         	break;
         	case 'Jagalur':  
         	  hoblis = ['Bilichodu','Kasaba','Sokke'];
         	break;
         	case 'Nyamati':  
         	  hoblis = ['Bilichodu','Kasaba','Sokke'];
         	break;
         	case 'Alnavara':  
         	  hoblis = ['Alnavara'];
         	break;
         	case 'Annigeri':  
         	  hoblis = ['Annigeri'];
         	break;
         	case 'Dharawad':  
         	  hoblis = ['Amminabavi','Dharavada','Garaga'];
         	break;
         	case 'Hubballi':  
         	  hoblis = ['Chabbi','Hubballi','Shiraguppi'];
         	break;
         	case 'Hubballi Nagara':  
         	  hoblis = ['Chabbi','Hubballi'];
         	break;
         	case 'Kalgatgi':  
         	  hoblis = ['Dhummavada','Kalaghatagi','Tabakadahonnihalli'];
         	break;
         	case 'Kundgol':  
         	  hoblis = ['Kundagola','Sanshi'];
         	break;
         	case 'Navalgund':  
         	  hoblis = ['Moraba'];
         	break;
         	case 'Gadag':  
         	  hoblis = ['Betageri','Gadaga'];
         	break;
         	case 'Gajendragad':  
         	  hoblis = ['Naregalla'];
         	break;
         	case 'Laxmeshwar':  
         	  hoblis = ['Lakshmeshvara'];
         	break;
         	case 'Mundargi':  
         	  hoblis = ['Dambala','Mundaragi'];
         	break;
         	case 'Naragund':  
         	  hoblis = ['Konnura','Naragunda'];
         	break;
         	case 'Ron':  
         	  hoblis = ['Holealura','Naregalla','Rona'];
         	break;
         	case 'Shirahatti':  
         	  hoblis = ['Lakshmeshvara','Shirahatti'];
         	break;
         	case 'Alur':  
         	  hoblis = ['K Hosakote','Kasaba','Kunduru','Palya'];
         	break;
         	case 'Arkalgud':  
         	  hoblis = ['Doddamagge','Kasaba','Konanuru','Mallipattana','Ramanathapura'];
         	break;
         	case 'Arsikere':  
         	  hoblis = ['Banavara','Gandasi','Javagal','Kanakatte','Kasaba'];
         	break;
         	case 'Belur':  
         	  hoblis = ['Arehalli','Bikkodu','Halebeedu','Kasaba','Madeehalli'];
         	break;
         	case 'Channarayapatna':  
         	  hoblis = ['Baguru','Dandiganahalli','Hireesave','Kasaba','Nuggehalli','Shravanabelagola'];
         	break;
         	case 'Hassan':  
         	  hoblis = ['Dudda','Kasaba','Pattaya','Salagame','Shantigrama'];
         	break;
         	case 'Holenarasipura':  
         	  hoblis = ['Halekote','Hallimaisuru','Kasaba'];
         	break;
         	case 'Sakleshpura':  
         	  hoblis = ['Belagodu','Hanubalu','Hetturu','Kasaba','Yasaluru'];
         	break;
         	case 'Byadagi':  
         	  hoblis = ['Byadagi','Kaginelli'];
         	break;
         	case 'Hangal':  
         	  hoblis = ['Akkialura','Bammanalli','Hanagalla'];
         	break;
         	case 'Haveri':  
         	  hoblis = ['Guttala','Haveri','Karajagi'];
         	break;
         	case 'Hirekerur':  
         	  hoblis = ['Hansabhavi','Hirekerura'];
         	break;
         	case 'Ranebennur':  
         	  hoblis = ['Kuppelura','Medleri','Ranebennura'];
         	break;
         	case 'Ratteehalli':  
         	  hoblis = ['Hirekerura','Ratteehalli'];
         	break;
         	case 'Savanur':  
         	  hoblis = ['Hattimattura','Savanura'];
         	break;
         	case 'Shiggaon':  
         	  hoblis = ['Bankapura','Dundashi','Shigganva'];
         	break;
         	case 'Afzalpur':  
         	  hoblis = ['Afajalapura','Atanura','Karajagi'];
         	break;
         	case 'Aland':  
         	  hoblis = ['Alanda','Khajuri','Madanahipparaga','Narona','Nimbarga'];
         	break;
         	case 'Chincholi':  
         	  hoblis = ['Ainapura','Chincholi','Kodli','Sulepeta'];
         	break;
         	case 'Chittapur':  
         	  hoblis = ['Chittapura','Gundagurti','Nalavara','Vakkaleri'];
         	break;
         	case 'Jevargi':  
         	  hoblis = ['Andola','Ijeri','Jevargi','Nelogi'];
         	break;
         	case 'Kamalapura':  
         	  hoblis = ['Kamalapura','Mahaganva Kamalapura'];
         	break;
         	case 'Sedam':  
         	  hoblis = ['Adaki','Kodla','Mudola','Sedam'];
         	break;
         	case 'Shahabada':  
         	  hoblis = ['Shahabada'];
         	break;
         	case 'Yadrami':  
         	  hoblis = ['Andola','Ijeri Yadrami','Yadrami'];
         	break;
         	case 'Kushalanagara':  
         	  hoblis = ['Kushalanagara','Suntikoppa'];
         	break;
         	case 'Madikeri':  
         	  hoblis = ['Bhagamandala','Madikeri','Napoklu','Sampaje'];
         	break;
         	case 'Ponnampete':  
         	  hoblis = ['Balele','Hudikeri','Ponnampete','Shreemangala'];
         	break;
         	case 'Somawarpet':  
         	  hoblis = ['Kodlipete','Shanivarasante','Shantalli','Somavarapete','Suntikoppa Somawarpet'];
         	break;
         	case 'Virajpet':  
         	  hoblis = ['Ammati','Virajapete'];
         	break;
         	case 'Bangarpet':  
         	  hoblis = ['Budikote','Kamasamudra','Kasaba Bangarpet','Rabartasan Pete'];
         	break;
         	case 'K.G.F':  
         	  hoblis = ['Betamangala','Kyasamballi','Rabartasan Pete'];
         	break;
         	case 'Kolar':  
         	  hoblis = ['Holuru','Hutturu','Kasaba kolar','Narasapura','Sugaturu','Vakkaleri','Vemagallu'];
         	break;
         	case 'Malur':  
         	  hoblis = ['Kasaba Malur','Lakkuru','Masti','Tekal'];
         	break;
         	case 'Mulbagal':  
         	  hoblis = ['Avani','Bairakuru','Duggasandra','Kasaba Mulbagal','Tayaluru'];
         	break;
         	case 'Srinivaspur':  
         	  hoblis = ['Kasaba Srinivaspur','Nelavanki','Rayalpadu','Ronuru','Yelduru'];
         	break;
         	case 'Gangavathi':  
         	  hoblis = ['Gangavati','Marali','Venkatagiri'];
         	break;
         	case 'Kanakagiri':  
         	  hoblis = ['Hulihaidara','Kanakagiri','Navali'];
         	break;
         	case 'Karatagi':  
         	  hoblis = ['Karatagi','Siddapura'];
         	break;
         	case 'Koppal':  
         	  hoblis = ['Alavandi','Hitnala','Irakallagada','Koppala'];
         	break;
         	case 'Kukanura':  
         	  hoblis = ['Kukanura','Mangaluru'];
         	break;
         	case 'Kushtagi':  
         	  hoblis = ['Hanamanala','Hanamasagara','Kushtagi','Tavaragera'];
         	break;
         	case 'Yelburga':  
         	  hoblis = ['Hirevankalakunta', 'Mangaluru Yelburga','Yalaburga'];
         	break;
         	case 'Krpet':  
         	  hoblis = ['Akkihebbal','Bukinakere','Kasaba Krpet','Kikkeri','Santebachahalli','Shreelanere'];
         	break;
         	case 'Maddur':  
         	  hoblis = ['Ataguru Hobali','CH A Kere-Aiaine Valaya','CH A Kere-Aiaiaine Valaya','CH A Kere Aine Valaya','Kasaba-1Ne Valaya','Kasaba-Aiai Ne Valaya','Koppa-Aiaiaine Valaya','Koppa Hobali','Koppa Aiaine Valaya','Koppa-Aine Valaya'];
         	break;
         	case 'Malavalli':  
         	  hoblis = ['B G Pura Hobali Ai','B G Pura Hobali Aiai','Halaguru Hobali','Kasaba-Ai','Kasaba-Aiai','Kasaba-Aiaiai','Kirugavalu Hobali Ai','Kirugavalu Hobali Aiai','Kirugavalu Hobali Aiaiai'];
         	break;
         	case 'Mandya':  
         	  hoblis = ['Basaralu-1','Basaralu-2','Dadda-1','Dadda-2','Kasaba-1 Mandya','Kasaba-2 Mandya','Keragodu-2','Keragodu-1','Kottatti-1','Kottatti-2'];
         	break;
         	case 'Nagamangala':  
         	  hoblis = ['Belluru','Bindiganavile','Devalapura','Honakere','Kasaba Nagamangala'];
         	break;
         	case 'Pandavapura':  
         	  hoblis = ['Chinakurali','Kasaba-1 Pandavapura','Kasaba-2 Pandavapura','Melukote'];
         	break;
         	case 'Srirangapatna':  
         	  hoblis = ['Arakere','Belagola','K Shettihalli-1','K Shettihalli-2','Kasaba Srirangapatna'];
         	break;
         	case 'Heggadadevanakote':  
         	  hoblis = ['Antarasante','Hampapura','Kasaba Heggadadevanakote'];
         	break;
         	case 'Hunsur':  
         	  hoblis = ['Bilikere','Gavadagere','Hanagodu','Kasaba Hunsur'];
         	break;
         	case 'K.R.Nagar':  
         	  hoblis = ['Hebbalu','Hosagrahara','Kasaba K.R.Nagar'];
         	break;
         	case 'Mysore':  
         	  hoblis = ['Ilavala','Jayapura','Kasaba Mysore','Varuna'];
         	break;
         	case 'Nanjangud':  
         	  hoblis = ['Biligere','Chikkayyanachatra','Doddakowlande','Hullahalli','Kasaba Nanjangud'];
         	break;
         	case 'Periyapatana':  
         	  hoblis = ['Bettadapura','Haranahalli','Kasaba Periyapatana','Ravanduru'];
         	break;
         	case 'Saligrama':  
         	  hoblis = ['Chunchanakatte','Mirle','Saligrama'];
         	break;
         	case 'Saraguru':  
         	  hoblis = ['Kandalike','Saraguru'];
         	break;
         	case 'T.Narasipura':  
         	  hoblis = ['Bannuru','Kasaba T.Narasipura','Muguru','Sosale','Talakadu'];
         	break;
         	case 'Arakera':  
         	  hoblis = ['Arakera','Gabburu','Jalahalli'];
         	break;
         	case 'Devdurga':  
         	  hoblis = ['Devadurga','Gabburu Devdurga','Jalahalli Devdurga'];
         	break;
         	case 'Lingasugur':  
         	  hoblis = ['Gurugunta','Lingasuguru','Mudagal'];
         	break;
         	case 'Manvi':  
         	  hoblis = ['Hirekotnikala','Kalluru','Kurdi','Mallata','Manavi','Siravara'];
         	break;
         	case 'Maski':  
         	  hoblis = ['Balaganura','Gudadura','Gunjalli','Halapura','Lingasuguru Maski','Maski(mysore)','Pamanakallura','Turvihala'];
         	break;
         	case 'Raichur':  
         	  hoblis = ['Chandrabanda','Devasuguru','Gillesuguru','Kalamala','Rayachuru','Yaragera'];
         	break;
         	case 'Sindhanur':  
         	  hoblis = ['Badarli','Gorebala','Gunjalli Sindhanura','Hedaginala','Huda','Jalihala','Javalagera','Kunnatagi','Salgunda','Sindhanura','Turavihala','Valkandinni'];
         	break;
         	case 'Siravara':  
         	  hoblis = ['Kalluru Siravara','Kavitala','Mallata Siravara','Siravara Siravara'];
         	break;
         	case 'Channapatna':  
         	  hoblis = ['Kasaba Channapatna','Maluru','Virupakshipura'];
         	break;
         	case 'Harohalli':  
         	  hoblis = ['Harohalli','Maralavadi'];
         	break;
         	case 'Kanakpura':  
         	  hoblis = ['Kasaba Kanakpura','Kodihalli','Satanuru','Uyyamballi'];
         	break;
         	case 'Magadi':  
         	  hoblis = ['Kasaba Magadi','Kuduru','Madabal','Soluru','Tippasandra'];
         	break;
         	case 'Ramanagar':  
         	  hoblis = ['Bidadi','Bidadi-1','Bidadi-2','Kailancha','Kailancha-1','Kailancha-2','Kasaba-1 Ramanagar','Kasaba-2 Ramanagar','Kutagala'];
         	break;
         	case 'Bhadravathi':  
         	  hoblis = ['Holehonnuru Ai','Holehonnuru Aiai','Holehonnuru Aiaiai','Kasaba Ai','Kasaba Aiai','Kudligere'];
         	break;
         	case 'Hosanagar':  
         	  hoblis = ['Huncha','Kasaba Hosanagar','Kerehalli','Nagara'];
         	break;
         	case 'Sagar':  
         	  hoblis = ['Anandapura','Avinahalli','Barangi','Karuru Sagar','Kasaba Sagar','Talaguppa'];
         	break;
         	case 'Shikaripura':  
         	  hoblis = ['Anjanapura','Hosuru','Kasaba Shikaripura','Talagunda','Udugani'];
         	break;
         	case 'Shivamogga':  
         	  hoblis = ['Ayanuru','Haranahalli','Holalura Aiai','Holaluru Ai','Kasaba Ai Shivamogga','Kasaba Aiai Shivamogga','Kunsi','Nidige Ai','Nidige Aiai'];
         	break;
         	case 'Soraba':  
         	  hoblis = ['Anavatti','Chandragutti','Jade','Kasaba Soraba','Kuppagadde','Ulavi'];
         	break;
         	case 'Thirthally':  
         	  hoblis = ['Agrahara','Agumbe','Kasaba Thirthally','Mandagadde','Mutturu'];
         	break;
         	case 'Chiknayakanahalli':  
         	  hoblis = ['Handanakere','Huliyaru','Kandikere','Kasaba Chiknayakanahalli','Shettikere'];
         	break;
         	case 'Gubbi':  
         	  hoblis = ['C S Pura','Cheluru Gubbi','Hagalavadi','Kadaba','Kasaba Gubbi','Nitturu'];
         	break;
         	case 'Koratagere':  
         	  hoblis = ['Channarayanadurga','Holavanahalli','Kasaba Koratagere','Kolala'];
         	break;
         	case 'Kunigal':  
         	  hoblis = ['Amrutturu','Huliyuru Durga','Hutridurga','Kasaba Kunigal','Kottagere','Yadiyuru'];
         	break;
         	case 'Madhugiri':  
         	  hoblis = ['Ai D Halli','Dodderi','Kasaba Madhugiri','Kodigenahalli','Midigeshi','Puravara'];
         	break;
         	case 'Pavagada':  
         	  hoblis = ['Kasaba Pavagada','Nagalamadike','Nidagal Hobali','Y N Hosakote'];
         	break;
         	case 'Sira':  
         	  hoblis = ['Bukkapattana','Gowdagere','Hulikunte','Kallambella','Kasaba Sira'];
         	break;
         	case 'Tiptur':  
         	  hoblis = ['Honnavalli','Kasaba Tiptur','Kibbanahalli','Nonavinakere'];
         	break;
         	case 'Tumakuru':  
         	  hoblis = ['Bellavi','Guluru','Hebburu','Kasaba Tumakuru','Kasaba East','Kasaba North','Kasaba South','Kasaba West','Kora','Urdigere'];
         	break;
         	case 'Turuvekere':  
         	  hoblis = ['Dabbeghatta','Dandinashivara','Kasaba Turuvekere','Mayasandra'];
         	break;
         	case 'Bramhavara':  
         	  hoblis = ['Brahmavara','Kota'];
         	break;
         	case 'Byndur':  
         	  hoblis = ['Bainduru'];
         	break;
         	case 'Hebri':  
         	  hoblis = ['Hebri'];
         	break;
         	case 'Kapu':  
         	  hoblis = ['Kapu'];
         	break;
         	case 'Karkala':  
         	  hoblis = ['Ajekaru','Karkala'];
         	break;
         	case 'Kundapura':  
         	  hoblis = ['Kundapura','Vandse'];
         	break;
         	case 'Udupi':  
         	  hoblis = ['Udupi'];
         	break;
         	case 'Ankola':  
         	  hoblis = ['Ankola','Balale','Basagoda','Belekeri'];
         	break;
         	case 'Bhatkal':  
         	  hoblis = ['Mavalli','Susagadi'];
         	break;
         	case 'Dandeli':  
         	  hoblis = ['Dandeli'];
         	break;
         	case 'Haliyal':  
         	  hoblis = ['Haliyal','Haliyala','Murkavada','Sambrani'];
         	break;
         	case 'Honnavar':  
         	  hoblis = ['Honnavara','Manki','Mavinakurva'];
         	break;
         	case 'Joida':  
         	  hoblis = ['Kumbaravada','Kyasalarak','Supa'];
         	break;
         	case 'Karwar':  
         	  hoblis = ['Bada','Ghadasayi','Kinnara','Savantavada'];
         	break;
         	case 'Kumta':  
         	  hoblis = ['Gokarna','Kunjalli','Kumata','Mirjana'];
         	break;
         	case 'Mundgod':  
         	  hoblis = ['Mundagoda','Pala'];
         	break;
         	case 'Siddapur':  
         	  hoblis = ['Kodkani','Kondli','Umbalamane'];
         	break;
         	case 'Sirsi':  
         	  hoblis = ['Banavasi','Hulekal','Sampakhanda','Shirsi'];
         	break;
         	case 'Yellapur':  
         	  hoblis = ['Manchikeri','Yallapura'];
         	break;
         	case 'Hadagali':  
         	  hoblis = ['Hadagali','Hirehadagali','Ittigi'];
         	break;
         	case 'Hagaribommanahalli':  
         	  hoblis = ['Hagaribommanahalli','Kampasagara','Kogali(Vijayanagar)','Tambrahalli'];
         	break;
         	case 'Harapanahalli':  
         	  hoblis = ['Arasikeri','Chigateri','Kasaba','Telagi'];
         	break;
         	case 'Hospet': 
         	  hoblis = ['Hosapete','Kamalapura','Mariyammanahalli'];
         	break;
         	case 'Kotturu': 
         	  hoblis = ['Hosahalli','Kogali','Kotturu'];
         	break;
         	case 'Kudligi': 
         	  hoblis = ['Gudekote','Hosahalli','Kudligi'];
         	break;
         	case 'Alamela':
         	  hoblis = ['Alamela'];
         	break;
         	case 'Babaleshvara':  
         	  hoblis = ['Babaleshvara','Mamadapura'];
         	break;
         	case 'Basavan Bagewadi':  
         	  hoblis = ['Ba Bagevadi','Ho Hipparagi','Managuli'];
         	break;
         	case 'Chadachana':  
         	  hoblis = ['Chadachana'];
         	break;
         	case 'Devara Hipparagi':  
         	  hoblis = ['Devara Hipparagi','Ho Hipparagi','Sindagi'];
         	break;
         	case 'Indi': 
         	  hoblis = ['Ballolli','Indi'];
         	break;
         	case 'Kolhara': 
         	  hoblis = ['Kolhara'];
         	break;
         	case 'Muddebihal': 
         	  hoblis = ['Davalagi','Muddebihala','Nalatavada'];
         	break;
         	case 'Nidagundi': 
         	  hoblis = ['Nidagundi'];
         	break;
         	case 'Sindagi':  
         	  hoblis = ['Sindagi'];
         	break;
         	case 'Talikoti': 
         	  hoblis = ['Davalagi','Devara Hipparagi','Ho Hipparagi','Talikoti'];
         	break;
         	case 'Tikota': 
         	  hoblis = ['Tikota'];
         	break;
         	case 'Vijayapura': 
         	  hoblis = ['Bijapura','Nagatana'];
         	break;
         	case 'Gurumitakala':  
         	  hoblis = ['Balichakra','Gurumitakala','Konkala','Saidapora'];
         	break;
         	case 'Hunisigi':  
         	  hoblis = ['Hunasigi','Kakkera','Kodekal'];
         	break;
         	case 'Shahapur':
         	  hoblis = ['Doranalli','Gogi','Haiyyala B','Shahapura'];
         	break;
         	case 'Shorapur': 
         	  hoblis = ['Kakkera','Kembhavi','Shorapura'];
         	break;
         	case 'Vadagera':  
         	  hoblis = ['Doranalli','Haiyyala B','Vadagera'];
         	break;
         	case 'Yadgir': 
         	  hoblis = ['Balichakra','Hattikuni','Saidapora','Yadagiri'];
         	break;
         	default:
         	  hoblis = [];
           }
         
           hoblis.forEach(hobli => {
         	const option = document.createElement('option');
         	option.value = hobli;
         	option.textContent = hobli;
         	hobliSelect.appendChild(option);
           });
         }
          
      </script>
      <?php include("php_include/all_script.php"); ?>
   </body>
</html>