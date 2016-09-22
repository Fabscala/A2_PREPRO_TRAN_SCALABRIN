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

<div id="edit_characters">
	 <form method="POST" action="add_character.php">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" placeholder="Nom du personnage"/>
    <label for="serie_nb">Numéro de la Série:<small style="display:block; font-size:10px;">Arrow=1, Flash=2, LOT=3, Supergirl=4</small></label>
    <input type="text" name="serie_nb" id="serie_nb" placeholder="Numero de la série"/>
    <label for="description">Description :</label>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description du personnage"></textarea>
    <label for="img_name">Nom de l'image:</label>
    <input type="text" name="img_name" id="img_name" placeholder="Nom de l'image"/>
    <input type="submit" value="Ajouter" id="edit" />
  </form>
</div>

    <?php 

        if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["img_name"]) && isset($_POST["serie_nb"])){
            if(!empty($_POST["name"]) && !empty($_POST["description"]) && !empty($_POST["img_name"]) && !empty($_POST["serie_nb"])){

            $name = htmlspecialchars($_POST["name"]);
            $description = htmlspecialchars($_POST["description"]);
            $img_name = htmlspecialchars($_POST["img_name"]);
            $serie_nb = htmlspecialchars($_POST["serie_nb"]);

            $request = $db->prepare("INSERT INTO characters (serie_id, name, description, image_name ) VALUES (:serie_nb, :name, :description, :img_name)");

            $request->execute(array("serie_nb" => $serie_nb, "name" => $name, "description" => $description, "img_name" => $img_name));

            echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: green;">Le personnage a bien été ajouté !</div>';

             }
              else {
                  echo "Veuillez remplir tous les champs";
              }
         }



                ?>



	</div>
	
</body>
</html>