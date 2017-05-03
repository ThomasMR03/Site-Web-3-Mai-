<?php if(isset($_SESSION['Auth'])){
$utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']);
} ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= App::getInstance()->titre; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Mon Site Web</a>
    </div>
    <ul class="nav navbar-nav">

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté Admin affiche Panel Admin, sinon affiche rien -->
          <?php if($utilisateurs->membre_rang == 'Admin'): ?>
       <li><a href="admin.php"><span class="glyphicon glyphicon-lock"></span> Panel Admin</a></li>
          <?php else : ?><?php endif; ?>
       <?php else : ?>
       <?php endif; ?>

      <?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <li><a style="color: white;">Bonjour <?= $_SESSION['Auth']; ?></a></li>
        <?php else : ?>
          <li><a style="color: white;"> Vous n'êtes pas connecté</a></li>
          <li><a href="index.php?p=Register"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
        <?php endif; ?>

      
      <li><a href="index.php?p=<?=$connect ?>"><span class="glyphicon glyphicon-log-in"></span>  <?= $connect ?></a></li>
    </ul>
  </div>
</nav>
    <div class="container">

      <div class="starter-template">
        <?= $content; ?>
      </div>

    </div><!-- /.container -->

  </body>
</html>
