  <?php  $userid= $_SESSION['userid'] ;?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class=""></i>
      </div>
      <div class="sidebar-brand-text mx-3">My Main Admin <sup></sup></div>
   </a>
   <!-- Divider -->
   <hr class="sidebar-divider my-0">
   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="home.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
   </li>
   
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-folder"></i>
      <span>Main Admin Menu</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="password.php">Change Password</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
      <i class="fas fa-fw fa-folder"></i>
      <span>User Menu</span>
      </a>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
       
            <a class="collapse-item" href="user_search.php">User Search</a>
            <a class="collapse-item" href="income_search.php">Income Search</a>
            <a class="collapse-item" href="edit_bank.php">Bank Account Search</a>
            <a class="collapse-item" href="active_user_list.php">Active User List</a>
      
            <a class="collapse-item" href="all_user_password.php">User Password & Mobile</a>
            <a class="collapse-item" href="id_on_off.php">ID off & on</a>
             <a class="collapse-item" href="id_on_off_search.php">ID off & on Search</a>
           <a class="collapse-item" href="user_list.php">User List</a>  
                 <a class="collapse-item" href="a_inactive_user_list.php">In Active User List</a> 
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
      <i class="fas fa-fw fa-folder"></i>
      <span>Properties Details</span>
      </a>
      <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="sell.php">Sell</a>
            <a class="collapse-item" href="rent.php">Rent</a>
            <a class="collapse-item" href="lease.php">Lease</a>
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="blog.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Add Blog</span></a>
   </li>
    <li class="nav-item">
      <a class="nav-link" href="project.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Add Project</span></a>
   </li>
   <!--
 
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsewo" aria-expanded="true" aria-controls="collapsewo">
      <i class="fas fa-fw fa-folder"></i>
      <span>Wallet Request</span>
      </a>
      <div id="collapsewo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="wallet_request_list.php">Wallet  Request List</a>
            <a class="collapse-item" href="wallet_approval_list.php">Wallet  Approval List</a>
            <a class="collapse-item" href="wallet_reject_list.php">Wallet  Reject List</a>
            <a class="collapse-item" href="wallet_list.php">Now Wallet   List</a>
         </div>
      </div>
   </li>
   
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsew" aria-expanded="true" aria-controls="collapsew">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pin Request</span>
      </a>
      <div id="collapsew" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="pin_request_list.php">Pin Request List</a>
            <a class="collapse-item" href="pin_approval.php">Pin  Approval List</a>
            <a class="collapse-item" href="wallet_reject_list.php">Pin  Reject List</a>
            <a class="collapse-item" href="un_user_pin.php">Un Used  Pin List</a>
         </div>
      </div>
   </li>

   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Paymets Menu</span>
      </a>
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item" href="withdraws.php"> Payment Lest</a>
               <a class="collapse-item" href="week_withdraws.php">Payment Sent Lest</a>
           <a class="collapse-item" href="recharge_list.php">Recharge List</a>
         </div>
      </div>
   </li> 
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collpseFive" aria-expanded="true" aria-controls="collpseThree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Paymets Details</span>
      </a>
      <div id="collpseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="edit_payment_list.php">Edit Payout</a>
            <a class="collapse-item" href="withdraws.php">Referral List</a>
          <a class="collapse-item" href="matching_income.php">Level Income List</a>
            
         </div>
      </div>
   </li> 
    
 
   
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsei" aria-expanded="true" aria-controls="collapsehree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Product Menu</span>
      </a>
      <div id="collapsei" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add_product.php">Add Product</a>
             <a class="collapse-item" href="product_list.php">Product List</a>
          
         </div>
      </div>
   </li>
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseiv" aria-expanded="true" aria-controls="collapsehree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Banner Menu</span>
      </a>
      <div id="collapseiv" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index_banner.php">Index Banner</a>
             <a class="collapse-item" href="">Ineer Message</a>
          
         </div>
      </div>
   </li>
  
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collape" aria-expanded="true" aria-controls="collapsehree">
      <i class="fas fa-fw fa-folder"></i>
      <span>Recharge Menu</span>
      </a>
      <div id="collape" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="add_recharge.php">Add Recharge</a>
            <a class="collapse-item" href="recharge_list.php">Reharge List</a>
             <a class="collapse-item" href="recharge.php">Rechrge Done Old</a>
              <a class="collapse-item" href="recharge_new.php">Rechrge Done New</a>
          
         </div>
      </div>
   </li> -->
  
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapsehree">
      <i class="fas fa-fw fa-folder"></i>
      <span>More Menu</span>
      </a>
      <div id="collapse" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="chat.php">Chat rply</a>
         </div>
      </div>
   </li>

  
   
   <li class="nav-item">
      <a class="nav-link" href="logout.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Logout</span></a>
   </li>
   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">
   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
</ul>
  