
	<!--link rel="stylesheet" type="text/css" href="stylesheet.css"-->
	
	<!-- Columnal Style Sheets ----------------------------------------------------------------------------------->
	<link rel="stylesheet" href="columnal/columnal.css" type="text/css" media="screen" >
	<link rel="stylesheet" href="columnal/build.css" type="text/css" media="screen" >
	<link rel="stylesheet" href="columnal/custom.css" type="text/css" media="screen" >
	
	<!-- Nivo Slider Files --------------------------------------------------------------------------------------->
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" >
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" >
	<link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" >
	<link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" >
	<link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" >
	<script src="nivo-slider/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider({
				effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
				slices: 25,                     // For slice animations
				boxCols: 8,                     // For box animations
				boxRows: 4,                     // For box animations
				animSpeed: 500,                 // Slide transition speed
				pauseTime: 5000,                // How long each slide will show
				startSlide: 0,                  // Set starting Slide (0 index)
				directionNav: true,             // Next & Prev navigation
				controlNav: true,               // 1,2,3... navigation
				controlNavThumbs: false,        // Use thumbnails for Control Nav
				pauseOnHover: true,             // Stop animation while hovering
				manualAdvance: false,           // Force manual transitions
				prevText: 'Prev',               // Prev directionNav text
				nextText: 'Next',               // Next directionNav text
				randomStart: false,             // Start on a random slide
				beforeChange: function(){},     // Triggers before a slide transition
				afterChange: function(){},      // Triggers after a slide transition
				slideshowEnd: function(){},     // Triggers after all slides have been shown
				lastSlide: function(){},        // Triggers when last slide is shown
				afterLoad: function(){}         // Triggers when slider has loaded
			});
		});
		
		// SESLECTS THE CURRENT TAB
		$(document).ready(function() {
			var title = document.title;
			switch (title) {
				case "AAMM":
				  document.getElementById("home").className += " selected";
				  break;
				case "Exhibits":
				  document.getElementById("exhibits").className += " selected";
				  break;
				case "Visit AAMM":
				  document.getElementById("visit").className += " selected";
				  break;
				case "About AAMM":
				  document.getElementById("about").className += " selected";
				  break;
				case "Contact":
				  document.getElementById("contact").className += " selected";
				  break;
			}
		})
		
	</script>

</head>

<body>
<div id="wrapper">	
	
	<section id="header" class="container padding_top_15">
		<div class="row">
			<div class="col_6">
				<img src="images/logoColor.png" alt="African Art Museam of Maryland Logo" style="width:100%" >
			</div>
			<div class="col_4 pre_2 last" style="">
				<a href="donate.php"><div id="donate" class="actionBtn col_2">DONATE</div></a>
				<a href="join.php"><div id="join" class="actionBtn col_2 last">JOIN</div></a>
			</div>
		</div>
		
		<nav>
			<ul class="row margin_top_15">
				<a id="contact" href="contact.php"><li>Contact</li></a>
				<a id="visit" href="visit.php"><li>Visit</li></a>
				<a id="about" href="about.php"><li>About</li></a>
				<a id="home" href="index.php"><li>Home</li></a>
			</ul>
		</nav>
	
	</section>