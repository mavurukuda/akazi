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

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Skills</a></li>
						<!-- <li><a href="browse-resumes.php">Browse Resumes</a></li>
						<li><a href="browse-categories.php">Browse Categories</a></li> -->
					</ul>
				</li>

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
						<!-- <li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.php">Skill Alerts</a></li> -->
						<!-- <li><a href="dashboard-manage-jobs.php">Manage Registrations</a></li> -->
						<!-- <li><a href="dashboard-manage-applications.php">Manage Applications</a></li> -->
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
				<!-- <li><a href="dashboard-messages.php">Messages <span class="nav-tag">1</span></a></li> -->
			</ul>

			<ul data-submenu-title="Management">
			<?php
						if( $role =='Admin'){ echo "
							<li><a>For Employers</a><ul><li><a href='dashboard-manage-jobs.php'>Manage Registrations <span class='nav-tag'></span></a></li>
							<li><a href='dashboard-user.php'>User Management <span class='nav-tag'> $applicationscount </span></a></li>	
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
					<h2>Register a skill</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Register a skill</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">
			<form class="form-sample" method="POST" action="">

				<div class="dashboard-list-box margin-top-0">
					<h4>Skill Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>Your Email/Email Yawe</h5>
							<input class="search-field" name="email" required type="email" placeholder="mail@example.com" value=""/>
						</div>

						<!-- Title -->
						<div class="form">
							<h5>Skill Title/Ubumenyi Ufite</h5>
							<input class="search-field" name="title" required type="text" placeholder="" value=""/>
						</div>

						<!-- Job Type -->
						<div class="form">
							<h5>Skill Type/Umwanya Uboneka</h5>
							<select data-placeholder="Full-Time" name="skilltype" required class="chosen-select-no-single">
								<option value="Full">Full-Time</option>
								<option value="Part-Time">Part-Time</option>
								<option value="Freelance">Freelance</option>
							</select>
						</div>

							<!-- rating -->
						<div class="form">
							<h5>Rate/Ibiciro</h5>
		

							<input class="search-field" name="rateHr" required type="text" placeholder="" value=""/>
						</div>


						<!-- Choose Category -->
						<!-- <div class="form">
							<div class="select">
								<h5>Category</h5>
								<select data-placeholder="Choose Categories" name="categoriy" required class="chosen-select" multiple>
									<option value="Web Developers">Web Developers</option>
									<option value="Mobile Developers">Mobile Developers</option>
									<option value="Designers & Creatives">Designers & Creatives</option>
									<option value="Writers">Writers</option>
									<option value="Virtual Assistants">Virtual Assistants</option>
									<option value="6">Customer Service Agents</option>
									<option value="7">Sales & Marketing Experts</option>
									<option value="8">Construction / Facilities</option>
									<option value="9">Education / Training</option>
									<option value="10">Transportation / Logistics</option>
									<option value="11">Automotive Jobs</option>
									<option value="12">Accountants & Consultants</option>
									<option value="13">Home Maintainance</option>
									<option value="14">Lifestyle</option>
									<option value="15">Gardening</option>
									<option value="16">Personal Care Services</option>
								</select>
							</div>
						</div> -->


						<!-- Location -->
						<div class="form">
							<h5>Location/Ahantu wakorera <span>(optional)</span></h5>
							<input class="search-field" name="location"  type="text" placeholder="e.g. Kigali" value=""/>
							<p class="note">Leave this blank if the location is not important</p>
						</div>

							<!-- TClosing Date -->
						<div class="form">
							<h5>Available Date </h5>
							<input data-role="date" name="startDate" required type="date" placeholder="yyyy-mm-dd">
							<input data-role="date" name="enddate" required type="date" placeholder="yyyy-mm-dd">
							<p class="note">Deadline for new applicants.</p>
						</div>


						<!-- Description -->
						<div class="form" style="width: 100%;">
							<h5>Description/Garagaza Imiterere</h5>
							<textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
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
			
			$conn = new PDO('mysql:host=localhost;dbname=Akazi', 'gratty', 'test123456');
				if(isset($_POST['savechanges'])) {
				$EMAIL 	   		 = $_POST['email'];
				//$CATEGORY		 = $_POST['title'];
				$OCCUPATIONTYPE  = $_POST['skilltype'];
				$OCCUPATIONTITLE = $_POST['title'];
				$LOCATION		 = $_POST['location'];
				//$SKILLTAGS		 = $_POST['skilltags'];
				//$JOBDESCRIPTION  = $_POST['summary'];
				//$APPLICATIONEMAIL= $_POST['applicationemail'];
				$STARTDATE	 =$_POST['startDate'];
				$ENDDATE	 =$_POST['enddate'];

				//$COMPANYNAME	=	$_POST['companyname'];
				//$COMPANYSITE	=	$_POST['companysite'];
				//$COMPANYTAGS 	= 	$_POST['companytag'];
				//$COMPANYTWITTER = 	$_POST['companytwitter'];
				//$COMPANYLOGO   	= 	$_POST['companylogo'];
				$JOBSTATUS = 'Open';
				$DATEPOSTED = date('Y-M-D');

				$rateHr         = $_POST['rateHr'];

				
				$JOBDESCRIPTION  = $_POST['summary'];

			
				$query = "INSERT into 
				tblskills(app_id,EMAIL,OCCUPATIONTYPE,OCCUPATIONTITLE,LOCATIONNAME,JOBDESCRIPTION,JOBSTATUS,DATEPOSTED,rateHr,STARTDATE,ENDDATE)
							VALUES('$app_id','$EMAIL','$OCCUPATIONTYPE','$OCCUPATIONTITLE',
							'$LOCATION','$JOBDESCRIPTION','$JOBSTATUS','$DATEPOSTED','$rateHr','$STARTDATE','$ENDDATE')"or 
							die(mysql_error());
					

				$conn->exec($query);

				echo "<script>alert('Skill has been registered')</script>";
				// echo "<script>window.open('dash.php','_self')</script>";
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