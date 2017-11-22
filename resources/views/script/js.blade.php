<!-- //footer end here -->   
	<!-- Kick off Filterizr -->
	<script src="{{ asset('assets/js/jquery.filterizr.js') }}"></script>  
	<script src="{{ asset('assets/js/controls.js') }}"></script> 
	<script type="text/javascript">
		$(function() {
			//Initialize filterizr with default options
			$('.filtr-container').filterizr();
		});
	</script>	
	<!-- swipe box js -->
	<script src="{{ asset('assets/js/jquery.swipebox.min.js') }} "></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script> 
	<!-- //swipe box js --> 	 
	<!-- start-smooth-scrolling -->
	<script src="{{ asset('assets/js/SmoothScroll.min.js') }} "></script> 
	<script type="text/javascript" src="{{ asset('assets/js/move-top.js') }} "></script>
	<script type="text/javascript" src="{{ asset('assets/js/easing.js') }} "></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/bootstrap.js') }} "></script>
    <!-- reveal object -->
    <script>
    	window.sr = ScrollReveal();
    	sr.reveal('.agile-logo', {
    		duration: 2000,
    		origin: 'top'
    	});
    	sr.reveal('.agileits-w3layouts-icons', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true
    	});
    	sr.reveal('.rslides', {
    		duration: 2000,
    		origin: 'bottom',
    		delay: 50,
    		distance: '200px'
    	});
    	sr.reveal('.w3l', {
    		duration: 2000,
    		origin: 'bottom',
    		delay: 100,
    		distance: '200px',
    		viewFactor: 0.2
    	});
    	sr.reveal('#about1', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#about2', {
    		duration: 2000,
    		origin: 'top',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#about3', {
    		duration: 2000,
    		origin: 'right',
    		viewFactor: 0.2,
    		mobile: true,
    		reset: true
    	});
    	sr.reveal('.agileits-title', {
    		duration: 1000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('#thnSD', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#SD', {
    		duration: 2000,
    		origin: 'right',
    		viewFactor: 0.2,
    		mobile: true,
    		reset: true
    	});
    	sr.reveal('#thnSMP', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#SMP', {
    		duration: 2000,
    		origin: 'right',
    		viewFactor: 0.2,
    		mobile: true,
    		reset: true
    	});
    	sr.reveal('#thnSMA', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#SMA', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.2,
    		reset: true
    	});
    	sr.reveal('#thnPT', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});
    	sr.reveal('#PT', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.2,
    		reset: true
    	});
    	sr.reveal('#skill-bar', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.5,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#skill', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.5,
    		reset: true
    	});
    	sr.reveal('#kursus', {
    		duration: 2000,
    		origin: 'bottom',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#project-left', {
    		duration: 2000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '200px'
    	});	
    	sr.reveal('#project-right', {
    		duration: 2000,
    		origin: 'right',
    		mobile: true,
    		viewFactor: 0.2,
    		reset: true
    	});	
    	sr.reveal('#list-port', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.1,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('#list-port', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.1,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('.contact-info', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '100px'
    	});	
    	sr.reveal('#socLeft', {
    		duration: 1000,
    		origin: 'left',
    		viewFactor: 0.2,
    		reset: true,
    		distance: '100px'
    	});
    	sr.reveal('#copyRight', {
    		duration: 1000,
    		origin: 'bottom',
    		viewFactor: 0.2,
    		delay: 100,
    		reset: true,
    		distance: '100px'
    	});		
    							
    </script>