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

			<div id="supergirl-admin" class="serie-section-index">
				<p>supergirl</p>
			</div>

			<div id="admin-options">
				<ul>
					<li><a href="edit.php?id=4">Modifier le titre / synopsis de la série</a></li>
					<li><a href="edit_characters_list.php?id=4">Modifier un personnage de la série</a></li>
					<li><a href="add_character.php">Ajouter un personnage à la série</a></li>
					<li><a href="delete_character_list.php?id=4">Supprimer un personnage de la série</a></li>
				</ul>
			</div>


	</div>
	
</body>
</html>