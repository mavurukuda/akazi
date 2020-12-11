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
<link rel="stylesheet" href="css/colors.css">



</head>

<body>
<?php include "vacancy/session.php"?>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="sticky-header">
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

				<li><a href="#">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.php">Skill Alerts</a></li>
						<li><a href="dashboard-manage-jobs.php">Manage Skills</a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications</a></li>
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
						<li><a href="dashboard-my-profile.php">My Profile</a></li>
					</ul>
				</li>

				<li><a href="contact.html">Contact</a></li>
			</ul>


			<ul class="responsive float-right">
			<li><a style="color:green" href="dashboard.php"> <?php echo $fname;?></a></li>
				<li><a href="my-account.html#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
				<li><a href="my-account.html"><i class="fa fa-lock"></i> Log In</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background-image: url(images/all-categories-photo.jpg);">
	<div class="container">
		<div class="ten columns">
			<h2>All Categories</h2>
		</div>

		<div class="six columns">
			<a href="dashboard-add-job.php" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div id="categories">
	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<?php
				$sql = $conn->prepare("select * from tblskills group by CATEGORY ")or die(mysql_error());
				$sql->execute();
				while ($row = $sql->fetch()) {
			
				// echo "<tr><td>".$row['OCCUPATIONTITLE']."</td><td>".$row['JOBSTATUS']."</td>
				// <td>".$row['DATEPOSTED']."</td><td>".$row['DATEPOSTED']."</td><td>".$row['APPLICATIONS']."</td>
				// <td><a href='dashboard-add-job.php'>edit</a><span> </span><a style='color:red' href='#'>delete</a></td>";

				echo " 
				<div class='four columns'><h4>".$row['CATEGORY']."</h4></div>
				<div class='four columns'>
					<ul>
						<li>".$row['OCCUPATIONTITLE']." </li>
					</ul>
				</div> ";
									
				}
			?>
	
			<div class="four columns">
				<ul>
					<li><a href="#">MySQL</a></li>
					<li><a href="#">JavaScript</a></li>
					<li><a href="#">Software</a></li>
					<li><a href="#">Website Design</a></li>
					<li><a href="#">Programming</a></li>
					<li><a href="#">SEO</a></li>
					<li><a href="#">Java</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="#">CSS</a></li>
					<li><a href="#">HTML5</a></li>
					<li><a href="#">Web Development</a></li>
					<li><a href="#">Web Design</a></li>
					<li><a href="#">eCommerce</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Design, Art & Multimedia</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="#">Design</a></li>
					<li><a href="#">Logo Design</a></li>
					<li><a href="#">Graphic Design</a></li>
					<li><a href="#">Video</a></li>
					<li><a href="#">Adnimation</a></li>
					<li><a href="#">Adobe Photoshop</a></li>
					<li><a href="#">Illustration</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="#">Art</a></li>
					<li><a href="#">3D</a></li>
					<li><a href="#">Adobe Illustrator</a></li>
					<li><a href="#">Drawing</a></li>
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Cartoon</a></li>
					<li><a href="#">Graphics</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="#">Fashion Design</a></li>
					<li><a href="#">WordPress</a></li>
					<li><a href="#">Editing</a></li>
					<li><a href="#">Writing</a></li>
					<li><a href="#">T-Shirt Design</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Sales & Marketing</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="#">Display Advertising</a></li>
					<li><a href="#">Email Marketing</a></li>
					<li><a href="#">Lead Generation</a></li>
					<li><a href="#">Market & Customer Research</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="#">Marketing Strategy</a></li>
					<li><a href="#">Public Relations</a></li>
					<li><a href="#">Telemarketing & Telesales</a></li>
					<li><a href="#">Other - Sales & Marketing</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="#">SEM - Search Engine Marketing</a></li>
					<li><a href="#">SEO - Search Engine Optimization</a></li>
					<li><a href="#">SMM - Social Media Marketing</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Automotive Jobs</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="#">Mechanic</a></li>
					<li><a href="#">Tow Truck</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Personal Care Services</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="#">Barber</a></li>
					<li><a href="#">Hairdresser</a></li>
					<li><a href="#">Makeup Artist</a></li>
					<li><a href="#">Nail technician</a></li>
					<li><a href="#">Fashion Designer</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Home Maintainance</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="#">Electrician</a></li>
					<li><a href="#">Painter</a></li>
					<li><a href="#">Capentry</a></li>
					<li><a href="#">Plumber</a></li>
					<li><a href="#">Gardening</a></li>
					<li><a href="#">Garbageman</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Education / Training</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="#">Cooking Lessons</a></li>
					<li><a href="#">Language Tutor</a></li>
					<li><a href="#">Craft Lessons</a></li>
					<li><a href="#">Gaming Lessons</a></li>
				</ul>
			</div>
		</div>
	</div>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>An online platform that connects clients with service providers of a broad range of needs for such brief but necessary tasks mostly in the informal sector.</p>
			<a href="browse-jobs.html" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="./help.html">Help & Support</a></li>
				<li><a href="./terms.html">Terms of Service</a></li>
				<li><a href="./policy.html">Privacy Policy</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="browse-jobs.html">Freelancers by Category</a></li>
				<li><a href="browse-jobs.html">Freelancers in Kigali</a></li>
			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Group 3. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

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
<script src="scripts/headroom.min.js"></script>






</body>
</html>