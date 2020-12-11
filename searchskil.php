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
<?php include "vacancy/dbcon.php"?>
<div id="wrapper">




<!-- Header
================================================== -->
<header class="sticky-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
		<h1><a href="index.php"><img  src="images/logo2.png" alt="Akazi" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a id="current" href="index.php">Home</a>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-job.php">Browse Skills</a></li>
						<!-- <li><a href="browse-resumes.php">Browse Resumes</a></li>
						<li><a href="browse-categories.php">Browse Categories</a></li> -->
					</ul>
				</li>

				<li><a href="vacancy/">Add Skill </a>
				</li>

				<li><a href="#">Dashboard</a>
					<ul>
						<li><a href="vacancy/">Dashboard</a></li>
						<!-- <li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li> -->
						<!-- <li><a href="dashboard-job-alerts.php">Skill Alerts</a></li> -->
						<!-- <li><a href="dashboard-manage-jobs.php">Manage Skills</a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications</a></li> -->
						<li><a href="vacancy/">Add Skill</a></li>
					</ul>
				</li>

				<!-- <li><a href="contact.php">Contact</a></li> -->
			</ul>

			<?php 
			$fname = '';
											
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
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Banner
================================================== -->
<div id="indeex">
<div id="banner" class="with-transparent-header parallax background" style="background-image: url(images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
	<div class="container">
		<div class="sixteen columns">

			<div class="search-container">

				<!-- Form -->
			
				<form class='form-sample' method='POST' action=''>
						<input type="button" style= 'color:white' readonly class="ico-01" value="Find Skill"  name='title' placeholder="Find Skill" />
						
						<ul class="float-right"><br> <br> <br>
							<li>
							
							<a href="dashboard-add-job.php"> <input type="button" style= 'color:white' readonly class="ico-01" value="Click Here To Add A Skill"  name='title' placeholder="Find Skill" />
							</a></li>
						</ul><br><br>
					
				</form> <br>
				<!-- <form class='form-sample' method='POST' action=''> -->
						<input type="text" class="ico-01" name='title' v-model="title" placeholder="job title" value=""/>
						<input type="text" class="ico-02" name='location' v-model="location" placeholder="city, province or region" value=""/>
					<button  style='background-color:green' class="button centered" type='submit' v-on:click="seachtitleandlocation()"
					 name='firstsearch' id='firstsearch'><i class="fa fa-search"></i></button>
				<!-- </form>  -->

				<!-- Browse Jobs -->
			


			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Categories -->



<div class="container">

	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Skills</h3>
		
		<div class="listings-container">

		<!-- <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-chat' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
				  <path fill-rule='evenodd' d='M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z'/>
				</svg>  -->
		<?php
	
		if(isset($_POST['firstsearch'])){
			$location = $_POST['location'];
			$title = $_POST['title'];
				$sql = $conn->prepare("SELECT * FROM `tblskills` WHERE LOCATIONNAME LIKE '".$location."%' && OCCUPATIONTITLE LIKE '".$title."%'")or die(mysql_error());
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
						<li><i class='ln ln-icon-Money-2'></i>  <b>Rate/Hr :</b> ".$row['rateHr']."</li>
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
				
						  <form class='form-sample' method='POST' action='vacancy/register.php'>
						  <input type='hidden'  class='form-control' name='app_id' id='' value=' ".$row['app_id']."'  />
						  <input type='hidden'  class='form-control' name='title' id='' value=' ".$row['OCCUPATIONTITLE']."'  />
						  <input type='hidden'  class='form-control' name='JOBID' id='JOBID' value=' ".$row['JOBID']."'  />
						   <button style='background-color:green' class='button margin-top-15' type='submit'  name='chat' id='savechat'>Chat</button>
						</form>   
						</li>
					</ul>
				</div>
			</div> <br>";
									
	
				}
			
		}
	
		
		?>

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
							location : ''
							
                       
                        },
                        methods: {
                        

                            getAllLogSheets() {
                             
                                axios
                                        .get("http://localhost/Akazi/getskills.php")
                                        .then(res => {
                                            this.skills = res.data;
                                        })
                            },
							like(JOBID){
								console.log(".............."+JOBID);
								$.ajax({
								  type: "POST",
								  url: "http://localhost/Akazi/postlike.php",
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
							  }); this.getAllLogSheets();
								
							},
							seachtitleandlocation(){
								this.skills = []
								console.log(".............."+this.location );
								axios
                                        .get('http://localhost/Akazi/getskillsbysearch.php'
                                                , {
                                                    params: {
                                                        title: this.title,
                                                        location: this.location,
                                                    }
                                                })
                                        .then(res => {
                                            this.skills = res.data;
                                            
                                        })
								
							
							}
                         

                        },

                        mounted: function () {
							this.getAllLogSheets();
                        },

                    })
                </script>
			<!-- Listing -->
			<div id="result" style="overflow-y:scroll; height:300px; width: 605px;"></div>
			<script type="text/javascript">
			$(document).ready(function(){ //using send button
			displayResult();
	/* Send Message	*/	
		
		$('#savechanges').on('click', function(){
	
			
				$id = $('#JOBID').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
					
						id: $id,
					},
					success: function(){
						displayResult();
						//$('#msg').val(''); //clears the textarea after submit
					}
				});
				
		});
	/* END */
	});
	
	function displayResult(){
		$id = $('#JOBID').val();
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			async: false,
			data:{
				id: $JOBID,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
			}
		});
	}
