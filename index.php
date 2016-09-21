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

		<div id="arrow" class="serie-section-index">
			<a href="arrow.php"><img src="img/arrow/arrow-index.png" alt=""></a>
		</div>

		<div class="serie-section-index">
			<a href="flash.php"><img src="img/img_flash/flash-index.png" alt=""></a>
		</div>

		<div class="serie-section-index">
			<a href="lot.php"><img src="img/lot/lot-index.png" alt=""></a>
		</div>

		<div class="serie-section-index">
			<a href="supergirl.php"><img src="img/img_supergirl/supergirl-index.png" alt=""></a>
		</div>

	</header>





</body>
</html>