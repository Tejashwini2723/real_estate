<header class="app-header">
   <div class="main-header-container container-fluid">
      <div class="header-content-left">
         <div class="header-element">
            <div class="horizontal-logo"> <a href="index.php" class="header-logo">
               <img src="../logo/logo.png" alt="logo" style="background-color:black;" class="desktop-logo"> 
               <img src="../logo/logo.png" alt="logo" style="background-color:black;" class="toggle-logo"> 
               <img src="../logo/logo.png" alt="logo" style="background-color:black;" class="desktop-white"> 
               <img src="../logo/logo.png" alt="logo" style="background-color:black;" class="toggle-white"> 
               </a> 
            </div>
         </div>
         <div class="header-element mx-lg-0 mx-2"> 
            <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);">
            <span></span>
            </a> 
         </div>
         <div class="header-element header-search d-lg-block d-none my-auto auto-complete-search">
            <input type="text" class="header-search-bar form-control rounded-pill" id="header-search" placeholder="Search for Results..." spellcheck=false autocomplete="off" autocapitalize="off"> 
            <a href="javascript:void(0);" class="header-search-icon border-0">
               <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
               </svg>
            </a>
         </div>
      </div>
      <div class="header-content-right">
         <div class="header-element d-lg-none d-flex">
            <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#responsive-searchModal">
               <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                  <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
               </svg>
            </a>
         </div>
         <div class="header-element header-theme-mode">
            <a href="javascript:void(0);" class="header-link layout-setting">
               <span class="light-layout">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                     <rect fill="none" height="24" width="24"/>
                     <path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z"/>
                  </svg>
               </span>
               <span class="dark-layout">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                     <path d="M0 0h24v24H0V0z" fill="none"/>
                     <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79zM1 10.5h3v2H1zM11 .55h2V3.5h-2zm8.04 2.495l1.408 1.407-1.79 1.79-1.407-1.408zm-1.8 15.115l1.79 1.8 1.41-1.41-1.8-1.79zM20 10.5h3v2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm-1 4h2v2.95h-2zm-7.45-.96l1.41 1.41 1.79-1.8-1.41-1.41z"/>
                  </svg>
               </span>
            </a>
         </div>
         <div class="header-element dropdown">
            <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"> 
            <span class="avatar avatar-sm avatar-rounded"> 
            <?php 
                              $query1=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
                              $row1=mysqli_fetch_array($query1);
                               
                              if($row1['image']==NULL){
                                 
                              ?> 
                           <img src="img/profile.png" style="width:200px;">
                           <?php }else{
                              ?>   
                           <img src="kyc/<?php echo $row1['image'];?>" width="100px">
                           <?php
                              }?> 
            </span> 
            </a> 
            <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
               <li class="p-3 bg-light bg-opacity-75 border-bottom">
                  <div class="d-flex align-items-center justify-content-between gap-4">
                     <div>
                        <p class="mb-0 fw-semibold lh-1">Userid : <b><?php echo $userid;?></b></p>
                     </div>
                  </div>
               </li>
               <li><a class="dropdown-item d-flex align-items-center" href="profile.php">
                  <i class="ti ti-user-circle fs-18 me-2 text-gray fw-normal"></i>My Profile
                  </a>
               </li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li>
                  <a class="dropdown-item d-flex align-items-center" href="signin-cover.php">
                  <i class="ti ti-logout fs-18 me-2 text-gray fw-normal"></i>Sign Out
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</header>
