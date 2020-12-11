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
		<h1><a href="indeex.php"><img style="width:30%;height:30%;" src="images/logo2.png" alt="Akazi" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.php">Home</a>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Skills</a></li>
					</ul>
				</li>

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
						
						<li><a href="dashboard-add-job.php">Add Job</a></li>
						<li><a href="dashboard-my-profile.php">My Profile</a></li>
					</ul>
				</li>
			</ul>


			<ul class="responsive float-right">
				<li><a style="color:green" href="dashboard.php"> <?php echo $fname;?></a></li>
				<li><a href="dashboard.php"><i class="fa fa-cog"></i> Dashboard</a></li>
				<li><a href="index.html"><i class="fa fa-lock"></i> Log Out</a></li>
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
						<?php
						if( $role =='Admin'){ echo "<li><a>For Employers</a><ul><li><a href='dashboard-manage-jobs.php'>Manage Registrations <span class='nav-tag'>0</span></a></li>	
							</ul></li>";} ?>
						
					</ul>
				</li>

				<li><a>For Candidates</a>
					<ul>
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
					<h2>Edit Skill</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Edit Skill</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

		<?php
			
			$conn = new PDO('mysql:host=localhost;dbname=Akazi', 'gratty', 'test123456');
				if(isset($_POST['savechanges'])) {
				$JOBID 	   		 = $_POST['JOBID'];
				$resultUser = $conn->prepare("select * from tblskills where JOBID = '$JOBID' ")or die(mysql_error());
				$resultUser->execute();
				$row = $resultUser->fetch();
				$DBJOBID = $row['JOBID'];
				$EMAIL = $row['EMAIL'];
				$CATEGORY = $row['CATEGORY'];
				$OCCUPATIONTYPE = $row['OCCUPATIONTYPE'];
				$OCCUPATIONTITLE = $row['OCCUPATIONTITLE'];
				$LOCATION = $row['LOCATIONNAME'];
				$SKILLTAGS = $row['SKILLTAGS'];
				$JOBDESCRIPTION = $row['JOBDESCRIPTION'];
				$APPLICATIONEMAIL = $row['APPLICATIONEMAIL'];
				$CLOSINGDATE = $row['CLOSINGDATE'];
				$COMPANYNAME = $row['COMPANYNAME'];
				$COMPANYSITE = $row['COMPANYSITE'];
				$COMPANYTAGS = $row['COMPANYTAGS'];
				$COMPANYTWITTER = $row['COMPANYTWITTER'];
				$COMPANYLOGO = $row['COMPANYLOGO'];
				$JOBSTATUS = $row['JOBSTATUS'];
				$DATEPOSTED = $row['DATEPOSTED'];

				}
			?>
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">
			<form class="form-sample" method="POST" action="">

				<div class="dashboard-list-box margin-top-0">
					<h4>Skill Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>Your Email</h5>
							<input class="search-field" name="email" required type="email" placeholder="mail@example.com" value="<?php echo $EMAIL; ?>"/>
							<input class="search-field" name="DBJOBID" required type="hidden" placeholder="mail@example.com" value="<?php echo $DBJOBID; ?>"/>
						</div>

						<!-- Title -->
						<div class="form">
							<h5>Skill Title</h5>
							<input class="search-field" name="title" required type="text" placeholder="" value="<?php echo $OCCUPATIONTITLE; ?>"/>
						</div>

						<!-- Job Type -->
						<div class="form">
							<h5>Skill Type</h5>
							<select data-placeholder="Full-Time" name="skilltype" value="<?php echo $OCCUPATIONTYPE; ?>" required class="chosen-select-no-single">
								<option value="Full-Time">Full-Time</option>
								<option value="Part-Time">Part-Time</option>
								<option value="Freelance">Freelance</option>
							</select>
						</div>


		

						<!-- Location -->
						<div class="form">
							<h5>Location <span>(optional)</span></h5>
							<input class="search-field" name="location" value="<?php echo $LOCATION; ?>"  type="text" placeholder="e.g. Kigali" value=""/>
							<p class="note">Leave this blank if the location is not important</p>
						</div>




						<!-- Description -->
						<div class="form" style="width: 100%;">
							<h5>Description</h5>
							<textarea class="WYSIWYG" name="summary" value="<?php echo $JOBDESCRIPTION; ?>" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
						</div>

			

					</div>

					</div>
				</div>


				<button type="submit" class="button margin-top-15" name="savechanges2" id="savechanges">Save Changes</button><br>
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
				if(isset($_POST['savechanges2'])) {
				$DBJOBID 	   	= $_POST['DBJOBID'];
				$EMAIL 	   		 = $_POST['email'];
				$OCCUPATIONTITLE		 = $_POST['title'];
				$OCCUPATIONTYPE  = $_POST['skilltype'];
				$LOCATION		 = $_POST['location'];
				$JOBDESCRIPTION  = $_POST['summary'];
				$JOBSTATUS = 'Open';
				$DATEPOSTED = date('Y-M-D');

				
				$JOBDESCRIPTION  = $_POST['summary'];

				$conn ->query("UPDATE tblskills set
				 EMAIL='$EMAIL',OCCUPATIONTYPE='$OCCUPATIONTYPE',
				 OCCUPATIONTITLE='$OCCUPATIONTITLE',LOCATIONNAME='$LOCATION',
				 JOBDESCRIPTION='$JOBDESCRIPTION'
				   
				 where JOBID='$DBJOBID' ")or die(mysql_error());
			


				$conn->exec($query);

		
				echo "<script>alert('Skill Edited')</script>";
				echo "<script>window.open('dashboard-manage-jobs.php','_self')</script>";
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