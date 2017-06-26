// bstaxx.js

var router;

window.onload = function () {
	
	var hostname = window.location.hostname;
	
/*=================================================================
///////////////////////////////////////////////////////////////////

		MODELS & COLLECTIONS
		
///////////////////////////////////////////////////////////////////
=================================================================*/
	
	// Creates the Project Model
	var Project = Backbone.Model.extend({
		initialize: function() {
			// code goes here
		},
		
		validate: function (attrs) {
			if(!attrs.title) { return "Attributes are required"; }
			if(!attrs.index) { return "The index is required"; }
		},
		
		projectPage: function (index) {
			return "javascript:router.navigate('project/" + index + "', {trigger: true});";
		}
	});
	
	// Creates the Project Collection
	var Projects = Backbone.Collection.extend({ 
		model: Project
		
	});
	
	// Populates the Project Collection with Project Models
	var projects = new Projects([
		new Project({
			index: 0,
			title: 'Currency Central',
			image: "../bstaxx/images/newmoney_banner.jpg",
			thumb: "../bstaxx/images/newmoney_thumb.jpg",
			website: 'http://' + hostname + '/portfolio/school/GWD333/',
			composition: 'HTML5, CSS3, JavaScript, JQuery, Columnal.css Adobe Illustrator, Adobe Premeire Pro, Adobe Photoshop',
			chartObject: {
				title: { text: "Code Composition" },
				toolTip:{ enabled: false },
				backgroundColor: "rgba(0,0,0,0)",
				data: [//array of dataSeries              
					{ //dataSeries object
						/*** Change type "column" to "bar", "area", "line" or "pie"***/
						type: "pie",
						bevelEnabled: true,
						indexLabel: "{label}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						indexLabelFontWeight: "bold",
						
						dataPoints: [
							{ label: "HTML", y: 40, color: "DarkOrange" },
							{ label: "CSS", y: 30, color: "green" },
							{ label: "Javascript", y: 30, color: "red" }
						]
					}
				]
			},
			description: "<p>This project was designed to showcase my ability to incorporate video in my websites using HTML5’s &#60;video&#62; tag. All videos are cross-browser compatible and were created by me.</p>"
		}),
		new Project({
			index: 1,
			title: 'African Art Mesueam of Maryland',
			image: "images/visit_banner.png",
			thumb: "images/visit_thumb.png",
			website: 'http://' + hostname + '/portfolio/school/GWD421/',
			composition: 'HTML5, CSS3, JavaScript, JQuery, PHP, Columnal.css, Adobe Illustratr, Adobe InDesign, Adobe Photoshop',
			chartObject: {
				title: { text: "Code Composition" },
				toolTip:{ enabled: false },
				data: [//array of dataSeries              
					{ //dataSeries object
						/*** Change type "column" to "bar", "area", "line" or "pie"***/
						type: "pie",
						bevelEnabled: true,
						indexLabel: "{label}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						indexLabelFontWeight: "bold",
						dataPoints: [
							{ label: "HTML", y: 45, color: "DarkOrange" },
							{ label: "CSS", y: 30, color: "green" },
							{ label: "JavaScript", y: 10, color: "red" },                                    
							{ label: "PHP", y: 5, color: "HotPink" }
						]
					}
				]
			},
			description: "<p>The African Art Museum of Maryland commissioned me and my team to create an ecommerce website where donors could donate funds, joined their membership, and view some of the exhibits offered by the museum. Unfortunately, the site had to be scrapped due to licensing issues. The museum was not allowed to provide or create content to complete the project.</p>"
		}),
		new Project({
			index: 2,
			title: 'Beach Birds',
			image: "images/beach_birds_banner.jpg",
			thumb: "images/beach_birds_thumb.jpg",
			website: 'http://' + hostname + '/portfolio/school/IMD110/',
			composition: 'HTML5, CSS3, JavaScript, JQuery, PHP, Columnal.css, Adobe Illustrator, Adobe Photoshop',
			chartObject: {
				title: { text: "Code Composition" },
				toolTip:{ enabled: false },
				data: [//array of dataSeries              
					{ //dataSeries object
						/*** Change type "column" to "bar", "area", "line" or "pie"***/
						type: "pie",
						bevelEnabled: true,
						indexLabel: "{label}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						indexLabelFontWeight: "bold",
						toolTip: { enabled: false },
						dataPoints: [
							{ label: "HTML", y: 45, color: "DarkOrange" },
							{ label: "CSS", y: 30, color: "green" },
							{ label: "JavaScript", y: 10, color: "red" },                                    
							{ label: "PHP", y: 5, color: "HotPink" }
						]
					}
				]
			},
			description: "<p>The original concept for the Beach Birds website was to be a social site where bird watchers could share their photos and information about where certain species of birds could be found in the Miami area. They could also share information on different techniques and equipment.</p>"
		}),
		new Project({
			index: 3,
			title: 'Galactic Carousel',
			image: "images/Galactic-Carousel-Banner.png",
			thumb: "images/Galactic-Carousel-thumb.png",
			website: 'http://' + hostname + '/portfolio/imageCarousel/',
			composition: 'HTML5, CSS3, JavaScript, JQuery, Adobe Illustrator, Adobe Photoshop',
			chartObject: {
				title: { text: "Code Composition" },
				toolTip:{ enabled: false },
				data: [//array of dataSeries              
					{ //dataSeries object
						/*** Change type "column" to "bar", "area", "line" or "pie"***/
						type: "pie",
						bevelEnabled: true,
						indexLabel: "{label}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						indexLabelFontWeight: "bold",
						toolTip: { enabled: false },
						dataPoints: [
							{ label: "HTML", y: 40, color: "DarkOrange" },
							{ label: "CSS", y: 5, color: "green" },
							{ label: "JavaScript", y: 55, color: "red" }
						]
					}
				]
			},
			description: "<p>This project was a JavaScript test given to me by Disc Makers. The initial specifications was to create an image carousel with 500 images where each image was at least 300KB and 800px x 500px. Only one images should be shown at a time and it should automatically scroll from right to left with the option to manually scroll form left to right. No plug-ins were allowed to be used.</p>"
		}),
		new Project({
			index: 4,
			title: 'College Park Aviation Museum',
			image: "images/college_park_banner.png",
			thumb: "images/college_park_thumb.png",
			website: 'http://' + hostname + '/portfolio/school/IMD230/',
			composition: 'HTML5, CSS3, Javascript, JQuery, Adobe Photoshop',
			chartObject: {
				title: { text: "Code Composition" },
				toolTip:{ enabled: false },
				data: [//array of dataSeries              
					{ //dataSeries object
						/*** Change type "column" to "bar", "area", "line" or "pie"***/
						type: "pie",
						bevelEnabled: true,
						indexLabel: "{label}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						indexLabelFontWeight: "bold",
						toolTip: { enabled: false },
						bevelEnabled: true,
						dataPoints: [
							{ label: "HTML", y: 40, color: "DarkOrange" },
							{ label: "CSS", y: 10, color: "green" },
							{ label: "JavaScript", y: 50, color: "red" }
						]
					}
				]
			},
			description: "<p>This project was designed to be a compliment to the exhibits inside the College Park Aviation Museum. It offers the user an interactive experience the relays additional information about the exhibits.</p>"
		}),
		new Project({
			index: 5,
			title: 'Briggs Express',
			image: "images/briggs_express.jpg",
			thumb: "images/briggs_express_thumb.jpg",
			website: 'http://' + hostname + '/portfolio/bstaxx/school/briggs/index.php',
			composition: 'HTML5, CSS3, Javascript, JQuery, PHP, Adobe Illustrator, Adobe Photoshop',
			chartObject: {
				title: { text: "Code Composition" },
				toolTip:{ enabled: false },
				data: [//array of dataSeries              
					{ //dataSeries object
						/*** Change type "column" to "bar", "area", "line" or "pie"***/
						type: "pie",
						bevelEnabled: true,
						indexLabel: "{label}",
						indexLabelPlacement: "inside",
						indexLabelFontColor: "white",
						indexLabelFontWeight: "bold",
						toolTip: { enabled: false },
						dataPoints: [
							{ label: "HTML", y: 20, color: "DarkOrange" },
							{ label: "CSS", y: 20, color: "green" },
							{ label: "JavaScript", y: 30, color: "red" },                                    
							{ label: "PHP", y: 30, color: "HotPink" }
						]
					}
				]
			},
			description: "<p>This project is a short personality test modeled after the Briggs Myers test that tell you your personality type. It’s designed to show my ability to code with PHP.</p>"
		})
	]);
	
	
/*=================================================================
///////////////////////////////////////////////////////////////////

		VIEWS & CONTROLLERS
		
///////////////////////////////////////////////////////////////////
=================================================================*/
	
	// Creates the Project Page View
	var ProjectPage = Backbone.View.extend({
		render: function (index) {
			var self = this,
                url = 
			$.get('../bstaxx/templates/project.html', function (data) {
				var template = _.template( data ),
					html = template(self.model.toJSON());
				self.$el.html(html);
				initChart( self.model.get('chartObject') );
			});
			
			return this;
		}
	});
	
	
	
	var MainPage = Backbone.View.extend({
		render: function () {
			var self = this;
			$.get('../bstaxx/templates/main.html', function (data) {
				var pagetemplate = _.template( data ),
					pageHtml = pagetemplate();
				self.$el.html(pageHtml);
				
				var slideContainer = $('#slides');
				self.model.each( function (project) {
					var html = '<div><a u="image" href="' + project.projectPage(project.get('index')) + '"><img src="' + project.get('image') + '" /></a><a u="thumb" href="' + project.get('url') + '"><img src="' + project.get('thumb') + '" /></a></div>';
					slideContainer.append(html);
				});
				initSlider();
			});
				
			return this;
		}
	});
	
	
	var WebsitePage = Backbone.View.extend({
		render: function () {
			var self = this;
			var self = this;
			$.get('../bstaxx/templates/openSite.html', function (data) {
				var template = _.template( data ),
					html = template(self.model.toJSON());
				self.$el.html(html);
			});
			
			return this;
		}
	});
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	var Router = Backbone.Router.extend({
		routes: {
			"": "main", 						// #main
			"project/:index" : "project" 		// #project/1
		}
	});
	
	router = new Router;
	
	router.on('route:main', function loadMainPage() {
		// Creates a new instance of the Main View
		var mainPage = new MainPage({ el: '#content', model: projects });
		// Renders the new Project Title to the DOM
		mainPage.render();
	});
	
	router.on('route:project', function loadProjectPage(index) {
		// Creates a new instance of the Project Title View
		var projectPage = new ProjectPage({ el: '#content', model: projects.at(index) });
		// Renders the new Project Title to the DOM
		projectPage.render(index);
	});
	

	Backbone.history.start();
	
}

var map;

function initMap() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644)
  };
  
  map = new google.maps.Map( $('#map-canvas'), mapOptions );
}



function initSlider() {
	var options = { 
		$AutoPlay: true, 
		$FillMode: 5, 
		$SlideWidth: 960,
		$ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
			$Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
			$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

			$ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
			$SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
			$DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
			$ParkingPosition: 360                           //[Optional] The offset position to park thumbnail
		}
	};
	
	var jssor_slider1 = new $JssorSlider$('slider1_container', options);
	
	//responsive code begin
	//you can remove responsive code if you don't want the slider scales
	//while window resizes
	function ScaleSlider() {
		var parentWidth = $('#slider1_container').parent().width();
		if (parentWidth) {
			jssor_slider1.$ScaleWidth(parentWidth);
		}
		else
			window.setTimeout(ScaleSlider, 30);
	}
	//Scale slider after document ready
	ScaleSlider();
									
	//Scale slider while window load/resize/orientationchange.
	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
	//responsive code end
	
}
	
function initChart(chartObject) {
	var chart1 = new CanvasJS.Chart("chartContainer1", chartObject),
		chart2 = new CanvasJS.Chart("chartContainer2", chartObject);
	chart1.render();
	chart2.render();
}

