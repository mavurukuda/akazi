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

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.php">Job Alerts</a></li>
						<li><a href="dashboard-manage-jobs.php">Manage Skills</a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications</a></li>
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

	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Start">
				<li class="active"><a href="dashboard.php">Dashboard</a></li>
				<li><a href="dashboard-messages.html">Messages <span class="nav-tag">1</span></a></li>
			</ul>

			<ul data-submenu-title="Management">
				<li><a>For Employers</a>
					<ul>
						<li><a href="dashboard-manage-jobs.php">Manage Skills <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-manage-applications.html">Manage Applications <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-add-job.php">Add Sill</a></li>
					</ul>
				</li>

				<li><a>For Candidates</a>
					<ul>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-job-alerts.php">Skill Alerts</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
					</ul>
				</li>	
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="dashboard-my-profile.php">My Profile</a></li>
				<li><a href="index.html">Logout</a></li>
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
					<h2>Edit Alert</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Edit Alert</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

		<?php
			
			$conn = new PDO('mysql:host=localhost;dbname=zep', 'root', '');
				if(isset($_POST['editAlert'])) {
				$id 	   		 = $_POST['id'];
				$resultUser = $conn->prepare("select * from alerts where id = '$id' ")or die(mysql_error());
				$resultUser->execute();
				$row = $resultUser->fetch();
				$status = $row['alertstatus'];
				$frequency = $row['frequency'];
				$location = $row['alertlocation'];
				$alertname = $row['alertname'];
				$keywords = $row['keywords'];
				

				}
			?>
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">
			<form class="form-sample" method="POST" action="">

				<div class="dashboard-list-box margin-top-0">
					<h4>Alert Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>Alert</h5>
							<input class="search-field" name="alertname" required type="text" placeholder="Alert name" value="<?php echo $alertname;  ?>"/>
							<input class="search-field" name="id" required type="hidden" placeholder="Alert name" value="<?php echo $id;  ?>"/>
						</div>

					

						<!-- Location -->
						<div class="form">
							<h5>Location <span>(optional)</span></h5>
							<input class="search-field" name="location"  type="text" placeholder="e.g. Kigali" value="<?php echo $location;  ?>"/>
							<p class="note">Leave this blank if the location is not important</p>
						</div>


						<!-- Tags -->
						<div class="form">
							<h5>Frequency <span>(optional)</span></h5>
							<input class="search-field" name="frequency"  type="text" placeholder="" value="<?php echo $frequency;  ?>"/>
						</div>

							<!-- Job Status -->
						<div class="form">
							<h5>Status</h5>
							<select data-placeholder="Full-Time" name="status" value="<?php echo $status; ?>" required class="chosen-select-no-single">
								<option value="1">Close</option>
								<option value="2">Open</option>
								<option value="2">Partial</option>
							</select>
						</div>

						<div class="form">
							<h5>Keywords <span>(optional)</span></h5>
							<input class="search-field" name="keywords"  type="text" placeholder="" value="<?php echo $keywords; ?>"/>
						</div>
	
					</div>

					</div>
				</div>


		
				<button type="submit" class="button margin-top-15" name="savechanges" id="savechanges">Save Changes</button><br>
				<a href="#" class="button margin-top-30">Preview <i class="fa fa-arrow-circle-right"></i></a>
			</div>

			</form>
			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Group 3. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->

			<?php
			
			$conn = new PDO('mysql:host=localhost;dbname=zep', 'root', '');
				if(isset($_POST['savechanges'])) {
				$id 	   		 = $_POST['id'];
				$status 	   		 = $_POST['status'];
				$frequency		 = $_POST['frequency'];
				$location		 = $_POST['location'];
				$alertname		 = $_POST['alertname'];
				//$date 			 = date('Y-M-D');
				$keywords		 = $_POST['keywords'];

			
				$conn ->query("UPDATE alerts set
				 alertstatus='$status',frequency='$frequency',alertlocation='$location',
				 alertname='$alertname',keywords='$keywords'
				 where id='$id' ")or die(mysql_error());
		
				$conn->exec($query);

				echo "<script>alert('Alert Edited')</script>";
				echo "<script>window.open('dashboard-job-alerts.php','_self')</script>";
				}
			?>


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