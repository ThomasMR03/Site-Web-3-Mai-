<div class="row" style="margin:0;padding:0;">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-7" style="background:rgba(0,0,0,0.7);">
		<div class="row">
		<div id="scroll"></div>
		<div class="col-md-12"><h1 class="actu" style="padding-left: 30px;">Actualité</h1></div>
		</div>
		<div class="row" id="actuu">
		<?php foreach (App::getInstance()->getTable('post')->last() as $post) : ?>
			<span>
			<a href="<?= $post->Url ?>">
				<div id="article" class="col-md-6">
					<div class="ActuHover">
						<div class="imageArticle"><img src="img/<?=$post->img?>"></div>
						<div class="contenuArticle">
								<h2><a href="<?= $post->Url ?>"> <?= $post->titre ?> </a></h2>
								<h4>Article posté par <?= $post->auteur ?> le <?= $post->date_creation_fr ?></h4>
								<p class="extrait"><?= $post->contenu ?></p>
						</div>
					</div>
				</div>
			</a>
		</span>
		<?php endforeach; ?>

		</div>
	</div>
	<div class="col-md-1"></div>

	<div class="col-md-2" style="padding: 0;">

	</div>
</div>