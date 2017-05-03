<?php $utilisateurs = App::getInstance()->getTable('User')->find($_SESSION['Id']); ?>
<?php if(isset($_SESSION['Auth']) & $utilisateurs->membre_rang == 'Admin'): ?>
<?php else : header('location: index.php'); ?>
<?php endif; ?>

<h2>Zone admin</h2>

<?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <h2>Bonjour [<span style="color: red"><?= $_SESSION['Auth']?></span>] Bienvenue sur votre espace Admin</h2>
        <?php else : ?>
        <?php endif; ?>


<table class="table">
		<thead>
			<tr>
				<td class="description">Que voulez-vous faire ?</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<tr>
			<td><p class="action">Ajouter un nouvel article !</p></td>
			<td style="padding: 30px; border: none;">
			<a href="admin.php?p=post.add" class="myButton">Let's go !</a>
			</td>
			</tr>
		</tbody>
	</table>