	<?php
	session_start();

	if(isset($_SESSION['rid']) && isset($_SESSION['uname']) && isset($_SESSION['region']) && isset($_SESSION['division']) && isset($_SESSION['subdiv'])){
	?>
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.php">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Registry</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="./images/flag.png" />
								<span class="username username-hide-on-mobile"> <?php echo $_SESSION['subdiv'] ?> </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.php">
										<i class="icon-user"></i> Profile </a>
								</li>
								<!--
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
							
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.php">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
							-->
								<li>
									<a href="logout.inc.php">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
<!-- start page container -->
<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
						 data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="./images/flag.png" class="img-circle user-img-circle" alt="User Image" />
									</div>
									<div class="pull-left info">
										<p> <?php echo $_SESSION['uname']; ?></p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="index.php" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
									
								</a>
								
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Birth Certificates</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_birth.php" class="nav-link "> <span class="title">All Birth Certificates</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_birth.php" class="nav-link "> <span class="title">Create Birth certificate</span>
										</a>
									</li>
									
									<!-- <li class="nav-item"> 
										<a href="edit_birth.php" class="nav-link "> <span class="title">Edit Birth Certificate</span>
										</a>
									</li> -->
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Marriage Certificates</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_marriages.php" class="nav-link "> <span class="title">All Marriage Certificates</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_marriage.php" class="nav-link "> <span class="title">New Marriage Certificate</span>
										</a>
									</li>
									
									<!--<li class="nav-item">
										<a href="edit_marriage.php" class="nav-link "> <span class="title">Edit Marriage Certificate</span>
										</a>
									</li>-->
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="event.php" class="nav-link nav-toggle"> <i class="material-icons">event</i>
									<span class="title">Event Management</span>
								</a>
							</li>
                              
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Payments</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.php" class="nav-link "> <span class="title">Payment Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_payments.php" class="nav-link "> <span class="title">Add Payment</span>
										</a>
									</li>
									
									
								</ul>
							</li>
								
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<?php
		}else{

			?>		
			<script type="text/javascript">alert("Please Login");
			location =("../CR_Login/index.php") </script>
			<?php
		}
			?>

