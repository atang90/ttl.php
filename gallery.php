<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- /// Meta tags ///-->
    <meta id='viewport' name="viewport" content="maximum-scale=1.0, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Throughthelens is a gallery of the photographs I have taken since 2016.">
    <meta name="keywords" content="Photography, photo, gallery">

    <!-- /// Import Materialize ///-->
    <!--Import Google Icon Font=-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700|Ubuntu:300,400,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/style2.css"  media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/jquery.fancybox.min.css" media="screen,projection">

  </head>

  <body>
      <main>
        <h2><b>Image Gallery</b></h2>
        <?php

            $dir = glob ('Img/{*.jpg}', GLOB_BRACE);
            foreach ($dir as $value)
            {

            ?>

            <div class="thumbnails">
              <a href="<?php echo $value ;?>" data-fancybox="images" data-caption="My caption">
                <img src="<?= $value?>" alt="<?php echo $value ;?>">
              </a>
            </div>

            <?php

            }

            ?>
      </main>
  </body>

  <!-- /// Import jQuery before materialize.js /// -->
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script type="text/javascript" src="css/jquery.fancybox.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

</html>
