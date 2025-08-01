<?php include("php_include/top.php");?>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

 <?php include("php_include/header.php");?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include("php_include/nav.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Conjoin
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="ti-settings"></i> Conjoin</a></li>
        <li class="breadcrumb-item active">Control Panel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Conjoin TRX</h4>
					  
					</div>
					<div class="box-body">
					
				<div class="box-body">
				  <table class="table table-bordered table-striped">
                            	<tr >
                                	<th>
									<br>
									<h4><font color="orange"><b>Active Income</b></font></h4>
									
									<hr color="white" size="5">
									<h5><font color="orange"><b>Account:</b></font> <font color="yellow"><b><?php echo $userid;?></b></font></h5>
									<br>
										<form method="post" action="income_coding/active_income.php" class="form-group">
											<input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
											<input type="hidden" name="up_userid" value="<?php echo $userid;?>">
											<input type="hidden" name="pack_amount" value="210">
											<input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                         </form><br>
										 <h5><font color="yellow">200 TRON +Gas Fees  10% </font></h5>
										<hr color="white" size="5">
									</th>
                                    <th>
										<form action="income_coding/passive_income.php" method="post">
											<div class="form-group">
												<input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
												<input type="hidden" name="up_userid" value="<?php echo $userid;?>">
											</div>
											<div class="form-group">
											<h4><font color="orange"><b>Passive Income</b></font></h4>
											<hr color="white" size="5">
												
												<br>
												<div class="form-group drop-custum">
													<select class="form-control show-tick" name="pack_amount" value="">
														<option value="">-- Select Package --</option>
															<option name="pack_amount" value="107">Mango (100 TRX)</option>
															<option name="pack_amount" value="210">Pineapple(200 TRX)</option>
															<option name="pack_amount" value="440">Lime (400 TRX)</option>
															<option name="pack_amount" value="880">Strawberry(800 TRX)</option>
															<option name="pack_amount" value="1760">Olive (1600 TRX)</option>
															<option name="pack_amount" value="3520">Blackberry(3200 TRX)</option>
															<option name="pack_amount" value="7040">Dahlia (6400 TRX)</option>
															<option name="pack_amount" value="14080">Spikenard(12800 TRX)</option>
															<option name="pack_amount" value="28160">Gardenias (25600 TRX)</option>
															<option name="pack_amount" value="56320">Poppies(51200 TRX)</option>
															<option name="pack_amount" value="112640">Orchid (102400 TRX)</option>
															<option name="pack_amount" value="225280">Rose(204800 TRX)</option>
														</select>
                                                      </div>
													  <h5><font color="yellow">+Gas Fees Up to 10% </font></h5>
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-primary" name="submit_package" value="Submit">
											</div>
											<hr color="white" size="5">
										</form>
									</th>
                                </tr>
				  </table>
				</div>
					</div>
					
					<!-- /.box-body -->
				  </div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Joining Kit</h4>
					  <br><br>
					</div>
					 
			<div class="box box-body pull-up bg-hexagons-white">
			  <div class="media align-items-center p-0">
				<div class="text-center">
				  <a href="#"><i class="" title="BTC"></i><img src="image/coin.png" width="50px" height="50px"></a>
				</div>
				<div>
				  <h2 class="no-margin">200 TRX</h2>
				</div>
			  </div>
			  <div class="flexbox align-items-center mt-25">
				<div>
				  <p class="no-margin">Click Here <span class="text-gray">Conjoin</span> <span class="text-info">Entry </span></p>
				</div>
				<div class="text-right">
				  <p class="no-margin"><span class="text-success">+Gas Fees</span></p>
				</div>
				<br><br><br><br><br><br><br><br><br><br>
			  </div>
			</div>
           
					<!-- /.box-body -->
				  </div>
			</div>
		</div>
	</section>
  </div>
 <?php include("php_include/footer.php");?>
<div class="control-sidebar-bg"></div>
  
</div>
    <script src="../assets/vendor_components/jquery/dist/jquery.js"></script>
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	<script src="../assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
	<script src="../assets/vendor_components/echarts-master/dist/echarts-en.min.js"></script>
	<script src="../assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js"></script>
	<script src="../assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard.js"></script>
	<script src="js/pages/dashboard-chart.js"></script>
	<script src="js/demo.js"></script>

	
</body>
</html>
