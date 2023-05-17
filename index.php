<?php
include __DIR__ . '/Views/header.php';

include __DIR__ . '/Database/db.php';
?>

<h1>Movies</h1>
<div class="row">
	<?php foreach ($movies as $movie) : ?>
		<div class="col-6">
			<div class="card">
				<div class="card-img-top">
					<img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
				</div>
				<div class="card-body">
					<h3><?= $movie->title ?></h3>
					<p><?= $movie->getDetails() ?>
					<p>Generi: <?= $movie->get_genres_as_string() ?></p>
					</p>
				</div>
			</div>
		</div>

	<?php endforeach; ?>
</div>

<?php
include __DIR__ . '/Views/footer.php'
?>