/*********************************************************************************

							imageCarousel.js
							Author: Brandon G Anthony
				
*********************************************************************************/


window.onload = function() {
	var nextButton = $( '#next' ),
		prevButton = $( '#prev' ),
		body = $( 'body' ),
		carouselContainer = $( '#carouselContainer' ),
		imgContainers = $( '.imgContainer' ),
		imgContainer1 = $( '#imgContainer1' ),
		imgContainer2 = $( '#imgContainer2' ),
		imgContainer3 = $( '#imgContainer3' ),
		buttons = $( '.button' ),
		pauseButton = $( '#pauseButton' ),
		pause = false,
		interfaces = $( '.interface' ),
		scrollbarContainer = $( '#scrollbarContainer' ),
		scrollbar = $( '#scrollbar' ),
		scrollbarIndex = $( '#scrollbarIndex' ),
		cursor = $( '#cursor' ),
		counter = $( '.counter' ),
		mainCounter = $( '#mainCounter' ),
		images = $( '#images li' ),
		numImages = images.length,
		maxIndex = numImages - 1,
		navTimerDelay = 2500,
		fastforwardDelay = 500,
		fadeDelay = 2000,
		speedX2 = 750,
		speedX4 = 530,
		index = 0,
		navTimer = setTimeout( nextAuto, navTimerDelay ),
		fadeTimer = setTimeout( fadeout, fadeDelay ),
		fastforwardTimer,
		fastforwardTimer2,
		prevFastTimer;
	
	window.requestAnimationFrame =	window.requestAnimationFrame || 
									window.mozRequestAnimationFrame ||
									window.webkitRequestAnimationFrame || 
									window.msRequestAnimationFrame;
	mousedownOn();
	mouseupOn();
	counter.text( (index + 1) + " of " + numImages);
	imgContainer1.attr( 'src', images.eq( rotateIndex(index - 1) ).text() );
	imgContainer2.attr( 'src', images.eq( rotateIndex(index) ).text() );
	imgContainer3.attr( 'src', images.eq( rotateIndex(index + 1) ).text() );
	imgContainer1.on( '-webkit-transition', mousedownOn );
	imgContainer1.on( 'oTransitionEnd', mousedownOn );
	imgContainer1.on( 'transitionend', mousedownOn );
	pauseButton.on( 'click', pauseCarousel );
	carouselContainer.on( 'mousemove',
		function () {
			interfaces.removeClass( 'opacity0' );
			clearTimeout( fadeTimer );
			fadeTimer = setTimeout( fadeout, fadeDelay );
		}
	)
	interfaces.hover( function () { interfaces.addClass( 'hover' ) }, function () { interfaces.removeClass( 'hover' ) } );
	scrollbar.on( 'mousedown', scrollFunction );
	requestAnimationFrame( scroll );
	
	
	function mousedown(event) {
		var button = event.data.button;
		clearTimeout( navTimer );
		mousedownOff();
		imageSwitch( button );
		buttons.on( 'mouseout', mouseup );
		fastforward( button );
		if ( button == 'nextButton' ) { nextButton.css( 'background', 'red' ) }
		else if ( button == 'prevButton' ) { prevButton.css( 'background', 'red' ) }
	}
	
	function mouseup() {
		clearTimeout( fastforwardTimer );
		clearTimeout( fastforwardTimer2 );
		clearTimeout( navTimer );
		buttons.off( 'mouseout' );
		buttons.removeAttr( 'style' );
		navTimer = setTimeout( nextAuto, navTimerDelay );
	}
	
	function nextAuto() {
		if ( pause == false ) {
			nextImage();
			navTimer = setTimeout( nextAuto, navTimerDelay );
		}
	}
	
	function nextImage() {
		mousedownOff();
		index = rotateIndex(index + 1);
		if ( imgContainer1.hasClass( 'previousImage' ) ) {
			imgContainer1.removeClass( 'previousImage' ).addClass( 'nextImage' ).css( 'z-index', 1 ).attr( 'src', images.eq( rotateIndex(index + 1) ).text() );
			imgContainer2.removeClass( 'currentImage' ).addClass( 'previousImage' ).css( 'z-index', 2 );
			imgContainer3.removeClass( 'nextImage' ).addClass( 'currentImage' ).css( 'z-index', 3 );
		} else if ( imgContainer1.hasClass( 'currentImage' ) ) {
			imgContainer3.removeClass( 'previousImage' ).addClass( 'nextImage' ).css( 'z-index', 1 ).attr( 'src', images.eq( rotateIndex(index + 1) ).text() );
			imgContainer1.removeClass( 'currentImage' ).addClass( 'previousImage' ).css( 'z-index', 2 );
			imgContainer2.removeClass( 'nextImage' ).addClass( 'currentImage' ).css( 'z-index', 3 );
		} else if ( imgContainer1.hasClass( 'nextImage' ) ) {
			imgContainer2.removeClass( 'previousImage' ).addClass( 'nextImage' ).css( 'z-index', 1 ).attr( 'src', images.eq( rotateIndex(index + 1) ).text() );
			imgContainer3.removeClass( 'currentImage' ).addClass( 'previousImage' ).css( 'z-index', 2 );
			imgContainer1.removeClass( 'nextImage' ).addClass( 'currentImage' ).css( 'z-index', 3 );
		}
	}
	
	function prevImage() {
		mousedownOff();
		index = rotateIndex(index - 1);
		if ( imgContainer1.hasClass( 'previousImage' ) ) {
			imgContainer1.removeClass( 'previousImage' ).addClass( 'currentImage' ).css( 'z-index', 3 );
			imgContainer2.removeClass( 'currentImage' ).addClass( 'nextImage' ).css( 'z-index', 2 );
			imgContainer3.removeClass( 'nextImage' ).addClass( 'previousImage' ).css( 'z-index', 1 ).attr( 'src', images.eq( rotateIndex(index - 1) ).text() );
		} else if ( imgContainer1.hasClass( 'currentImage' ) ) {
			imgContainer3.removeClass( 'previousImage' ).addClass( 'currentImage' ).css( 'z-index', 3 );
			imgContainer1.removeClass( 'currentImage' ).addClass( 'nextImage' ).css( 'z-index', 2 );
			imgContainer2.removeClass( 'nextImage' ).addClass( 'previousImage' ).css( 'z-index', 1 ).attr( 'src', images.eq( rotateIndex(index - 1) ).text() );
		} else if ( imgContainer1.hasClass( 'nextImage' ) ) {
			imgContainer2.removeClass( 'previousImage' ).addClass( 'currentImage' ).css( 'z-index', 3 );
			imgContainer3.removeClass( 'currentImage' ).addClass( 'nextImage' ).css( 'z-index', 2 );
			imgContainer1.removeClass( 'nextImage' ).addClass( 'previousImage' ).css( 'z-index', 1 ).attr( 'src', images.eq( rotateIndex(index - 1) ).text() );
		}
	}
	
	function fastforward( button ) {
		var currentImage = $( '.currentImage' ),
			counter = 0,
			trigger = 5;
		if ( button == 'nextButton' ) { var increment = 1 }
		else if ( button == 'prevButton' ) { var increment = -1 }
		fastforwardTimer = setTimeout( step, fastforwardDelay );
		function step() {
			var speed = counter < trigger ? 300 : 100;
			fastforwardTimer = setTimeout( function() {
				index = rotateIndex(index + increment);
				currentImage.attr( 'src', images.eq( rotateIndex( index ) ).text() );
				step();
			}, speed );
			counter++;
		}
	}
	
	function pauseCarousel() {
		if ( pause == false ) {
			pause = true; 
			pauseButton.css( 'background', 'red' );
			pauseButton.attr( 'src', 'images/play_button.png' );
			clearTimeout( navTimer );
		} else if ( pause == true ) {
			pause = false;
			pauseButton.css( 'background', 'black' );
			pauseButton.attr( 'src', 'images/pause_button.png' );
			navTimer = setTimeout( nextAuto, navTimerDelay );
		}
		console.log( 'pause' );
	}
	
	function mousedownOff() { nextButton.off( 'mousedown' ); prevButton.off( 'mousedown' ) }
	
	function mousedownOn() {	
		nextButton.on( 'mousedown', { button: 'nextButton' }, function(event) { mousedown(event) } );
		prevButton.on( 'mousedown', { button: 'prevButton' }, function(event) { mousedown(event) } );
	}
	
	function mouseupOn() {
		nextButton.on( 'mouseup', { button: 'nextButton' }, function(event) { mouseup(event) } );
		prevButton.on( 'mouseup', { button: 'prevButton' }, function(event) { mouseup(event) } );
	}
	
	function imageSwitch( button ) {
		if ( button == 'nextButton' ) {
			nextImage();
		} else if ( button == 'prevButton' ) {
			prevImage();
		}
	}
	
	function rotateIndex(i) {
		if ( i < 0) {
			return maxIndex;
		} else if ( i > maxIndex) {
			return 0;
		} else {
			return i;
		}
	}
	
	function fadeout() { interfaces.addClass( 'opacity0' ) }
	
	function scrollFunction( event ) {
		var firstImage = $( '.previousImage' ),
			secondImage = $( '.currentImage' ),
			thirdImage = $( '.nextImage' );
		event.originalEvent.preventDefault();
		setIndex( event.pageX );
		secondImage.attr( 'src', images.eq( rotateIndex( index ) ).text() );
		clearTimeout( navTimer );
		scrollbarIndex.css( 'display', 'block' );
		body.on( 'mousemove',
			function ( event ) {
				var x = event.pageX;
				setIndex( x );
				secondImage.attr( 'src', images.eq( rotateIndex( index ) ).text() );
			}
		);
		body.on( 'mouseup',
			function () {
				body.off( 'mousemove mouseup' );
				scrollbarIndex.css( 'display', 'none' );
				firstImage.attr( 'src', images.eq( rotateIndex(index - 1) ).text() );
				thirdImage.attr( 'src', images.eq( rotateIndex(index + 1) ).text() );
				mouseup();
			}
		);
		
		function setIndex( data ) {
			var offset = Math.round( data - scrollbar.offset().left );
			if ( offset <= 15 ) { index = 0 }
			else if ( offset >= 515 ) { index = 499 }
			else { index = offset - 15 }
			console.log( offset );
		}
	}
	
	function scroll() {
		var top = scrollbar.offset().top - carouselContainer.offset().top - scrollbarIndex.outerHeight() - 5,
			left = cursor.offset().left - carouselContainer.offset().left;
		cursor.css({
			'-webkit-transform' : 'translate(' + index + 'px, 0px)',
			'-moz-transform' : 'translate(' + index + 'px, 0px)',
			'-o-transform' : 'translate(' + index + 'px, 0px)',
			'transform' : 'translate(' + index + 'px, 0px)'
		});
		scrollbarIndex.css({
			'-webkit-transform' : 'translate(' + left + 'px, ' + top + 'px)',
			'-moz-transform' : 'translate(' + left + 'px, ' + top + 'px)',
			'-o-transform' : 'translate(' + left + 'px, ' + top + 'px)',
			'transform' : 'translate(' + left + 'px, ' + top + 'px)'
		});
		counter.text( (index + 1) + " of " + numImages);
		requestAnimationFrame( scroll );
	}
	
};

