<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>3 Raglan Street</title>
	
	<link href="style.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script type="text/javascript">
	
		var currentslide = 0;
		var timer;
		var slides = new Array();
		slides[0] = "1.jpg";
		slides[1] = "2.jpg";
		slides[2] = "3.jpg";
		slides[3] = "4.jpg";
		slides[4] = "5.jpg";
	
		function slideBackground(inc) {
			inc = typeof inc !== 'undefined' ? inc : 1;
			//increment
			currentslide += inc;
			//limits
			if (currentslide > slides.length - 1)
				currentslide = 0;
			else if (currentslide < 0)
				currentslide = slides.length - 1;
				
			//slide
			$('#container .slider').fadeOut(50, function(){
				//$('#container .slider').css("background-image", "url(images/" + slides[currentslide] + ")");
				$('#container .slider').backstretch("images/" + slides[currentslide]);
				$('#container .slider').fadeIn(300);
			});
		}
		function manualSlide(inc) {
			clearInterval(timer);
			slideBackground(inc);
		}
			
		$(function() {
			//ie fix
			$('#container .slider').backstretch("images/" + slides[0]);
			//set timer
			timer = setInterval('slideBackground()', 7000);
			//preload images
			$(slides).each(function(){
				$('<img/>')[0].src = 'images/' + this;
			});
		});
	</script>

</head>

<body>
	<div class="footer-image"></div>
	<div id="header">
		<div class="logo"><img src="images/logo2.png" alt="3 Raglan St. Logo" title="3 Raglan St. Logo" /></div>
		
		<div class="middle">
			  <?php include 'form.php'; ?>
		</div>
		<div class="footer">
		  <div class="contents">
			  <h2 class="h2-suite"><strong>Display Suite</strong><hr></h2>
			  <p class="date">10AM - 12PM I SAT-SUN</p>
			  <p>3 Raglan St, St Kilda East</p>
			  <h2><hr class="hr-1px"></h2>
			  <p>James Cirelli | <strong>0401 570 180</strong></p>
			  <p>Brett Graham | <strong>0417 766 777</strong></p>
			  <p>Mark Bury | <strong>0450 096 137</strong></p>
			    <img src="images/steller-logo.jpg">
		  </div>
		</div>	
	</div>
	
	<div id="container">
		<div class="slider"></div>
		<div id="slider-prev" class="slider-button" onclick="manualSlide(-1); return false;">&nbsp;</div>
		<div id="slider-next" class="slider-button" onclick="manualSlide(1); return false;">&nbsp;</div>
	</div>

</body>
</html>