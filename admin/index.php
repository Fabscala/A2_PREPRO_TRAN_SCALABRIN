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
<body>

	<div id="login_content">
		<h3> Administration </h3>

		<form method="POST" action="gestion_index.php">
			<label for="pseudo">Pseudo :</label>
			<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"/><br />
			<label for="mdp">Mot de passe :</label>
			<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" /><br /><br />
			<input type="submit" value="Connexion" id="submit" />
		</form>

	</div>
	
</body>
</html>