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
              <div id="flash-landing">

                     <?php include ('navbar.php'); ?>

                     <?php 

                     $page_n = "2";

                     $req = $db->prepare("SELECT * FROM series WHERE id = :page_n");

                     $req->execute([
                            'page_n' => $page_n
                           ]);
                     while($data = $req->fetch()){

                    ?>

                     <div id="flash-title">
                            <h1><?php echo $data['title']; ?></h1>
                     </div>



                     <div id="landing-link" class="flash-link-width">
                            <a href="#flash-synopsis">
                                   <p id="landing-link-text">decouvrir <?php echo $data['title']; ?> <br> <i class="fa fa-angle-down" aria-hidden="true"></i></p>
                            </a>
                     </div>

              </div>

       </header>
       <div id="flash-synopsis">
              <h2>synopsis</h2>
              <p><?php echo $data['synopsis']; } ?></p>
       </div>

              <div id="flash-characters">
              <h2>personnages</h2>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/barry.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Barry Allen</div>
              </div>
              <span>Bartholomew Henry "Barry" Allen (né en 1989), est un scientifique travaillant en tant que médecin légiste au CCPD. Barry est le fils d'Henry Allen et de Nora Allen, le fils adoptif de Joe West et le meilleur ami/frère adoptif d'Iris West.</span></a>
       
              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/iris.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Iris West</div>
              </div>
              <span>Iris West est la fille de Joe West et l'ami d'enfance de Barry Allen. Elle est journaliste et elle est fascinée par The Flash. Elle est également la petite amie du collègue de son père Eddie Thawne pendant la Saison 1 (The Flash).</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/cait.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Caitlin Snow</div>
              </div>
              <span>Caitlin Snow est une ingénieur en biologie à S.T.A.R. Labs. Elle reste aux côtés d'Harrison Wells"" après la fermeture de l'entreprise.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/cisco.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Francisco Ramon</div>
              </div>
              <span>Cisco Ramon est un ingénieur en mécanique à S.T.A.R. Labs. Il reste aux côtés d'Harrison Wells/Eobard Thawne après la fermeture de l'entreprise.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/harry.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Harrison Wells</div>
              </div>
              <span>Harrison Wells était un scientifique de renom et prometteur, marié à Tess Morgan et un bon ami de Tina McGee. Il fut tué par le méta-humain Eobard Thawne venu du futur, qui usurpa son identité pendant près de deux décennies.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/joe.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Joe West</div>
              </div>
              <span>Joe West est un détective de police de Iris West. C'est également le père adoptif de Barry Allen.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/wally.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Wally West</div>
              </div>
              <span>Wally West est le fils de Joe et Francine West ainsi que le frère cadet d'Iris West.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/eddy.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Eddie Thawne</div>
              </div>
              <span>Eddie Thawne est un détective de la police de Central City et le collègue de Joe West. Il sort avec Iris West.</span></a>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/henry.png) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name">Henry Allen</div>
              </div>
              <span>Henry Allen était le père de Barry Allen, le mari de Nora Allen et un très bon ami de Joe West. Après que sa femme ait été assassinée par le voyageur temporel Reverse-Flash, il fut accusé du meurtre et envoyé en prison à Iron Heights.</span></a>
                     

       </div>






</body>
</html>