</script>
		
		</div>  

		<form class='form-sample' method='POST' action=''>
					   <input type='hidden'  class='form-control' value='4' name='countrows' id='countrows'  />
					   <button  style='background-color:green' class="button centered" type='submit'
					 name='moreskills' id='moreskills'><i class="fa fa-plus-circle"></i>Show More Skills</button>
		</form> 

		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Sort by</h4>

			<!-- Select -->
			<select data-placeholder="Choose Category" class="chosen-select-no-single">
				<option selected="selected" value="recent">Newest</option>
				<option value="oldest">Oldest</option>
				<option value="expiry">Expiring Soon</option>
				<option value="ratehigh">Hourly Rate – Highest First</option>
				<option value="ratelow">Hourly Rate – Lowest First</option>
			</select>

		</div>

		<!-- Location -->
		<!-- <div class="widget">
			<h4>Location</h4>
			<form action="#" method="get">
				<input type="text" placeholder="State / Province" value=""/>
				<input type="text" placeholder="City" value=""/>

				<input type="text" class="miles" placeholder="kms" value=""/>
				<label for="zip-code" class="from">from</label>
				<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

				<button class="button">Filter</button>
			</form>
		</div> -->

		<!-- Job Type -->
		<div class="widget">
			<h4>Skill Type</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-1" type="checkbox" name="check" value="check-1" checked>
					<label for="check-1">Any Type</label>
				</li>
				<li>
					<input id="check-2" type="checkbox" name="check" value="check-2">
					<label for="check-2">Full-Time <span>(0)</span></label>
				</li>
				<li>
					<input id="check-3" type="checkbox" name="check" value="check-3">
					<label for="check-3">Part-Time <span>(0)</span></label>
				</li>
				<li>
					<input id="check-4" type="checkbox" name="check" value="check-4">
					<label for="check-4">Internship <span>(0)</span></label>
				</li>
				<li>
					<input id="check-5" type="checkbox" name="check" value="check-5">
					<label for="check-5">Freelance <span>(0)</span></label>
				</li>
			</ul>

		</div>

		<!-- Rate/Hr -->
		<!-- <div class="widget">
			<h4>Rate / Hr</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-6" type="checkbox" name="check" value="check-6" checked>
					<label for="check-6">Any Rate</label>
				</li>
				<li>
					<input id="check-7" type="checkbox" name="check" value="check-7">
					<label for="check-7">Rwf 0 - Rwf 25,000 <span>(0)</span></label>
				</li>
				<li>
					<input id="check-8" type="checkbox" name="check" value="check-8">
					<label for="check-8">Rwf 25,000 - Rwf 50,000 <span>(0)</span></label>
				</li>
				<li>
					<input id="check-9" type="checkbox" name="check" value="check-9">
					<label for="check-9">Rwf 50,000 - Rwf 100,000<span>(0)</span></label>
				</li>
				<li>
					<input id="check-10" type="checkbox" name="check" value="check-10">
					<label for="check-10">Rwf 100,000 - Rwf 200,000<span>(0)</span></label>
				</li>
				<li>
					<input id="check-11" type="checkbox" name="check" value="check-11">
					<label for="check-11">Rwf 200,000<span>(0)</span></label>
				</li>
			</ul>

		</div> -->



	</div>
	<!-- Widgets / End -->
</div>


<section class="fullwidth-testimonial margin-top-15">

	<!-- Info Section -->
	<div class="container">
		<div class="sixteen columns">
			<h3 class="headline centered">
				What Our Users Say
				<span class="margin-top-25">We collect reviews from our users so you can get an honest opinion of what an experience with our platform are really like!</span>
			</h3>
		</div>
	</div>
	<!-- Info Section / End -->

	<!-- Testimonials Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">"Akazi has tapped the trend towards freelance labor and gig-based opportunities by creating a marketplace to connect freelancers with employers who have projects to offer."</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-03.png" alt="">
					<h4>Daniel Kayijuka<span>HR Specialist</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">"Freelance workers like myself can search for projects based on categories like web and software development, data science and analytics, writing, marketing, design/creative, customer service , and accounting/consulting."</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-02.png" alt="">
					<h4>Nathan Kuchena<span>Jobseeker</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">"Akazi uses innovative technology to learn about my job preferences as you apply for jobs from their extensive inventory of openings. I then receive notices of jobs that meet my preferences."</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-01.png" alt="">
					<h4>Paul Leroi Hie<span>Jobseeker</span></h4>
				</div>
			</div>

		</div>
	</div>
	<!-- Testimonials Carousel / End -->

</section>


<!-- Flip banner -->
<a href="browse-jobs.php" class="flip-banner margin-bottom-55" data-background="images/all-categories-photo.jpg" data-color="#26ae61" data-color-opacity="0.93">
	<div class="flip-banner-content">
		<h2 class="flip-visible">Step inside and see for yourself!</h2>
		<h2 class="flip-hidden">Get Started <i class="fa fa-angle-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Ad Center</h3>
	</div>

	<div class="one-third column">



	</div>


	<div class="one-third column">

		<!-- Post #2 -->


	</div>

	<div class="one-third column">

		<!-- Post #3 -->

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
					<li><a class="facebook" href="https://business.facebook.com/home/accounts?business_id=582241712422135"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="https://twitter.com/Akazi250"><i class="icon-twitter"></i></a></li>
					<li><a class="linkedin" href="https://www.linkedin.com/company/53447458/admin/"><i class="icon-linkedin"></i></a></li>
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
