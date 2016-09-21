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
		<div id="lot-landing">

			<?php include ('navbar.php'); ?>

                     <?php 

                     $page_n = "3";

                     $req = $db->prepare("SELECT * FROM series WHERE id = :page_n");

                     $req->execute([
                            'page_n' => $page_n
                           ]);
                     while($data = $req->fetch()){

                    ?>

			<div id="lot-title">
				<h1>legend's of</h1>
				<h1 class="h1-bis">tomorrow</h1>
			</div>



			<div id="landing-link" class="lot-link-width">
				<a href="#lot-synopsis">
					<p id="landing-link-text">decouvrir <?php echo $data['title']; ?> <br> <i class="fa fa-angle-down" aria-hidden="true"></i></p>
				</a>
			</div>

		</div>

	</header>

	<div id="lot-synopsis">
		<h2>synopsis</h2>
		<p><?php echo $data['synopsis']; } ?></p>
	</div>

	<div id="lot-characters">
		<h2>personnages</h2>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/rip.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Rip Hunter</div>
		</div>
		<span>Rip Hunter a créé la première machine temporelle, et il va venir du futur pour constituer une équipe de légendes afin de mettre fin aux agissements de Vandal Savage.</span></a>
	
		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/ray.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Ray Palmer</div>
		</div>
		<span>Ray Palmer est un scientifique et inventeur qui apparaît dès le début de la saison 3 en tant que repreneur de Queen Consolidated. Ray Palmer est également l'identité d'Atom un super-héros de DC Comics.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/leonard.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Leonard Snart</div>
		</div>
		<span>Leonard Snart est un criminel ingénieux connu sur le surnom de Capitaine Cold. Ayant volé à Cisco une invention pouvant congeler tous ce qu'elle touche, il est l'un des adversaires les plus dangereux qu'affronte Barry Allen, qui n'hésite pas à tuer ou laisser en vie quand cela lui rapporte.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/mick.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Mick Rory</div>
		</div>
		<span>Mick Rory, surnommé Heat Wave par Cisco Ramon, est un criminel pyromane et un complice de Leonard Snart.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/sara.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Sara Lance</div>
		</div>
		<span>Sœur de Laurel Lance, elle est supposée morte après le naufrage du bateau. Elle réapparaît mystérieusement des années après sous le pseudonyme de The Canary, afin de protéger sa famille de la Ligue des assassins, l'organisation qui l'a entraîné et qui la recherche.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/kendra.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Kendra Saunders</div>
		</div>
		<span>Super héroïne connu aussi en tant que Hawkgirl. D'après les infos elle ne se rappellerait pas de son ancien amour (dans une autre vie), Carter Hall/Hawkman.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/carter.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Carter Hall</div>
		</div>
		<span>Super héro connu aussi en tant que Hawkman. D'après les infos, il se rappellerait de chacune de ses différentes vies vécues, qui dureraient depuis plus de 5 000 ans.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/martin.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Martin Stein</div>
		</div>
		<span>Martin Stein est un brillant physicien. Il a créé une sorte de matrice énergétique dans le cadre du projet Firestorm. Au cours de l'accident de l'accélérateur de particules, il fusionnera avec la matrice et Ronnie Raymond, donnant naissance à l'Homme Nucléaire.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/jefferson.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Jefferson Jackson</div>
		</div>
		<span>Jefferson "Jax" Jackson est un quaterback qui se fait souffler par l'explosion du générateur de particules. Blessé il devient mécanicien dans un garage. Il est la moitié de Firestorm avec Martin Stein, en remplacement de Ronnie Raymond.</span></a>

		<a href=""><div id="characters">
			<div class="rondperso" style="background:url(img/lot/vandal.png) no-repeat 0px 0px;">
			</div>
			<div class="character-name">Vandal Savage</div>
		</div>
		<span>Vandal Savage (1700 avant JC – 2021), autrefois connu sous les noms d’Hath-Set en 1700 avant JC, Curtix Knox en 1958 et Sasha Mahnovski en 1975, était un ancien prêtre égyptien au service de Ramses II, qui devient ambitieux et désireux de pouvoirs.</span></a>
			

	</div>





</body>
</html>