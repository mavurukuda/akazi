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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
						<li><a href="dashboard-messages.php">Messages</a></li>
						<!-- <li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li> -->
						<!-- <li><a href="dashboard-job-alerts.php">Skill Alerts</a></li> -->
						<?php if( $role =='Admin'){ echo "<li><a href='dashboard-manage-jobs.php'>Manage Registrations</a></li>";} ?>
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
					<h2>Messages</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Messages</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>



		<div class="row">
			<!-- Messages -->
			<div class="col-lg-12 col-md-12">

				<div class="messages-container margin-top-0">
					<div class="messages-headline">
						<h4>Inbox</h4>
<!-- 						<a href="#" class="message-action"><i class="fa fa-delete"></i> Delete Conversation</a> -->
					</div>

					<div class="messages-container-inner">

						<!-- Messages -->
						<div class="messages-inbox">
							<ul>
								<li class="active-message">
									<a href="">
										<div class="message-avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>

										<div class="message-by">
											<div class="message-by-headline">
											<?php 
												if(isset($_POST['chat'])) {
													$id 	   		 = $_POST['app_id'];  
													$occupation 	 = $_POST['title'];  
													$JOBID 	   		 = $_POST['JOBID']; 
													$receiver =  $id;
													$firstquery = "select * from applicants where app_id =$id";
													$sql = $conn->prepare($firstquery )or die(mysql_error());
													$sql->execute();
													while ($row = $sql->fetch()) {
													
														echo "<h5>".$row['username']."</h5>
														";
														echo "<marquee direction='right' height='100' width='200' style='color:green' >$occupation </marquee>";
														
													}
												}else{
											
													
													$sql = $conn->prepare($firstquery )or die(mysql_error());
													$sql->execute();
													while ($row = $sql->fetch()) {
													
														echo "<h5>".$row['username']."</h5>
														";
														echo "<marquee direction='right' height='100' width='200' style='color:green' >$occupation </marquee>";
												}
											}
											?>
												<!-- <div id="result"> </div> -->
											</div>
											
										</div>
									</a>
								</li>

							</ul>
						</div>
						<!-- Messages / End -->
						<!-- <div class='message-avatar'><img src='http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70' /></div> -->
						<!-- Message Content -->
					
						<div class="message-content">
										<?php
										// (sender = $app_id and receiver = $receiver and skill_id = $JOBID ) or (receiver = $app_id and sender = $receiver and skill_id = $JOBID )
										if(isset($_POST['chat'])) {
											$qstring = "SELECT * FROM `messages` WHERE  skill_id = $JOBID";
										$sql = $conn->prepare($qstring)or die(mysql_error());

										$sql->execute();
										while ($row = $sql->fetch()) {
											
											array_push($data, $row);
											
											//echo $qstring;
											if($app_id != $row['sender'] ){
												echo "
												<div align='left' class='message-bubble'>
													
													<div  style='color:purple' class='message-text'>
														<p >
															<ul><li><strong>".$row['sendername'].":</strong> ".$row['messageDescption']." </li>
																<li  style='color:black'>".$row['messageDate']." </li>
															</ul>
												</p></div>
												</div>";					
												}else{
													echo "
													<div align='right' class='message-bubble'>
														
														<div  style='color:green' class='message-text'>
															<p >
																<ul><li><strong>".$row['sendername'].":</strong> ".$row['messageDescption']." </li>
																	<li  style='color:black'>".$row['messageDate']." </li>
																</ul>
													</p></div>
													</div>";
												}
											}//echo json_encode($data);
											
										echo	"<div class='clearfix'></div>
											<div class='message-reply'>
											<form class='form-sample' method='POST' action=''>
												<textarea cols='40' name='messageDescption' id='messageDescption' rows='3' placeholder='our Message'></textarea>
												<input type='hidden'  class='form-control' name='sender' id='sender' value='  $app_id'  />
												<input type='hidden'  class='form-control' name='receiver' id='receiver' value=' $receiver'  />
												<input type='hidden'  class='form-control' name='JOBID' id='JOBID' value=' $JOBID'  />
												<input type='hidden'  class='form-control' name='qstring' id='qstring' value=' $qstring'  />
												<input type='hidden'  class='form-control' name='firstquery' id='firstquery' value=' $firstquery'  />
												<input type='hidden'  class='form-control' name='occupation' id='occupation' value=' $occupation'  />
												<button type='submit' class='button margin-top-15' name='savemessage' id=''>Send Message</button><br>
											</form>		
											</div>";
										}else{

											$sql = $conn->prepare($qstring)or die(mysql_error());
											$sql->execute();
											while ($row = $sql->fetch()) {
												if($app_id != $row['sender'] ){
													echo "
													<div align='left' class='message-bubble'>
														
														<div  style='color:purple' class='message-text'>
															<p >
																<ul><li><strong>".$row['sendername'].":</strong> ".$row['messageDescption']." </li>
																	<li  style='color:black'>".$row['messageDate']." </li>
																</ul>
													</p></div>
													</div>";					
													}else{
														echo "
														<div align='right' class='message-bubble'>
															
															<div  style='color:green' class='message-text'>
																<p >
																	<ul><li><strong>".$row['sendername'].":</strong> ".$row['messageDescption']." </li>
																		<li  style='color:black'>".$row['messageDate']." </li>
																	</ul>
														</p></div>
														</div>";
													}
												}
							
											echo	"<div class='clearfix'></div>
												<div class='message-reply'>
												<form class='form-sample' method='POST' action=''>
													<textarea cols='40' name='messageDescption' rows='3' placeholder='our Message'></textarea>
													<input type='hidden'  class='form-control' name='sender' id='person_id' value='  $app_id'  />
													<input type='hidden'  class='form-control' name='receiver' id='receiver' value=' $receiver'  />
													<input type='hidden'  class='form-control' name='JOBID' id='JOBID' value=' $JOBID'  />
													<input type='hidden'  class='form-control' name='qstring' id='qstring' value=' $qstring'  />
													<input type='hidden'  class='form-control' name='firstquery' id='firstquery' value=' $firstquery'  />
													<input type='hidden'  class='form-control' name='occupation' id='occupation' value=' $occupation'  />
													<button type='submit' class='button margin-top-15' name='savemessagesssss' id=''>Send Message</button><br>
													
															</form>
												</div>";
										}

							?>
							<?php 
								if(isset($_POST['savemessage'])) {
									$messageDescption 	   	 = $_POST['messageDescption'];
									$JOBIDD 	   	 = $_POST['JOBID'];
									$receiver 	   	 = $_POST['receiver'];
									$qstring 	   	 = $_POST['qstring'];
									$firstquery 	   	 = $_POST['firstquery'];
									$occupation 	   	 = $_POST['occupation'];
									$date 			 = date('Y-m-d H:i:s');
									$query = "INSERT into 
									messages(zen_id,messageDescption,messageDate,sender,receiver,skill_id,qstring,firstquery,occupation,sendername)
												VALUES('$user_zanid','$messageDescption','$date','$app_id','$receiver','$JOBIDD','$qstring','$firstquery','$occupation','$fname')"or 
												die(mysql_error());
									$conn->exec($query);
									echo "<script>window.open('dashboard-messages.php','_self')</script>";
									}

								if(isset($_POST['savemessagesssss'])) {
									$messageDescption 	   	 = $_POST['messageDescption'];
									$JOBIDD 	   	 = $_POST['JOBID'];
									$receiver 	   	 = $_POST['receiver'];
									$qstring 	   	 = $_POST['qstring'];
									$firstquery 	 = $_POST['firstquery'];
									$occupation 	 = $_POST['occupation'];
								
									$date 			 = date('Y-m-d H:i:s');
									$query = "INSERT into 
									messages(zen_id,messageDescption,messageDate,sender,receiver,skill_id,qstring,firstquery,occupation,sendername)
												VALUES('$user_zanid','$messageDescption','$date','$app_id',
												'$receiver','$JOBIDD','$qstring','$firstquery','$occupation','$fname')"or 
												die(mysql_error());
									$conn->exec($query);
									echo "<script>window.open('dashboard-messages.php','_self')</script>";
								}
							?>
										
							
							
							<!-- Reply Area -->
				
							
						</div>
						<!-- Message Content -->
						<script type="text/javascript">
				
						</script>
					
			
			
			

					</div>

				</div>

			</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Goup 3. All Rights Reserved.</div>
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