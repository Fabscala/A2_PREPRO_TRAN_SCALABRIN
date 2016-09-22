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

		<div style="font-family: Roboto; text-align: center; font-size: 20px; color: green;">Le personnage a bien été ajouté !</div>


	</div>
	
</body>
</html>