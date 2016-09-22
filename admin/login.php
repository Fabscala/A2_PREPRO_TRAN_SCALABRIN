<?php include '../config/config.php'; 
session_start();

if (isset($_SESSION["id"])) {
    header("Location:index.php");
}else{

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

	<div id="admin-content">
		<h3> se connecter </h3>

		<form method="POST" action="login.php">
			<input type="text" name="username" id="username" placeholder="Pseudo"/>
			<input type="password" name="password" id="password" placeholder="Mot de passe" />
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