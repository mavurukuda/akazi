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
			<h1><a href="indeex.php"><img src="images/logo.png" alt="Akazi" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="indeex.php">Home</a>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Skills</a></li>
						<li><a href="browse-resumes.php">Browse Resumes</a></li>
						<li><a href="browse-categories.php">Browse Categories</a></li>
					</ul>
				</li>

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.html">Messages</a></li>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.php">Job Alerts</a></li>
						<li><a href="dashboard-manage-jobs.php">Manage Jobs</a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications</a></li>
						<li><a href="dashboard-add-job.php">Add Job</a></li>
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

	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Start">
				<li class="active"><a href="dashboard.php">Dashboard</a></li>
				<li><a href="dashboard-messages.php">Messages <span class="nav-tag">1</span></a></li>
			</ul>

			<ul data-submenu-title="Management">
				<li><a>For Employers</a>
					<ul>
						<li><a href="dashboard-manage-jobs.php">Manage Skills <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
					</ul>
				</li>

				<li><a>For Candidates</a>
					<ul>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-candidate-apply.php">Candidate Apply <span class="nav-tag"><?php echo $applicationscount; ?></span></a></li>
						<li><a href="dashboard-job-alerts.php">Skills Alerts</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
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
					<h2>Manage Applications</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Manage Applications</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="notification notice">
					The job applications for <strong><a href="#">User Experience Designer</a></strong> are listed below.
				</div>
			</div>

		<div class="col-md-6">
			<!-- Select -->
			<select data-placeholder="Filter by status" class="chosen-select-no-single">
				<option value="">Filter by status</option>
				<option value="new">New</option>
				<option value="interviewed">Interviewed</option>
				<option value="offer">Offer extended</option>
				<option value="hired">Hired</option>
				<option value="archived">Archived</option>
			</select>
			<div class="margin-bottom-15"></div>
		</div>

		<div class="col-md-6">
			<!-- Select -->
			<select data-placeholder="Newest first" class="chosen-select-no-single">
				<option value="">Newest first</option>
				<option value="name">Sort by name</option>
				<option value="rating">Sort by rating</option>
			</select>
			<div class="margin-bottom-35"></div>
		</div>

				<?php
					$sql = $conn->prepare("select * from person_details as pd inner join candidatesapplyed as cd on pd.zan_id = cd.zen_id")or die(mysql_error());
					$sql->execute();
					while ($row = $sql->fetch()) {
						$id = $row['id'];
						$status = $row['status'];
						$rate = $row['rate'];
						$fname = $row['fname'];
						$mname = $row['mname'];
						$sname = $row['sname'];
						$gender = $row['gender'];
						$dob = $row['dob'];
						$marital_status = $row['marital_status'];
						$mobile_no = $row['mobile_no'];
						$alt_email = $row['alt_email'];
						$country = $row['country'];
						$region = $row['region'];
						$district = $row['district'];
						$shehia = $row['shehia'];	
				

		
		echo "
		<div class='col-md-12'>
			
			<!-- Application #1 -->
			<div class='application'>
				<div class='app-content'>
					
					<!-- Name / Avatar -->
					<div class='info'>
						<img src='images/resumes-list-avatar-01.png' >
						<span> $fname</span>
						<ul>
							<li><a href='#'><i class='fa fa-file-text'></i> Download CV</a></li>
							<li><a href='#'><i class='a fa-envelope'></i> Contact</a></li>
						</ul>
					</div>
					
					<!-- Buttons -->
					<div class='buttons'>
						<a href='#one-1' class='button gray app-link'><i class='fa fa-pencil'></i> Edit</a>
						<a href='#two-1' class='button gray app-link'><i class='a fa-sticky-note'></i> Add Note</a>
						<a href='#three-1' class='button gray app-link'><i class='fa fa-plus-circle'></i> Show Details</a>
					</div>
					<div class='clearfix'></div>

				</div>

				<!--  Hidden Tabs -->
				<div class='app-tabs'>

					<a href='#' class='close-tab button gray'><i class='fa fa-close'></i></a>
					
					<!-- First Tab -->
				    <div class='app-tab-content' id='one-1'>

						<div class='select-grid'>
						<form class='form-sample' method='POST' action='delete-operations.php'>
							<select data-placeholder='Application Status' name='status' class='chosen-select-no-single'>
								<option value=''>Application Status</option>
								<option value='new'>New</option>
								<option value='interviewed'>Interviewed</option>
								<option value='offer'>Offer extended</option>
								<option value='hired'>Hired</option>
								<option value='archived'>Archived</option>
							</select>
						</div>

						<div class='select-grid'>
							<input type='number' name='rate' min='1' max='5' placeholder='Rating (out of 5)'>
							<input type='hidden' name='id' value='$id'>
						</div>
						
							<div class='clearfix'></div>
							<button type='submit' class='button margin-top-15' name='saveStatus' >Save</button>
						</form>
							<form class='form-sample' method='POST' action='delete-operations.php'>
								<input type='hidden' name='id' value='$id'>
								<button type='submit' class='button gray margin-top-15 delete-application' name='deleteapplication' >Delete this application</button>
							</form>

					</div>
					
				    
					<!-- Second Tab -->
					<form class='form-sample' method='POST' action='delete-operations.php'>
				    <div class='app-tab-content'  id='two-1'>
						<textarea placeholder='Private note name='notes' regarding this application'></textarea>
						<button type='submit' class='button margin-top-15' name='saveNotes' >Add Note</button>
					</div>
					</form>
				    
				    <!-- Third Tab -->
				    <div class='app-tab-content'  id='three-1'>
						<i>Full Name:</i>
						<span> $fname</span>

						<i>Email:</i>
						<span><a href='mailto:t.gwede@alustudent.com'> $alt_email</a></span>

						<i>Contact:</i>
						<span>$mobile_no</span>

						<i>Skill Status:</i>
						<span>$status</span>

						<i>Rating:</i>
						<span>$rate</span>
				    </div>

				</div>

				<!-- Footer -->
				<div class='app-footer'>

					<div class='rating no-stars'>
						<div class='star-rating'></div>
						<div class='star-bg'></div>
					</div>

					<ul>
						<li><i class='fa fa-file-text-o'></i> New</li>
						<li><i class='fa fa-calendar'></i> June 1, 2020</li>
					</ul>
					<div class='clearfix'></div>

				</div>
			</div> ";
				}
				?>

	</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2021 Group 3. All Rights Reserved.</div>
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