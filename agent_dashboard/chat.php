<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <title>Chat with admin</title>
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
               <h1 class="page-title fw-semibold fs-18 mb-0">Chat with admin</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chat with admin</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title"> Chat</div>
                     </div>
                     
                     <div class="card-body">
                        <form method="POST" action="chat.php">
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="hidden" name="userid" class="form-control" placeholder="Userid" value="<?php echo $userid?>" style="border-color: #38487c;">
                                 </div>
                                 <div class="form-floating mb-3">
                                    <textarea name="message" class="form-control" placeholder="Text your message Here..." style="border-color: #38487c; width:390px; height:100px;"></textarea>
                                    <label for="message" style="color:#38487c;">Text your message</label>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                                 </div>
                              </div>
                           </div>
                        </form>
						<?php 
                              if(isset($_POST['submit'])){
                              	$userid=$_POST['userid'];
                              	$message=$_POST['message'];
                              	$sts=$_POST['sts'];
                              $send_date=date('Y-m-d');
                              		$query=mysqli_query($con,"INSERT INTO chatbox(userid, message, send_date, sts) VALUES ('$userid','$message','$send_date','no')");
                              		if($query){
                              			echo'<script>alert("Chat  Successful adn Rply Soon");window.location.assign("chat.php");</script>';
                              		}
                              }
                               ?>
                     </div>
                  </div>
               </div>
            </div>
			   <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title"> Basic Tables </div>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <div class="form-row" style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                              <div class="form-floating" style="width: 25%;">
                                 <input type="text" class="form-control" id="floatingInputinfo" placeholder="User Name" oninput="searchTable()">
                                 <label for="floatingInputinfo" style="color:#38487c;">Search</label>
                              </div>
                              <div class="" style="width: 25%;">
                                 <label for="floatingInputinfo" class="form-label">State</label>
                                 <select class="form-select" id="validationDefault04" required onchange="filterState()">
                                    <option selected value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                 </select>
                              </div>
                           </div>
                           <table class="table text-nowrap" id="dataTable">
                              <thead>
                                 <tr>
                                    <th scope="col" onclick="sortTable(0)">SL</th>
                                    <th scope="col" onclick="sortTable(1)">Userid</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Send Date</th>
                                    <th scope="col">Reply</th>
                                    <th scope="col">Reply Date</th>
                                    <th scope="col">Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $i=1;
                                    $query = mysqli_query($con,"SELECT * FROM chatbox WHERE userid='$userid' order by id desc");
                                    if(mysqli_num_rows($query)>0){
                                    	while($row=mysqli_fetch_array($query)){
                                    	      $userid=$row['userid'];
                                    	?>
                                 <tr>
                                    <td> <?php echo $i?> </td>
                                    <td> <?php echo $row['userid']?> </td>
                                    <td> <?php echo $row['message']?> </td>
                                    <td> <?php echo $row['send_date']?> </td>
                                    <td> <?php echo $row['reply']?> </td>
                                    <td> <?php echo $row['reply_date']?> </td>
                                 </tr>
                                 <?php
                                    $i++;
                                    }
                                    }
                                    ?>
                              </tbody>
                           </table>
                           <div class="form-row" style="align-items: center; justify-content: space-between;">
                              <button class="btn btn-secondary" id="prevBtn" type="button" onclick="navigatePage(-1)" disabled>Previous</button>
                              <button class="btn btn-primary" id="nextBtn" type="button" onclick="navigatePage(1)">Next</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         let currentPage = 1;
         let rowsPerPage = 5;
         let filteredRows = [];
         let currentRows = [];
         function searchTable() {
             let filter = document.getElementById("floatingInputinfo").value.toLowerCase();
             filteredRows = [...currentRows].filter(row => {
                 const name = row.cells[0].textContent.toLowerCase();
                 return name.includes(filter);
             });
             renderTable();
         }
         function filterState() {
             rowsPerPage = parseInt(document.getElementById("validationDefault04").value);
             currentPage = 1;
             renderTable();
         }
         function sortTable(colIndex) {
             const rows = Array.from(document.getElementById("dataTable").rows).slice(1);
             const sortedRows = rows.sort((rowA, rowB) => {
                 const cellA = rowA.cells[colIndex].textContent.trim();
                 const cellB = rowB.cells[colIndex].textContent.trim();
                 if (colIndex === 1) {
                     return new Date(cellA) - new Date(cellB);
                 }
                 return cellA.localeCompare(cellB);
             });
             document.getElementById("dataTable").querySelector("tbody").append(...sortedRows);
             renderTable();
         }
         function renderTable() {
             const tableBody = document.querySelector("#dataTable tbody");
             tableBody.innerHTML = "";
             const start = (currentPage - 1) * rowsPerPage;
             const end = start + rowsPerPage;
         
             const rowsToDisplay = filteredRows.slice(start, end);
             rowsToDisplay.forEach(row => tableBody.appendChild(row));
             document.getElementById("prevBtn").disabled = currentPage === 1;
             document.getElementById("nextBtn").disabled = currentPage * rowsPerPage >= filteredRows.length;
         }
         function navigatePage(direction) {
             currentPage += direction;
             renderTable();
         }

         document.addEventListener("DOMContentLoaded", function() {
             const rows = Array.from(document.querySelector("#dataTable tbody").rows);
             currentRows = rows;  
             filteredRows = rows; 
             renderTable();  
         });
      </script>
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
   </body>
</html>