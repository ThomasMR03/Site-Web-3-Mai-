<?php $utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']); ?>
<?php if(isset($_SESSION['Auth']) & $utilisateurs->membre_rang == 'Admin'): ?>
<?php else : header('location: index.php'); ?>
<?php endif; ?>


<?php App::getInstance()->getTable('commentaire')->delete($_POST['id']);
header('location: index.php');
?>