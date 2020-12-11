<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Akazi</title>
<?php include "vacancy/header.php"?>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Favicon-->
<link rel="shortcut icon" href="images/fav.png">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="css/colors.css">


<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>


<body>
<?php include "vacancy/session.php"?>
<div id="wrapper">



<!-- Header
================================================== -->
<header class="dashboard-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
		<h1><a href="indeex.php"><img  src="images/logo2.png" alt="Akazi" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="indeex.php">Home</a>
				</li>

		

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<!-- <li><a href="dashboard-messages.php">Messages</a></li> -->
						<!-- <li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li> -->
						<!-- <li><a href="dashboard-job-alerts.php">Skill Alerts</a></li> -->
						<!-- <li><a href="dashboard-manage-jobs.php">Manage Registrations</a></li> -->
						<!-- <li><a href="dashboard-manage-applications.php">Manage Registrations</a></li> -->
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
						<li><a href="dashboard-my-profile.php">My Profile</a></li>
					</ul>
				</li>
			</ul>


			<ul class="responsive float-right">
				<li><a style="color:green" href="dashboard.php"> <?php echo $fname;?></a></li>
				<li><a href="dashboard.php"><i class="fa fa-cog"></i> Dashboard</a></li>
				<li><a href="logout.php"><i class="fa fa-lock"></i> Log Out</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->

<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Start">
				<li class="active"><a href="dashboard.php">Dashboard</a></li>
				<!-- <li><a href="dashboard-messages.php">Messages <span class="nav-tag">1</span></a></li> -->
			</ul>

			<ul data-submenu-title='Management'>
				
			<?php
						if( $role =='Admin'){ echo "
							<li><a>For Employers</a><ul><li><a href='dashboard-manage-jobs.php'>Manage Registrations <span class='nav-tag'></span></a></li>
							<li><a href='dashboard-user.php'>User Management <span class='nav-tag'> $applicationscount </span></a></li>	
							<li><a href='dashboard-logs.php'>User Logs <span class='nav-tag'> $logscount </span></a></li>	
							</ul></li>";} ?>
					

				<li><a>For Candidates</a>
					<ul>
						<!-- <li><a href="dashboard-manage-resumes.php">Manage Resumes <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-candidate-apply.php">Candidate Apply <span class="nav-tag"><?php echo $applicationscount; ?></span></a></li>
						<li><a href="dashboard-job-alerts.php">Skill Alerts</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li> -->
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
					</ul>
				</li>	
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="dashboard-my-profile.php">My Profile</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Welcome, <?php echo $fname;?></h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Dashboard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<!-- Content -->
		<div class="row">

			<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-1">
					<div class="dashboard-stat-content"><h4 class="counter"><?php echo $logscount; ?></h4> <span>Active Users</span></div>
					<div class="dashboard-stat-icon"><i class="ln ln-icon-File-Link"></i></div>
				</div>
			</div>

				<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-2">
					<div class="dashboard-stat-content"><h4 class="counter"><?php echo $jobcount; ?></h4> <span>Total Skills Views</span></div>
					<div class="dashboard-stat-icon"><i class="ln ln-icon-Bar-Chart"></i></div>
				</div>
			</div>


				<!-- Item -->
			<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-3">

				
					<div class="dashboard-stat-content"><h4 class="counter"><?php echo $applicationscount; ?></h4> <span>Total Users</span></div>
					<div class="dashboard-stat-icon"><i class="ln ln-icon-Business-ManWoman"></i></div>
				</div>
			</div>


			<!-- Item -->
				<div class="col-lg-3 col-md-6">
				<div class="dashboard-stat color-4">
					<div class="dashboard-stat-content"><h4 class="counter">0</h4> <span>Times Bookmarked</span></div>
					<div class="dashboard-stat-icon"><i class="ln ln-icon-Add-UserStar "></i></div>
				</div>
			</div>

		</div>


		<div class="row">
			
			<!-- Recent Activity -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-20">
					<h4>Recent Skills</h4>
					<!-- <ul>
						<li>
							 <?php //echo $feedback; ?>
						
							<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
						</li>

					</ul> -->

				</div>
			</div>
							<br><br><br><br>
			
			<?php
		
			
		$sql = $conn->prepare("SELECT * FROM `tblskills`  ORDER BY JOBID DESC LIMIT 5 OFFSET 0 ")or die(mysql_error());
		$sql->execute();
		while ($row = $sql->fetch()) {
			
		echo "	<div  class='listing full-time'>
		<div class='listing-logo'>
			<img src='images/job-list-logo-01.png' alt=''>
		</div>
		<div class='listing-title'>
			<h4>".$row['OCCUPATIONTITLE']." <span class='listing-type'>".$row['OCCUPATIONTYPE']."</span></h4>
			<ul class='listing-icons'>
				<li><i class='ln ln-icon-Management'></i> <b>Location :</b> ".$row['LOCATIONNAME']."</li>
				<li><i class='ln ln-icon-Map2'></i>  <b>Availability :</b>from ".$row['STARTDATE']." to ".$row['ENDDATE']."</li>
				<li><i class='ln ln-icon-Money-2'></i>  <b>Rate :</b> ".$row['rateHr']."</li>
				<li><div > 
				<form class='form-sample' method='POST' action='browse-jobs.php'>
					<input type='hidden'  class='form-control' name='JOBID' id='person_id' value=' ".$row['JOBID']."'  />
					<button  class='listing-date new' type='submit'  name='showdetails' id='savechanges'>Show more details</button>
				</form>   
			 </div></li><br>
				<li style='color:blue'>Like  <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-hand-thumbs-up' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
					<path fill-rule='evenodd' d='M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0
					.121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z'/>
					</svg> ".$row['liked']."
				</li>
				<li style='color:red'>
				
					  
				</li>
			  <li style='color:green'> 
		
				  <form class='form-sample' method='POST' action='dashboard-messages.php'>
				  		  <input type='hidden'  class='form-control' name='app_id' id='' value=' ".$row['app_id']."'  />
						  <input type='hidden'  class='form-control' name='title' id='' value=' ".$row['OCCUPATIONTITLE']."'  />
						  <input type='hidden'  class='form-control' name='JOBID' id='JOBID' value=' ".$row['JOBID']."'  />
				   <button style='background-color:green' class='button margin-top-15' type='submit'  name='chat' id='savechanges'>Chat</button>
				</form>   
				</li>
			</ul>
		</div>
	</div> <br>";
		}
	?>
			
			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Group 3. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-3.4.1.min.js"></script>
<script src="scripts/jquery-migrate-3.1.0.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/slick.min.js"></script>



</body>
</html>