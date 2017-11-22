<!-- banner start here -->
	<div id="home" class="banner">
		<div class="agileinfo-main">
			<div class="slider">
				<script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 1
					  $("#slider1").responsiveSlides({
						 auto: true,
						 nav: true,
						 speed: 500,
						 namespace: "callbacks",
					  });
					});
				</script>
				<ul class="rslides" id="slider1">
					<li> 
						<div class="banner-w3lstext">
							<h3>Quick Learner, Hardworker, Honest, </h3>
						</div>	
					</li>
					<li> 
						<div class="banner-w3lstext">
							<h3>Discipline and Motivated Individual. </h3>
						</div>	
					</li>
					<li>	
						<div class="banner-w3lstext">
							<h3>Always want to learn something new. </h3>
						</div>	
					</li>
					<li>	
						<div class="banner-w3lstext">
							<h3>Also can work individually or group. </h3>
						</div>	
					</li>
				</ul>
			</div>	
			<div class="agileinfo-header">
				<div class="container">
					<div class="agile-logo">
						<h2><a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/> Dicka's</a></h2>
					</div>
					<div class="agileits-w3layouts-icons">
						<div class="social-icon w3-agile">
							<a href="www.twitter.com/dickait" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="www.facebook.com/dickaariptianr" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="www.steamcommunity.com/id/dickait" class="social-button dribbble"><i class="fa fa-steam"></i></a> 
						</div> 
					</div>
					<div class="clearfix"> </div>
				</div>	    
			</div>
			<!-- navigation start here -->
			<div class="top-nav">
				<a href="#home" class="scroll"><span class="menu">Menu</span></a>	
				<ul class="w3l" id="menu">
					<li><a class="active" href="#home"><span>Home</span></a></li>
					<li><a href="#about" class="scroll"><span>Profile</span></a></li>
					<li><a href="#news" class="scroll"><span>Education</span></a></li> 
					<li><a href="#skills" class="scroll"><span>Skills</span></a></li>
					<li><a href="#courses" class="scroll"><span>Courses</span></a></li>
					<li><a href="#project" class="scroll"><span>Project Exp.</span></a></li>
					<li><a href="#portfolio" class="scroll"><span>Portfolio</span></a></li>
					<li><a href="comingsoon/index.html"><span>Blog</span></a></li>
					<li><a href="#built" class="scroll"><span>Built</span></a></li>
					<li><a href="#contact" class="scroll"><span>Contact</span></a></li>
				</ul>
				
				
				<!-- script-for-menu -->
				<script>
				   $( "span.menu" ).click(function() {
					 $( "ul.w3l" ).slideToggle( 300, function() { 
					 // Animation complete.
					  });
					 });
				</script>
				<!-- //script-for-menu -->
			</div><!-- //navigation end here -->	
		</div>
	</div> 
	<!-- //banner end here -->
	