<?php if(isset($_SESSION['Auth'])): ?> <!-- Si connecté affiche Bonjour Pseudo, sinon affiche Visiteur -->
        <h2>Bonjour [<span style="color: red"><?= $_SESSION['Auth']?></span>] Je vous souhaite la bienvenue sur mon site web.</h2>
        <?php else : ?>
          <h2><a style="color: red;">Bonjour, bienvenue sur mon site.</a></h2>
          <h4><a href="index.php?p=Register"><span class="glyphicon glyphicon-user"></span> Souhaitez vous vous inscrire ?</a></h4>
          <h4><a href="index.php?p=Login"><span class="glyphicon glyphicon-log-in"></span> Souhaitez vous vous connecter ?</a></h4>
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
			<td><p class="action">Consulter les nouveaux articles ?</p></td>
			<td style="padding: 30px; border: none;">
			<a href="admin.php?p=posts.add" id="buttonAction">Let's go !</a>
			</td>
			</tr>

			<tr>
				<td><p class="action">Consulter la liste des utilisateurs ?</p></td>
				<td style="padding: 30px; border: none;">
					<a href="index.php?p=Utilisateur" id="buttonAction">Let's go !</a>
				</td>
			</tr>
		</tbody>
	</table>