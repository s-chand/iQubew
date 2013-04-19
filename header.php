<!DOCTYPE html>
<html lang="en">
	<head>
		<title>iQube | Infinite Qube Labs</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script>
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
		<script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
		<script type="text/javascript" src="js/roundabout.js"></script>
		<script type="text/javascript" src="js/roundabout_shapes.js"></script>
		<script type="text/javascript" src="js/gallery_init.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script type="text/javascript" src="js/detectmobilebrowser.js"></script>
		
		<!-- Required stylesheet -->
	<link rel="stylesheet" href="core/deck.core.css">
	
	<!-- Extension CSS files go here. Remove or add as needed. -->
	<link rel="stylesheet" href="extensions/goto/deck.goto.css">
	<link rel="stylesheet" href="extensions/menu/deck.menu.css">
	<link rel="stylesheet" href="extensions/navigation/deck.navigation.css">
	<link rel="stylesheet" href="extensions/status/deck.status.css">
	<link rel="stylesheet" href="extensions/hash/deck.hash.css">
	<link rel="stylesheet" href="extensions/scale/deck.scale.css">

	<!-- Style theme. More available in /themes/style/ or create your own. -->
	<link rel="stylesheet" href="themes/style/web-2.0.css">
	
	<!-- Transition theme. More available in /themes/transition/ or create your own. -->
	<link rel="stylesheet" href="themes/transition/horizontal-slide.css">
	
	<!-- Required Modernizr file -->
	<script src="modernizr.custom.js"></script>
		<!-- Contact Form CSS files -->
		<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
		<link rel="stylesheet" type="text/css" href="css/superfish.css" media='screen'/>
		<link rel="icon"
		type="image/ico"
		href="images/favicon.ico">
		<!--[if lt IE 7]>
		<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<script type="text/javascript" src="js/IE9.js"></script>
		<![endif]-->

		<script>

		(function($){ //create closure so we can safely use $ as alias for jQuery

			$(document).ready(function(){

				// initialise plugin
				var example = $('#example').superfish({
					//add options here if required
				});

				// buttons to demonstrate Superfish's public methods
				$('.destroy').on('click', function(){
					example.superfish('destroy');
				});

				$('.init').on('click', function(){
					example.superfish();
				});

				$('.open').on('click', function(){
					example.children('li:first').superfish('show');
				});

				$('.close').on('click', function(){
					example.children('li:first').superfish('hide');
				});
			});

		})(jQuery);


		</script>
	</head>

	<body>
		<!-- header -->
		<header>
			<div class="container">
				<!--<h1 style="font-weight:bolder"><a href="index.html">TTx-Tech Training eXpo</a></h1>-->
				<a href="index.php"><img src="img/Final-Official-Logo (1).png" alt="TTX" height="75px" align="center" style="margin-left: 20px; " /></a>
				<nav>
					<ul  class="sf-menu" id="example">

						<li  class="current">
							<a href="about.php">About</a>
						</li>

						<li  class="current">
							<a href="wedo.php">What We Do</a>
						</li>
						<li>
							<a href="portfolio.php">Portfolio</a>
								<ul>
									<li>
										<a href="#">All</a>
									</li>
									<li>
										<a href="#">Services</a>
									</li>
								</ul>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					</ul>
					
				</nav>
			</div>
		</header>
