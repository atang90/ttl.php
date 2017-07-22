<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include "/Users/Andrew/Sites/Projects/angular/inc/header.php";?>
    <title><?php print $_SERVER['SERVER_NAME'] . " - Gallery" ?></title>

  </head>

  <body>

    <?php include "/Users/Andrew/Sites/Projects/angular/inc/navbar.php";?>

    <!-- /// ContentBody /// -->
    <main>
      <h2><b>Gallery</b></h2>

      <!-- /// Dynamically import images from "/Img/*" with php /// -->
      <?php
          $dir = GLOB('Img/{*.jpg}', GLOB_BRACE);
          foreach ($dir as $value)
          {
      ?>

          <div class="thumbnails col s12 m6 l4">
            <a href="<?php echo $value ;?>" data-fancybox="images" data-caption="">
              <img src="<?php echo $value ;?>" alt="<?php echo $value ;?>">
            </a>
          </div>

          <?php
          }
          ?>
    </main>

  </body>

  <footer>

    <?php include "/Users/Andrew/Sites/Projects/angular/inc/footer.php";?>

  </footer>

</html>
