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

<script type="text/javascript" src="scripts/axios.min.js"></script>    
    <script type="text/javascript" src="scripts/vue.min.js"></script>



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
					</ul>
				</li>

				<li><a href="#">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
						<li><a href="dashboard-my-profile.php">My Profile</a></li>
					</ul>
				</li>

				
			</ul>


			<?php 
											
				if($fname != ''){
					echo "	<ul class='float-right'>
						<li><a style='color:green' href=''>  $fname</a></li>
						<li><a href='logout.php'><i class='fa fa-user'></i> Sign Out</a></li>
					</ul>";
				}else{
					echo "	<ul class='float-right'>
					<li><a href='vacancy/register.php'><i class='fa fa-user'></i> Sign In</a></li>
					<li><a href='vacancy/'><i class='fa fa-lock'></i> Log In</a></li>
				</ul>";
				}
				
												
			?>

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
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>Akazi</span>
			<h2>We are here to serve you! </h2>
		</div>

		<div class="six columns">
			<a href="dashboard-add-job.php" class="button">Post a Skill, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">

		<div class="listings-container">
			
			<!-- Listing -->
<div id="indeex">
			<ul >
	<li v-for="skill in skills">
	<div  class='listing full-time'>
				<div class='listing-logo'>
					<img src='images/job-list-logo-01.png' alt=''>
				</div>
				<div class='listing-title'>
					<h4>{{skill.OCCUPATIONTITLE}} <span class='listing-type'>{{skill.OCCUPATIONTYPE}}</span></h4>
					<ul class='listing-icons'>
						<li><i class='ln ln-icon-Management'></i> <b>Location :</b>{{skill.LOCATIONNAME}} </li>
						<li><i class='ln ln-icon-Map2'></i>  <b>Availability :</b>from {{skill.STARTDATE}} to {{skill.ENDDATE}} </li>
						<li><i class='ln ln-icon-Money-2'></i>  <b>Rate :</b> {{skill.rateHr}} </li>
						<li><div > 
						<form class='form-sample' method='POST' action='browse-jobs.php'>
							<input type='hidden'  class='form-control' name='JOBID' id='person_id' v-model='skill.JOBID'  />
							<button  class='listing-date new' type='submit'  name='showdetails' id='savechanges'>Show more details</button>
						</form>   
					</div></li><br>
						<li style='color:blue'>Like  <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-hand-thumbs-up' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
							<path fill-rule='evenodd' d='M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0
							.121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z'/>
							</svg> {{skill.liked}}
						</li>
						<li style='color:red'>
						
						
								<input type='hidden'  class='form-control' name='JOBID' id='JOBIDlike' v-model='skill.JOBID'  />
								<button style='background-color:blue' class='button margin-top-15' type='submit' v-on:click="like(skill.JOBID)"  name='like' id='savechanges'>Like</button>
						
						</li>
					<li style='color:green'> 
				
						<form class='form-sample' method='POST' action='dashboard-messages.php'>
						<input type='hidden'  class='form-control' name='app_id' id='person_id' v-model='skill.app_id'  />
						<input type='hidden'  class='form-control' name='title' id='' v-model='skill.OCCUPATIONTITLE'  />
						<input type='hidden'  class='form-control' name='JOBID' id='JOBID' v-model='skill.JOBID'  />
						<button style='background-color:green' class='button margin-top-15' type='submit'  name='chat' id='savechat'>Chat</button>
						</form>   
						</li>
					</ul>
				</div>
			</div> <br>
	</li>
	</ul>
	<input type='hidden'  class='form-control' value='4' name='countrows' id='countrows'  />
	<span v-if="skillength">
					<button  style='background-color:green' class="button centered" type='submit' v-on:click="allskills()"
					 name='moreskills > 4' id='moreskills'><i class="fa fa-plus-circle"></i>Show More Skills</button>
				</span>
				<span v-if="skillength < 4">
					<button  style='background-color:green' class="button centered" type='submit' v-on:click="back()"
					 name='moreskills' id='moreskills'><i class="fa fa-plus-circle"></i>Back</button>
				</span>
	</div>

<script type="text/javascript">
                    var indeex = new Vue({
                        el: '#indeex',

                        data: {

                            axios,
                            hello :"helo greatman",
							skills : [],
							responseMsg :'',
							title :'',
							location : '',
							more : '',
							skillength : 0
                        },
                        methods: {
                        

                            getAllLogSheets() {
                             
                                axios
                                        .get("getskills.php")
                                        .then(res => {
                                            this.skills = res.data;
											this.skillength = this.skills.length
                                        })
                            },
							allskills(){
								this.more = "all"
								axios
                                        .get("getallskills.php")
                                        .then(res => {
                                            this.skills = res.data;
											this.skillength = this.skills.length
                                        })
							},
							like(JOBID){
								console.log(".............."+JOBID);
								$.ajax({
								  type: "POST",
								  url: "postlike.php",
								  dataType: "json",
								  data: {JOBID: JOBID},
								  success : function(data){
									  if (data.code == "200"){
										  alert("Success: " +data.msg);
										  this.getAllLogSheets();
										  //document.location.reload(true)
									  } else {
										  $(".display-error").html("<ul>"+data.msg+"</ul>");
										  $(".display-error").css("display","block");
									  }
								  }
							  });
							  if(this.more == 'all'){
								this.allskills();
							  }
							  if(this.more == ''){
								this.getAllLogSheets();
							  }
							   
								
							},
							search(){
					
							$.getJSON("getskillsbysearch.php", {
								title: this.title,location: this.location,
									ajax: 'true'
								}, function (data) {
									console.log(".............."+data.length);
								});
								
							},
					
                         

                        },

                        mounted: function () {
							this.getAllLogSheets();
                        },

                    })
                </script>



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