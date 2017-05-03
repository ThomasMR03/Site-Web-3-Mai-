<?php


$date = date('Y-m-d');

if (!empty($_POST)) {
if (isset($_POST['name'], $_POST['password'], $_POST['mail'], $_POST['date_inscription'])){
	if(empty($_POST['name']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['name'])){
			echo "Votre pseudo n'est pas valide (alpha_numerique)"; //Echo pour pseudo non valide
		}else{
	if(empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
			echo "Votre mail n'est pas valide."; //Echo pour mail non valide
		}else{
 	$req=App::getInstance()->getTable('User')->create([

 	'name' => htmlspecialchars($_POST['name']),
 	'password' => sha1(htmlspecialchars($_POST['password'])),
 	'mail' => htmlspecialchars($_POST['mail']),
 	'date_inscription' => htmlspecialchars($_POST['date_inscription'])]);
 	if ($req) {
				header('location: index.php?p=Login');
			}
		}
		}
	}
 }
?>
 	



<div class="row" style="width: 99%;">
<div class="col-md-4"></div>

<div class="col-md-4" id="inscription">
 <h2>Inscription</h2>
 <form action="" method="post" name="formulaire" autocomplete="off">
 	<h3>Pseudonyme</h3>
 	<input type="text" name="name" placeholder="Votre Pseudo" required="required">
 	<h6 style="margin-top: -20px; color: grey;">Caractere autorisé :  Majuscules, minuscules, - , _ </h6> <br>
 	<h3>Adresse mail</h3>
 	<input type="email" required="required" name="mail" placeholder="Votre Mail">
 	<h6 style="margin-top: -20px; color: grey; margin-bottom: 50px;">Veuillez saisir une adresse valide, une confirmation vous sera demandé</h6>
 	<h3>Mot de passe</h3>
 	<input type="password" name="password" placeholder="Votre mot de passe" required="required">
 	<input type="hidden" name="date_inscription" value="<?= $date ?>">
 	<button type="submit">Valider</button>
 </form>
 </div>

 </div>


