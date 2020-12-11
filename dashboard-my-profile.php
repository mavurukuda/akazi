<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<?php include "vacancy/header.php"?>
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
		<h1><a href="indeex.php"><img src="images/logo2.png" alt="Akazi" /></a></h1>
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
				<li><a href="dashboard-messages.php">Messages <span class="nav-tag">1</span></a></li>
			</ul>

			<ul data-submenu-title="Management">
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
					<h2>My Profile</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Profile</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<div class="row">
			<!-- Profile -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Profile Details</h4>
					<div class="dashboard-list-box-static">
						
						<!-- Avatar -->
						<div class="edit-profile-photo">
							<img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=300" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Upload Photo</span>
								    <input type="file" class="upload" />
								</div>
							</div>
						</div>
	
						<!-- Details -->
						<?php
					$check = $conn->prepare("select * from person_details where zan_id = '$user_zanid' ")or die(mysql_error());
					$check->execute();
					$num_row = $check->rowcount();
						
						$row =$check ->fetch();
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
					
				 ?>
				 <form class="form-sample" method="POST" action="">
						<div class="my-profile">

							<label>Your Name</label>
							<input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname;?>" required />

							<label>Phone</label>
							<input type="text" class="form-control" name="mobile_no" id="mobile_no" value="<?php echo $mobile_no;?>" required />

							<label>Email</label>
							<input type="text" class="form-control" name="alt_email" id="alt_email" value="<?php echo $alt_email;?>" required/>

							<label>Notes</label>
							<textarea name="notes" id="notes" cols="30" value="<?php echo $shehia;?>" rows="10"></textarea>

							<label><i class="fa fa-twitter"></i> Twitter</label>
							<input placeholder="https://www.twitter.com/" type="text">

							<label><i class="fa fa-facebook-square"></i> Facebook</label>
							<input placeholder="https://www.facebook.com/" type="text">

							<label><i class="fa fa-google-plus"></i> Google+</label>
							<input placeholder="https://www.google.com/" type="text">
						</div>
						<button type="submit" class="button margin-top-15" name="savechanges" id="savechanges">Save Changes</button>

					</div>
				 </form>
				</div>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Change Password</h4>
					<div class="dashboard-list-box-static">

						<!-- Change Password -->
						<form action="" method="POST">
							<div class="my-profile">
								<label class="margin-top-0">Current Password</label>
								<input type="password" class="form-control" name="previous_password" placeholder="Previous Password" required>

								<label>New Password</label>
								<input type="password" class="form-control" name="new_password" placeholder="New Password" required>

								<label>Confirm New Password</label>
								<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>

								<button type="submit" class="btn btn-primary submit-btn btn-block" name="change_password" id="change_password">Change Password</button>
							</div>
						</form>

					</div>
				</div>
			</div>



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
<?php
$conn = new PDO('mysql:host=localhost;dbname=Akazi', 'gratty', 'test123456');

if(isset($_POST['savechanges'])) {
$fname = $_POST['fname'];
$mobile_no = $_POST['mobile_no'];
$alt_email = $_POST['alt_email'];
$shehia = $_POST['shehia'];

$conn ->query("UPDATE person_details set fname='$fname',mobile_no='$mobile_no',alt_email='$alt_email',shehia='$shehia' where zan_id='$user_zanid' ")or die(mysql_error());
echo "<script>alert('Personal Details Updated')</script>";
//echo "<script>window.open('personal_details.php','_self')</script>";
}
if(isset($_POST['change_password'])) {
	
$current = $user_password;
$previous_password = $_POST['previous_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
date_default_timezone_set('Africa/Nairobi');
$time=date('g:i a');
$date=date('F d Y');

if ($current != $previous_password){
	echo "<script>alert('Incorrect current Password')</script>";
	//echo ("<p style='color:red;text-align:center'> Incorrect current Password</p>");
}else
if($new_password != $confirm_password){
	echo "<script>alert('Passwords do not match')</script>";
		//echo ("<p style='color:red;text-align:center'> Passwords do not match</p>");
	}else
	if($new_password == $confirm_password){
		$update_pass = $conn->prepare("update applicants set password = '$new_password' where app_id = '$session_id'")or die(mysql_error());
		$update_pass->execute();

		echo "<script>alert('Password changed Succesfully')</script>";
		//echo "<script>window.open('home.php','_self')</script>";

	}

}?>

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