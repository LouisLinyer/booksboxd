<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<?php 
	
	$reviews = [
		[
			"img" => "https://images-na.ssl-images-amazon.com/images/I/61AjXMIuzAL._SX195_.jpg",
			"title" => "The Warmth of Other Suns",
			"reviewAutor" => "Mike",
			"stars" => 5,
			"reviewTitle" => "Pas mal",
			"likes" => 1050
		],
		[
			"img" => "https://www.babelio.com/couv/CVT_Le-Conseiller-tome-1--Dans-lombre-des-Tudors_3567.jpg",
			"title" => "Le Conseiller, tome 1 : Dans l'ombre des Tudors",
			"reviewAutor" => "Hilary",
			"stars" => 3,
			"reviewTitle" => "Royauté et chaos, cocktail explosif",
			"likes" => 812
		],
		[
			"img" => "https://www.babelio.com/couv/CVT_Le-Monde-connu_974.jpg",
			"title" => "Le Monde connu",
			"reviewAutor" => "Edward",
			"stars" => 3,
			"reviewTitle" => "Le monde connu ne serait il pas finalement inconnu",
			"likes" => 279
		],
		[
			"img" => "https://www.babelio.com/couv/CVT_Les-corrections_8635.jpeg",
			"title" => "Les corrections",
			"reviewAutor" => "Jonathan",
			"stars" => 4,
			"reviewTitle" => "Bataille en famille",
			"likes" => 3197
		],
		[
			"img" => "https://www.babelio.com/couv/CVT_2483_707688.jpg",
			"title" => "2666",
			"reviewAutor" => "Roberto",
			"stars" => 4,
			"reviewTitle" => "La condition humaine rongé par le mal",
			"likes" => 2054
		],

	]

?>

<div class="reviewContainer">
		<div class="titreReview"><p>CRITIQUES POPULAIRES CE WEEKEND</p><p>PLUS</p></div>
	<?php foreach ($reviews as $review): ?>
		<div class="reviewCardContainer">
			<img style="width: 80px; margin-right: 20px; border-radius: 3px;" src="<?= $review['img'] ?>">
			<div>
				<h3 style="font-weight: 800; margin-bottom: 10px; color: white;"><?= $review['title'] ?></h3>
				<div style="display: flex; margin-bottom: 5px;">
					<p style="margin-right: 10px;"><?= $review['reviewAutor'] ?></p>
					<span style="color: white;"><?= $review['stars'] ?></span>
				</div>
				<p style="margin-bottom: 5px;"><?= $review['reviewTitle'] ?></p>
				<p><?= $review['likes'].' ' ?>likes</p>
			</div>
		</div>
	<?php endforeach ?>
</div>