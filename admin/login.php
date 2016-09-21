<?php include '../config/config.php'; ?>

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

		<nav class="navbar-admin">
  			<ul>
 				<li><a href="index.php">accueil</a></li>
 				<li><a href="index.php">modifier</a></li>
 				<li><a href="index.php">se deconnecter</a></li>
  			</ul>
  		</nav>

	<div id="admin-content">
		<h3> Administration </h3>

		<form method="POST" action="login.php">
			<label for="username">Pseudo :</label>
			<input type="text" name="username" id="username" placeholder="Pseudo"/><br />
			<label for="password">Mot de passe :</label>
			<input type="password" name="password" id="password" placeholder="Mot de passe" /><br /><br />
			<input type="submit" value="Connexion" id="submit" />
		</form>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){

		$email = htmlspecialchars($_POST['username']);
		$password = sha1($_POST['password']);

		$req = $db->prepare('SELECT id, username FROM members WHERE username LIKE :username AND password LIKE :password');
		$req->execute(
			array(
				'username' => $email,
				'password' => $password
				)

			);

		$users = $req->fetchALL();
                if(sizeof($users) > 0){

                    $id_member = $users[0]["id"];
                    $_SESSION["id"] = $id_member;
                    $_SESSION["username"] = $users[0]["username"];

                    header('Location:index.php');
                }
                else {
                    echo 'Pseudo ou mdp incorrect';
                }

	}
}

?>

	</div>
	
</body>
</html>