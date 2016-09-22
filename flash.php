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

                     $serie_id = "2";

                     $req = $db->prepare("SELECT * FROM series WHERE id = :serie_id");

                     $req->execute([
                            'serie_id' => $serie_id
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

                     <?php

                     $req = $db->prepare("SELECT * FROM characters WHERE serie_id = :serie_id");

                          $req->execute([
                                   'serie_id' => $serie_id
                                  ]);
                          while($data = $req->fetch()){ ?>

              <a href=""><div id="characters">
                     <div class="rondperso" style="background:url(img/img_flash/<?php echo $data['image_name']; ?>) no-repeat 0px 0px;">
                     </div>
                     <div class="character-name"><?php echo $data['name']; ?></div>
              </div>
              <span><?php echo $data['description']; ?></span></a>

              <?php } ?>
                     

       </div>






</body>
<?php include ('footer.php'); ?>
</html>