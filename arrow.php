<?php include 'config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The CW</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/icone.ico">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
</head>
<body>
		
	<header>
		<div id="arrow-landing">

			<?php include ('navbar.php'); ?>

			<?php 

			$page_n = "1";

			$req = $db->prepare("SELECT * FROM series WHERE id = :page_n");

            $req->execute([
                    	'page_n' => $page_n
                    ]);
            while($data = $req->fetch()){

                    ?>

			<div id="arrow-title">
				<h1><?php echo $data['title']; ?></h1>
			</div>



			<div id="landing-link" class="arrow-link-width">
				<a href="#arrow-synopsis">
					<p id="landing-link-text">decouvrir <?php echo $data['title']; ?> <br> <i class="fa fa-angle-down" aria-hidden="true"></i></p>
				</a>
			</div>

		</div>

	</header>

	<div id="arrow-synopsis">
		<h2>synopsis</h2>
		<p><?php echo $data['synopsis']; }?>
		</p>
	</div>

	<div id="arrow-characters">
		<h2>personnages</h2>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/oliver.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Oliver Queen</div>
		</div>
		<span>Né le 16 mai 1985, Oliver Queen est le fils de Robert et Moira Queen. Héritier d'une fortune considérable, il est l'un des playboys de Starling City et connu pour ses frasques.</span></a>
	
		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/diggle.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">John Diggle</div>
		</div>
		<span>John Diggle est un vétéran de l'armée, vivant dans l'ombre de son frère mort au front, tué par Deadshot, à qui il accordera son pardon plus tard. </span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/felicity.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Felicity Smoak</div>
		</div>
		<span>Felicity Smoak est informaticienne et simple employée de Queen Industries quand Oliver sollicite ses talents pour récupérer des informations sur les hommes de sa liste. </span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/thea.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Thea Queen</div>
		</div>
		<span>Thea Queen est la sœur cadette d'Oliver. La disparition de son frère, dont elle était proche, la marque et elle commence à devenir une figure des nuits de Starling City, souvent arrêtée pour consommation de drogue.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/laurel.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Laurel Lance</div>
		</div>
		<span>Laurel Lance est avocate puis procureur à Starling City. Elle est la fille de Quentin et Dinah Lance.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/roy.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Roy Harper</div>
		</div>
		<span>Roy Harper est au début un voleur vivant tant bien que mal dans les bas quartiers de Starling City. Il tombe amoureux de Thea après l'avoir rencontré en volant son sac et devient un des plus fervents défenseurs de Arrow.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/lance.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Quentin Lance</div>
		</div>
		<span>Le lieutenant Quentin Lance travaille pour la police de Starling City et est chargé de l'affaire de l'archer justicier qui sévit dans la ville. Il a deux filles, Laurel et Sarah, et a été marié à Dinah.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/malcolm.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Malcolm Merlyn</div>
		</div>
		<span>Malcolm Merlyn est un riche homme d'affaires ayant souvent côtoyé les Queen. Marqué par la mort violente de sa femme, abattue pendant une agression, il disparait pendant plusieurs années et devient un des membres les plus dangereux de la Ligue des Assassins : l'Archer Noir.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/arrow/curtis.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Curtis Holt</div>
		</div>
		<span>Curtis est un employer de Palmer Technologie, il travaillera plus tard avec Felicity. Il découvrira plus tard l'équipe d'Arrow et finira par travailler pour eux. Dans la cinquième saison, il choisira de se battre au côté d'Oliver.</span></a>
			

	</div>





</body>
</html>