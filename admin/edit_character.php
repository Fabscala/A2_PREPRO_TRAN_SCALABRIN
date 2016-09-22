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

            $request = $db->prepare("SELECT * FROM characters WHERE id = :id");

            $request->execute(array("id" => $id));

            while ($data = $request->fetch()){
    ?>
<div id="edit_characters">
	 <form method="POST" action="edit_character.php?id=<?php echo $id; ?>">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>"/>
    <label for="description">Description :</label>
    <textarea name="description" id="description" cols="30" rows="10"><?php echo $data['description']; ?></textarea>
    <label for="img_name">Nom de l'image:</label>
    <input type="text" name="img_name" id="img_name" value="<?php echo $data['image_name']; ?>"/>
    <input type="submit" value="Editer" id="edit" />
  </form>
</div>

    <?php 
            }
        }    
        else {
            echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: red;">ID non spécifié !</div>';
        }


        if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["img_name"])){
            if(!empty($_POST["name"]) && !empty($_POST["description"]) && !empty($_POST["img_name"])){
            $name = htmlspecialchars($_POST["name"]);
            $description = htmlspecialchars($_POST["description"]);
            $img_name = htmlspecialchars($_POST["img_name"]);

            $req = $db->prepare("UPDATE characters SET name = :name, description = :description, image_name = :img_name WHERE id = :id");

            $req->execute(array("name" => $name, "description" => $description, "img_name" => $img_name,"id" => $id));

            echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: green;">Modification réussie !</div>';

            }
            else {
                echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: red;">Veuillez renseigner tous les champs !</div>';
            }
        }

    ?>

	</div>
	
</body>
</html>