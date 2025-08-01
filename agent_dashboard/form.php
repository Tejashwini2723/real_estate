<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <?php include("php_include/head.php");?>
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
               <h1 class="page-title fw-semibold fs-18 mb-0">Form Validation</h1>
               <div class="ms-md-1 ms-0">
                  <nav>
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                     </ol>
                  </nav>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="card custom-card">
                     <div class="card-header justify-content-between">
                        <div class="card-title"> fORM</div>
                     </div>
                     <div class="card-body">
                        <form method="POST" action="">
                           <div class="row">
                              <div class="col-12 col-md-8 col-lg-6">
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="text" name="name" class="form-control" id="floatingInputinfo" placeholder="User Name" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">User Name</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="number" name="mobile" class="form-control" id="floatingInputinfo" placeholder="Mobile" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Mobile</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="email" name="email" class="form-control" id="floatingInputinfo" placeholder="Email" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Email</label>
                                 </div>
                                 <div class="form-floating mb-4 floating-info" style="width:360px;">
                                    <input type="password" name="password" class="form-control" placeholder="name@example.com" style="border-color: #38487c;">
                                    <label for="floatingInputinfo" style="color:#38487c;">Password</label>
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="input-file" class="form-label">Type File</label>
                                    <input class="form-control" type="file" id="input-file">
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="text-area" class="form-label">Textarea</label>
                                    <textarea class="form-control" id="text-area" rows="1"></textarea>
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <label for="floatingInputinfo" class="form-label">State</label>
                                    <select class="form-select" id="validationDefault04" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option>...</option>
                                    </select>
                                 </div>
                                 <div class="mb-4" style="width:360px;">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                       <label class="form-check-label" for="invalidCheck2">
                                       Agree to terms and conditions
                                       </label>
                                    </div>
                                 </div>
                                 <div class="text-start">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
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
   </body>
</html>
