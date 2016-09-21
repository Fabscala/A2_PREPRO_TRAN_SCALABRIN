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
              <div id="supergirl-landing">

                     <?php include ('navbar.php'); ?>

                     <?php 

                     $page_n = "4";

                     $req = $db->prepare("SELECT * FROM series WHERE id = :page_n");

                     $req->execute([
                            'page_n' => $page_n
                           ]);
                     while($data = $req->fetch()){

                    ?>

                     <div id="supergirl-title">
                            <h1><?php echo $data['title']; ?></h1>
                     </div>



                     <div id="landing-link" class="supergirl-link-width">
                            <a href="#supergirl-synopsis">
                                   <p id="landing-link-text">decouvrir <?php echo $data['title']; ?><br> <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                            </a>
                     </div>

              </div>

       </header>

        <div id="supergirl-synopsis">
              <h2>synopsis</h2>
                   <p><?php echo $data['synopsis']; }?></p>
         </div>

       <div id="supergirl-characters">
              <h2>personnages</h2>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_supergirl/supergirl.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Kara Danvers</div>
              </div>
              <span>Kara Zor-El / Kara Danvers / Supergirl est une kryptonnienne envoyée sur Terre pour protégée son cousin. Mais elle fut bloquée dans la Zone Fantôme et son cousin est devenu Clark Kent alias Superman.</span></a>
       
              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_supergirl/jimmy.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">James Olsen</div>
              </div>
              <span>James Olsen est un photographe pour CatCo.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_supergirl/alexandra.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Alexandra Danvers</div>
              </div>
              <span>Alexandra "Alex" Danvers est employée d'une organisation secrète du gouvernement et la sœur adoptive de Kara Danvers.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_supergirl/winn.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Winslow Schott</div>
              </div>
              <span>Winslow Schott est un programmeur et travaille avec Kara Danvers à CatCo.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_supergirl/hank.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Hank Henshaw</div>
              </div>
              <span>Hank Henshaw était le Directeur de la D.E.O., une organisation secrète qui recherche des êtres venus de la bordure extérieur. Lors d'une mission avec le Dr. Jeremiah Danvers, il fut tué.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_supergirl/cat.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Cat Grant</div>
              </div>
              <span>Cat Grant est la fondatrice de CatCo. Son assistante est Kara Danvers.</span></a>



</body>
</html>