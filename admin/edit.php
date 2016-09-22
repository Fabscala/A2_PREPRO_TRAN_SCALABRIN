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

            $request = $db->prepare("SELECT * FROM series WHERE id = :id");

            $request->execute(array("id" => $id));

            while ($data = $request->fetch()){
    ?>

	<form method="POST" action="edit.php?id=<?php echo $id; ?>">
		<label for="title" id="title-label">Titre :</label>
		<input type="text" name="title" id="title" value="<?php echo $data['title']; ?>"/>
		<label for="synopsis" id="synopsis-label">Synopsis :</label>
		<textarea name="synopsis" id="synopsis" cols="30" rows="10"><?php echo $data['synopsis']; ?></textarea>
		<input type="submit" value="Editer" id="edit" />
	</form>

    <?php 
            }
        }    
        else {
            echo '<div style="font-family: Roboto; text-align: center; font-size: 20px; color: red;">ID non spécifié !</div>';
        }


        if(isset($_POST["title"]) && isset($_POST["synopsis"])){
            if(!empty($_POST["title"]) && !empty($_POST["synopsis"])){
            $title = htmlspecialchars($_POST["title"]);
            $synopsis = htmlspecialchars($_POST["synopsis"]);

            $req = $db->prepare("UPDATE series SET title = :title, synopsis = :synopsis WHERE id = :id");

            $req->execute(array("title" => $title, "synopsis" => $synopsis, "id" => $id));

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