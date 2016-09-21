		<nav class="navbar">
  			<ul>
 				<li><a href="index.php">accueil</a></li>

				<?php include 'config/config.php'; 

                     $req = $db->prepare("SELECT title, file_name FROM series");

                     $req->execute([
                           ]);
                     while($data = $req->fetch()){

                     	?>

 				<li><a href="<?php echo $data['file_name']; ?>"><?php echo $data['title']; } ?></a></li>
  			</ul>
  		</nav>