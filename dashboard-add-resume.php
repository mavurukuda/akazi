<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Akazi</title>


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
<?php include "vacancy/header.php"?>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>

<body><?php include "vacancy/session.php"?>
<div id="wrapper">



<!-- Header
================================================== -->
<header class="dashboard-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.html"><img src="images/logo.png" alt="Akazi" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.html">Home</a>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Jobs</a></li>
						<li><a href="browse-resumes.php">Browse Resumes</a></li>
						<li><a href="browse-categories.php">Browse Categories</a></li>
					</ul>
				</li>

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
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

	<!-- Responsive Navigation Trigger -->
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
						<li><a href="dashboard-manage-jobs.php">Manage Skill <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
					</ul>
				</li>

				<li><a>For Candidates</a>
					<ul>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-candidate-apply.php">Candidate Apply <span class="nav-tag"><?php echo $applicationscount; ?></span></a></li>
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
	<!-- Navigation / End -- >


	<!-- Content
	================================================== -->
	<div class="dashboard-content">


		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Resume</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Resume</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

		<?php
					$check = $conn->prepare("select * from person_details where zan_id = '$user_zanid' ")or die(mysql_error());
					$check->execute();
					$num_row = $check->rowcount();
						
						$row =$check ->fetch();
						$fname = $row['fname'];
						$sname = $row['sname'];
						//$gender = $row['gender'];
						//$dob = $row['dob'];
						//$marital_status = $row['marital_status'];
						//$mobile_no = $row['mobile_no'];
						$alt_email = $row['alt_email'];
						$country = $row['country'];
						//$region = $row['region'];
						//$district = $row['district'];
						$proftitle = $row['proftitle'];	
						$resumecontent = $row['resumecontent'];	


						$check = $conn->prepare("select * from working_experience where zan_id = '$user_zanid' ")or die(mysql_error());
						$check->execute();
						$num_row = $check->rowcount();
							
							$row =$check ->fetch();
							$working_organization = $row['working_organization'];
							$working_title = $row['working_title'];
							$working_start = $row['working_start'];
							$working_responsibilities = $row['working_responsibilities'];	
					
				 ?>
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">
			<form class="form-sample" method="POST" action="">
				<div class="dashboard-list-box margin-top-0">
					<h4>Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>Your Name</h5>
							<input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname;?>" required />
						</div>

						<!-- Email -->
						<div class="form">
							<h5>Your Email</h5>
							<input type="email" class="form-control" name="alt_email" id="alt_email" value="<?php echo $alt_email;?>" required/>
						</div>

						<!-- Title -->
						<div class="form">
							<h5>Professional Title</h5>
							<input type="text" class="form-control" name="proftitle" id="proftitle" value="<?php echo $proftitle;?>" required/>
						</div>

						<!-- Location -->
						<div class="form">
							<h5>Location</h5>
							<input type="text" class="form-control" name="country" id="country" value="<?php echo $country;?>" required/>
						</div>

						<!-- Logo -->
						<div class="form">
							<h5>Photo <span>(optional)</span></h5>
							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>
						</div>

						<!-- Email -->
						<div class="form">
							<h5>Video <span>(optional)</span></h5>
							<input class="search-field" type="text" placeholder="A link to a video about you" value=""/>
						</div>

						<!-- Description -->
						<div class="form" style="width: 100%;">
							<h5>Resume Content</h5>
							<textarea class="WYSIWYG" name="resumecontent" cols="40" rows="3" id="summary" value="<?php echo $resumecontent;?>" spellcheck="true"></textarea>
						</div>

					</div>

					</div>
				</div>


				<div class="dashboard-list-box margin-top-30">
					<h4>Education</h4>
					<div class="dashboard-list-box-content with-padding">

						<div class="form-inside">

							<!-- Add Education -->
							<div class="form boxed box-to-clone education-box">
								<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
								<input class="search-field" type="text" name="schoolname" placeholder="School Name" value=""/>
								<input class="search-field" type="text" name="qualification"  placeholder="Qualification(s)" value=""/>
								<input class="search-field" type="date" name="startdate" placeholder="Start Date" value=""/>
								<input class="search-field" type="date" name="enddate" placeholder="End Date " value=""/>
								<textarea name="notes" id="desc" cols="30" rows="10" placeholder="Notes (optional)"></textarea>
							</div>

							<a href="#" class="button gray add-education add-box margin-top-10"><i class="fa fa-plus-circle"></i> Add Education</a>
						</div>

					</div>
				</div>


				<div class="dashboard-list-box margin-top-30">
					<h4>Experience</h4>
					<div class="dashboard-list-box-content with-padding">
				<div class="form-inside">

					<!-- Add Experience -->
					<div class="form boxed box-to-clone experience-box">
						<a href="#" class="close-form remove-box button"><i class="fa fa-close"></i></a>
						<input class="search-field" type="text" value="<?php echo $working_organization;?>" name="working_organization" placeholder="Employer" value=""/>
						<input class="search-field" type="text" value="<?php echo $working_title;?>" name="working_title" placeholder="Job Title" value=""/>
						<input class="search-field" type="date" value="<?php echo $working_start;?>" name="working_start" placeholder="Start / end date" value=""/>
						<textarea  id="desc1" cols="30" value="<?php echo $working_responsibilities;?>" name="working_responsibilities" rows="10" placeholder="Notes (optional)"></textarea>
					</div>

					<a href="#" class="button gray add-experience add-box margin-top-10"><i class="fa fa-plus-circle"></i> Add Experience</a>
				</div>


					</div>
				</div>
				<button type="submit" class="button margin-top-15" name="savechanges" id="savechanges">Save Changes</button><br>
				<a href="#" class="button margin-top-30">Preview <i class="fa fa-arrow-circle-right"></i></a>
			</form>
			</div>


			<?php
				$conn2 = new PDO('mysql:host=localhost;dbname=zep', 'root', '');

				if(isset($_POST['savechanges'])) {
				$fname = $_POST['fname'];
				$alt_email = $_POST['alt_email'];
				$country = $_POST['country'];
				$proftitle = $_POST['proftitle'];
				$resumecontent = $_POST['resumecontent'];
				
				$working_organization=$_POST['working_organization'];
				$working_title=$_POST['working_title'];
				$working_start=$_POST['working_start'];
				$working_responsibilities=$_POST['working_responsibilities'];

				$schoolname	=$_POST['schoolname'];
				$qualification		=$_POST['qualification'];
				$startdate			=$_POST['startdate'];
				$enddate			=$_POST['enddate'];
				$notes				=$_POST['notes'];


				$conn ->query("UPDATE person_details set fname='$fname',alt_email='$alt_email',country='$country',proftitle='$proftitle',resumecontent='$resumecontent' where zan_id='$user_zanid' ")or die(mysql_error());


				$query = "INSERT into 
				working_experience(zan_id,working_organization,working_title,working_start,working_responsibilities)
							VALUES('$user_zanid','$working_organization','$working_title','$working_start','$working_responsibilities')"or 
							die(mysql_error());

				$query = "INSERT into 
				qualifications(zan_id,institution,education,startdate,enddate,notes)
							VALUES('$user_zanid','$schoolname','$qualification','$startdate','$enddate','$notes')"or 
							die(mysql_error());


				$conn->exec($query);

				
				echo "<script>alert('Resume Submited')</script>";
				echo "<script>window.open('dashboard-manage-resumes.php','_self')</script>";
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