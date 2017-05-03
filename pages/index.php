<h2>Bonjour [<span style="color: red"><?= $_SESSION['Auth']?></span>] Je vous souhaite la bienvenue sur mon site web.</h2>


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
					<a href="admin.php?p=users.index" id="buttonAction">Let's go !</a>
				</td>
			</tr>
		</tbody>
	</table>