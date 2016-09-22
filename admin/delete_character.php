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

	<?php 

      if(isset($_GET["id"])) {
          $id = htmlspecialchars($_GET["id"]);



          $request = $db->prepare("DELETE FROM characters WHERE id = :id");

          $request->execute(array("id" => $id));

          echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: green;">Le personnage a été supprimé !</div>';
          ?>
            <meta http-equiv="refresh" content="3; URL=http://127.0.0.1/A2_PREPRO_TRAN_SCALABRIN/admin/delete_character_list.php">
          <?php

      }
      else {
          echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: red;">ID non spécifié !</div>';
      }

    ?>

	</div>
	
</body>
</html>