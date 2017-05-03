<h2 class="description">Bienvenue sur la page des utilisateurs</h2>
<table class="table">
		<thead>
		<tr>
			<td class="description">Pseudo</td>
			<td class="description">Email</td>
			<td class="description">Date d'inscription</td>
			<td class="description">Rang</td>
		</tr>
		</thead>
		<tbody>
		<?php foreach (App::getInstance()->getTable('User')->all() as $user) : ?></h5>
			<tr>
			<td><p class="action"><?= $user->name ?></p></td>
			<td><p class="action"><?= $user->mail ?></p></td>
			<td><p class="action"><?= $user->date_inscription ?></p></td>
			<td><p class="action"><?= $user->membre_rang ?></p></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>

<?php $user = App::getInstance()->getTable('User')->nombreUser(); ?>
<h4>Nous avons actuellement <?= count($user) ?> membre(s) inscrit(s) !</h4>