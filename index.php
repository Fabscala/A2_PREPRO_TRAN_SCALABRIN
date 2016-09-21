<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The CW</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
</head>
<body>
		
	<header>
		<div id="landingpage">

			<?php include ('navbar.php'); ?>

			<video autoplay loop id="bg-video">
				<source src="img/bg.mp4" type="video/mp4">
			</video>

			<div id="cw-logo">
				<img src="img/cw-logo.png">
			</div>

			<div id="landing-link" class="landing-link-width">
				<a href="#arrow">
					<p id="landing-link-text">voir les series <br> <i class="fa fa-angle-down" aria-hidden="true"></i></p>
				</a>
			</div>

		</div>

		<a href="arrow.php">
			<div id="arrow" class="serie-section-index">
				<p><span>the</span> arrow</p>
			</div>
		</a>

		<a href="flash.php">
			<div id="flash" class="serie-section-index">
				<p><span>the</span> flash</p>
			</div>
		</a>

		<a href="lot.php">
			<div id="lot" class="serie-section-index">
				<p class="higher-text">legend's <span>of</span></p> <p class="lower-text">tomorrow</p>
			</div>
		</a>

		<a href="supergirl.php">
			<div id="supergirl" class="serie-section-index">
				<p>supergirl</p>
			</div>
		</a>

	</header>





</body>
</html>