<!DOCTYPE html>
<html lang="en">
	<head>
		<title>iQube | Infinite Qube Labs</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>

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
		<!-- Contact Form CSS files -->
		<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
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

		<script type="text/javascript">
			$(document).ready(function(){
				$("#drop").hover(function(){
					
				});
			});

			if (jQuery.browser.mobile) {
				//window.location="mobile/index.html";
			}

		</script>
	</head>

	<body>
		<!-- header -->
		<header>
			<div class="container">
				<!--<h1 style="font-weight:bolder"><a href="index.html">TTx-Tech Training eXpo</a></h1>-->
				<a href="index.php"><img src="img/Final-Official-Logo (1).png" alt="TTX" height="75px" align="center" style="margin-left: 20px; " /></a>
				<nav>
					<ul>

						<li>
							<a href="about.php">About</a>
						</li>

						<li>
							<a href="wedo.php">What We Do</a>
						</li>
						<li id="drop">
							<a href="portfolio.php">Portfolio</a>
							<div style="display: none" class="submenu">
								<ul>
									<li>
										<a href="#">All</a>
									</li>
									<li>
										<a href="#">Services</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					</ul>
				</nav>
			</div>
		</header>
