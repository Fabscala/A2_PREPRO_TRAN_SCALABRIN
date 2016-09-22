<?php 
session_start();
include '../config/config.php';

if (isset($_SESSION["id"])) {
    
}else{
	header("Location:login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <title>The CW - Administration</title>
       <link href="../css/style.css" rel="stylesheet">
       <link href="../css/font-awesome.css" rel="stylesheet">
      <link rel="shortcut icon" href="../img/icone.ico">
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
       <script type="text/javascript" src="../js/scroll.js"></script>
</head>
<body id="admin-body">

<?php include "navbar.php"; ?>

	<div id="admin-content">
		<h3> Administration </h3>

		<a href="arrow-panel.php">
			<div id="arrow-admin" class="serie-section-index">
				<p><span>the</span> arrow</p>
			</div>
		</a>

		<a href="flash-panel.php">
			<div id="flash-admin" class="serie-section-index">
				<p><span>the</span> flash</p>
			</div>
		</a>

		<a href="lot-panel.php">
			<div id="lot-admin" class="serie-section-index">
				<p class="higher-text">legend's <span>of</span></p> <p class="lower-text">tomorrow</p>
			</div>
		</a>

		<a href="supergirl-panel.php">
			<div id="supergirl-admin" class="serie-section-index">
				<p>supergirl</p>
			</div>
		</a>


	</div>
	
</body>
</html>