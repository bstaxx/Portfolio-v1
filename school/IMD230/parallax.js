//JAVASCRIPT

$(document).ready( function() {
	
	var $window = $(window),
		$doc 	= $(document),
		$nav	= $('#nav'),
		$nav2	= $('#nav_wrapper'),
		$nav3	= $('.navWrapper'),
		$text	= $('#text')
		$stats	= $('#stats'),
		$back 	= $('#back'),
		$mid 	= $('#mid'),
		$fore 	= $('#fore'),
		speed	= 20,
		xPos	= 0;
		
	
	$window.scroll( function() {
		$back.css('background-position', -($doc.scrollLeft() * .2) + 'px 0');
		$mid.css('background-position', -($doc.scrollLeft() * .4) + 'px 0');
		$fore.css('background-position', -($doc.scrollLeft() * .6) + 'px 0');
	});
		
	//$doc.mousemove(	function(evt) {speed = 10;});
	//$doc.mouseout( function(evt) {speed	= 0;});
	
	setInterval( function() {
		xPos += speed;
		$back.css('background-position', -(xPos * .025) + 'px 0');
		$mid.css('background-position', -(xPos * .06) + 'px 0');
		$fore.css('background-position', -(xPos * .5) + 'px 0');
	},30);
	
	
	
	
	
	
	var timer;
	var delay = 2000;
	var fade = 1000;
	var hover = false;
	
	setTimeout(function() {
		if (hover == false) {
			timer = setTimeout(function() {$nav3.fadeOut(fade)}, delay);	
		};
	});
	
	$nav3.mouseover(function() {hover = true; console.log(hover)});
	$nav3.mouseleave(function() {hover = false; console.log(hover)});
	
	$doc.mousemove(function() { 	//	When 	the mouse moves on the document,	
		if (timer) {				//	AND 	if the setTimeout value is not 0,
			clearTimeout(timer);	//	THEN	delete the setTimeout value,
			timer = 0;				//	AND		set value to 0;
		};
		
		$nav3.fadeIn();
		if (hover == false) {
			timer = setTimeout(function() {$nav3.fadeOut(fade)}, delay);	
		};
	
		
	});
		
	
		
	function animatePlane() {
		$image.stop(true, false)
			.animate({left: "-56.6%"}, 700,"easeInSine")
			.animate({top: "-150%"}, 0)
			.animate({left: "100%"}, 0)
			.animate({top: "5%"}, 0)
			.animate({left: "12.5%"},700,"easeOutSine");
			//.animate({left: "-200%", top: "-50%"}, 1500)
			//.animate({bottom: "-500px"}, 100)
			//.animate({left: "120%"}, 100)
			//.animate({left: "48%", bottom: "225px"}, 1500)
			//.animate({left: "49%", bottom: "200px"}, 500)
			//.animate({left: "50%", bottom: "250px"}, 800)
			//.animate({left: "15%", top: "5%"}, 900);
			
		//$text.stop(true, false).delay(0).fadeOut(700).delay(500).fadeIn(700);
		//$stats.stop(true, false).delay(0).fadeOut(700).delay(500).fadeIn(700);
		
	};
	
	function animatePlane2() {
		$image.stop(true, false)
			.animate({left: "100%"}, 700,"easeInSine")
			.animate({top: "-150%"}, 0)
			.animate({left: "-56.6%"}, 0)
			.animate({top: "5%"}, 0)
			.animate({left: "15%"},700,"easeOutSine");
	};

	



	
	var $next = $('#next_button');
	var $back2 = $('#back_button');
	var sindex = 0;
	var $image = $('#image');	
	var imageIndex = new Array(	/*########## IMAGES ARRAY ##########*/
		"url(modelb_photo.jpg)", 
		"url(modeld_photo.jpg)",
		"url(jenny_photo.jpg)", 
		"url(cub_photo.jpg)",
		"url(taylor_photo.jpg)"/*,
		"url(college.png)"*/
	);
	
	var textIndex = new Array(	/*########## TEXT ARRAY ##########*/
		"<h1>Wright Model B <span class='index'>(1 of 5)</span></h1><p>The original 1910 Wright Model B was constructed of West Virginia white spruce wood coated with aluminum powder, which gave the wood a deceptively metal-looking finish. The dual rudder and elevator were located in the tail section of the aircraft, and the elevator was not hinged, but warped. The airplane was equipped with dual control. The pilot operated the elevator control in the left seat with his left hand while with his right hand he operated the rudder and wing-warping control, located between the two pilots. This arrangement created a problem: the pilot in the right-hand seat was forced to operate the rudder and wing-warping control with his left hand and the elevator control with his right hand. This resulted in what was referred to as right- and left-seat pilots. This problem was corrected in 1912 with the installation of an additional rudder/wing-warping control lever.<br/><br/>The Wright B aeroplane served for two years at our nation's first military aviation school at College Park and was used for training and experimental flights. </p>",
		'<h1>Curtiss Model D <span class="index">(2 of 5)</span></h1><p>The Model D was a biplane fitted with a wheeled, tricycle undercarriage. The construction was primarily of spruce, with ash used in parts of the engine bearers and undercarriage beams, with doped linen stretch over it. The outrigger beams are made of bamboo. Prevented by patents from using the Wright brothers&#39; wing warping technique to provide lateral control, Curtiss used ailerons instead. Model Ds were constructed with a pusher configuration, where the propeller is behind the pilot. Because of this configuration, they were often referred to as a &quot;Curtiss pusher&quot;. Early examples were built in a canard configuration, with elevators mounted on struts at the front of the aircraft in addition to a horizontal stabilizer at the rear. Later versions dispensed with the front elevator and are often referred to as &quot;headless&quot; pushers.<br/><br/>The Curtiss Model D was used by the United States Army at Ft. Sam Houston before being moved to the Army Aviation School at College Park. The aircraft on display portrays the plane used at College Park in 1911.</p>',
		'<h1>Curtiss JN-4D "Jenny" Military Tractor <span class="index">(3 of 5)</span></h1><p>The "Jennys" were the workhorses of the U.S. Air Mail Service, although the machines flown here at College Park were the JN-4H model, as opposed to the earlier JN-4D on display in the museum. This aircraft was built in 1916, but its history before its discovery in pieces near San Antonio, Texas remains unclear. The U.S. Army gathered up the remaining bits and the Virginia Aviation and Machine Company, Ltd restored the biplane in the 1990s. A monumental task, this meticulous restoration took over 12,000 man-hours to complete and retained up to 60% of original Jenny parts. Some of the parts are original Curtiss Jenny parts, but not original to this particular aircraft. Parts that had to be fabricated were made in strict accord with original Curtiss factory drawings.<br/><br/>On loan to the College Park Aviation Museum from the U.S. Army Center for Military History. IL1998.4</p>',
		'<h1>Taylor J-2 "Cub" <span class="index">(4 of 5)</span></h1><p>The "Cub" was a common sight at general aviation airports throughout the 1930s, 40s and 50s, and George Brinckerhoff used the planes for flight instruction here at College Park Airport for 30 years. It was an enormously popular civilian aircraft; more pilots learned to fly in the Cub than in any other airplane. The aircraft in the museum&rsquo;s main gallery was manufactured by the Taylor Aircraft Company, which was taken over by William Piper shortly after the introduction of the Cub. The Piper J-3 was substantially the same as the Taylor J-2 and continued to be nicknamed the "Cub."<br/><br/>NC16769 (serial no. 771) is on loan to the College Park Aviation Museum from Tom Hillier of Escalon, California. </p>',
		'<h1>Taylorcraft BL-65 <span class="index">(5 of 5)</span></h1><p>A side-by-side seating, high-wing monoplane, the Taylorcraft has been retrofitted by our restoration shop to become the museum&#39;s "Imagination Plane." Visitors to the museum are encouraged to touch, explore, and sit in the cockpit of the blue 1939 aircraft. Aspiring pilots can operate the controls to move the elevator, rudder and ailerons. One wing has been left in various stages of completion, to illustrate the process of covering a wing with fabric.<br/><br/> N23624 (serial no. 1349) was donated to the College Park Aviation Museum by Francis A. Fine in 1997. </p>'/*,
		'<h1>Credits</h1><p><br/>"College Park Aviation Museum Home." College Park Aviation Museum Home. N.p., n.d.<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web. 23 Mar. 2013.</p>'*/
	);
	
	var statsIndex = new Array(
		'<h1>STATS</h1><p>YEAR:&nbsp;&nbsp;<hh>"1910"</hh><br/>EMPTY WEIGHT:&nbsp;&nbsp;<hh>"950 lbs"</hh><br/>WINGSPAN:&nbsp;&nbsp;<hh>"38 feet, 6 inches"</hh><br/>TAKE-OFF SPEED:&nbsp;&nbsp;<hh>"27 mph"</hh><br/>CRUISING SPEED:&nbsp;&nbsp;<hh>"40 mph"</hh><br/>'/*ENGINE:&nbsp;&nbsp;<hh>"30-35 horsepower 4-cylinder water-cooled Wright engine"</hh><br/>PROPELLERS:&nbsp;&nbsp;<hh>"Twin counter-rotating 8 feet, inch propellars (428 rpm)"</hh></p>'*/,
		'<h1>STATS</h1><p>YEAR:&nbsp;&nbsp;<hh>"1911"</hh><br/>EMPTY WEIGHT:&nbsp;&nbsp;<hh>"700 lbs"</hh><br/>WINGSPAN:&nbsp;&nbsp;<hh>"38 feet, 3 inches"</hh><br/>MAXIMUM SPEED:&nbsp;&nbsp;<hh>"50 mph"</hh><br/>ENGINE:&nbsp;&nbsp;<hh>"1 40 hp Curtiss E-4 engine"</hh><br/></p>',
		'<h1>STATS</h1><p>YEAR:&nbsp;&nbsp;<hh>"1916"</hh><br/>EMPTY WEIGHT:&nbsp;&nbsp;<hh>"1430 lbs"</hh><br/>WINGSPAN:&nbsp;&nbsp;<hh>"43 feet, 7-3/8 inches"</hh><br/>MINIMUM SPEED:&nbsp;&nbsp;<hh>"45 mph"</hh><br/>MAXIMUM SPEED:&nbsp;&nbsp;<hh>"75 mph"</hh><br/>ENGINE:&nbsp;&nbsp;<hh>"Model OX-5, Vee, Four cycle, 8 liquid cooled cylinders"</hh><br/>PAYLOAD:&nbsp;&nbsp;<hh>"490 lbs"</hh></p>',
		'<h1>STATS</h1><p>YEAR:&nbsp;&nbsp;<hh>"1936"</hh><br/>EMPTY WEIGHT:&nbsp;&nbsp;<hh>"563 lbs"</hh><br/>WINGSPAN:&nbsp;&nbsp;<hh>"35 feet, 2 inches"</hh><br/>MAXIMUM SPEED:&nbsp;&nbsp;<hh>"87 mph"</hh><br/>ENGINE:&nbsp;&nbsp;<hh>"40 horsepower Continental A-40"</hh><br/>RANGE:&nbsp;&nbsp;<hh>"200 miles"</hh></p>',
		'<h1>STATS</h1><p>YEAR:&nbsp;&nbsp;<hh>"1939"</hh><br/>EMPTY WEIGHT:&nbsp;&nbsp;<hh>"640 lbs"</hh><br/>WINGSPAN:&nbsp;&nbsp;<hh>"36 feet, 0 inches"</hh><br/>MAXIMUM SPEED:&nbsp;&nbsp;<hh>"102 mph"</hh><br/>ENGINE:&nbsp;&nbsp;<hh>"65 hp Lycoming O-145"</hh><br/>RANGE&nbsp;&nbsp;<hh>"250 miles"</hh></p>'/*,
		'<h1>AUTHOR</h1><p>NAME:&nbsp;&nbsp;<hh>"Brandon Anthony"</hh><br/>EMAIL:&nbsp;&nbsp;<hh>"BGAgolden15@aol.com"</hh><br/>Phone:&nbsp;&nbsp;<hh>"(202) 701-7351"</hh><br/></p>'*/
	);
	
	var length = imageIndex.length - 1;
	var aniTime = 700;
	var pic = imageIndex[sindex];
	var textbox = textIndex[sindex];
	var statbox = statsIndex[sindex];
	
	$image.css('background-image', pic);	//LOADS FIRST IMAGE
	$text.html(textbox);					//LOADS FIRST TEXT
	$stats.html(statbox);
	console.log("sindex:  " + sindex);		//DISPLAYS INDEX VALUE
	
	
	
	$next.click( function() {	/*########## NEXT BUTTON FUCNTION ##########*/
		$.each(imageIndex, function(index, value) {	
			
			if (sindex >= length) {
				var pic = imageIndex[0];
				var textbox = textIndex[0];
				var statbox = statsIndex[0];
			}
			
			else {
				var pic = imageIndex[sindex + 1];
				var textbox = textIndex[sindex + 1];
				var statbox = statsIndex[sindex + 1];
			};
			
			if ($image.is(':not(:animated)')) {	
				sindex++;
				if (sindex > length ) {sindex = 0};
				setTimeout(function() {$image.css('background-image', pic)}, aniTime);
				setTimeout(function() {$text.html(textbox)}, aniTime);
				setTimeout(function() {$stats.html(statbox)}, aniTime);
				animatePlane();
				console.log("sindex:  " + sindex);
			};
		});
	});
	

	
	$back2.click( function() {	/*########## BACK BUTTON FUNCTION ##########*/
		$.each(imageIndex, function(index, value) {	
			
			if (sindex <= 0) {
				var pic2 = imageIndex[length];
				var textbox = textIndex[length];
				var statbox = statsIndex[length];
			}
			
			else {
				var pic2 = imageIndex[sindex - 1];
				var textbox = textIndex[sindex - 1];
				var statbox = statsIndex[sindex - 1];
			};
			
			if ($image.is(':not(:animated)')) {	
				sindex--;
				if (sindex < 0) {sindex = length};
				setTimeout(function() {$image.css('background-image', pic2)}, aniTime);
				setTimeout(function() {$text.html(textbox)}, aniTime);
				setTimeout(function() {$stats.html(statbox)}, aniTime);
				animatePlane2();
				console.log("sindex:  " + sindex);
			};
		});
	});
});




