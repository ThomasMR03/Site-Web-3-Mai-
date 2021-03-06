<?php
use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}

$app = App::getInstance();
$auth = new DBAuth($app->getDb());

//connexion utilisateur via login.php
if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($auth->login($_POST['username'], $_POST['password'])) {
			//prevoir un message flash
		}else{
			header('location: index.php?p=Login');
			exit();
		}
	}
}
//fin connexion utilisateur via login.php

if (!$auth->logged()) {
	$app->forbidden();
}

$connect = "Disconnect";

ob_start();
if ($page==='home') {
	require ROOT.'/pages/admin/index.php';
}
elseif ($page==='post.single'){
	require ROOT.'/pages/admin/post/single.php';
}
elseif ($page==='deleteCom'){
	require ROOT.'/pages/admin/commentaire/deleteCom.php';
}
elseif ($page==='deleteUser'){
	require ROOT.'/pages/admin/utilisateur/deleteUser.php';
}
elseif ($page==='post.add'){
	require ROOT.'/pages/admin/post/add.php';
}else{
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; 