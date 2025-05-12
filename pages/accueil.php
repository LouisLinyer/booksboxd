<?php 
	$cards = [
		["src" => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F71QdK5TrlZL._SL1331_.jpg&f=1&nofb=1&ipt=8c347c3b5d5b7363f76f837bc19d88f59fcc63712c84a047f688407a1fa3c735', "alt" => 'Le Tour du monde en 80 jours'],
		["src" => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F810sNAUlgxL._AC_UF894%2C1000_QL80_.jpg&f=1&nofb=1&ipt=2b46f61decba84cc032017a1ad3210a17e400bf2cc325a731bb40f9930442111', "alt" => 'Dune, Messiah'],
		["src" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F81dViM5jyhL._SL1500_.jpg&f=1&nofb=1&ipt=7ce47630e948735d5cdf0a80c223081db2d3241335cc939c671ab7cdbab385cf", "alt" => "Le problème à trois corps"],
		["src" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F51JEItnoKFL.jpg&f=1&nofb=1&ipt=da192539af2dedc853ebe063acef1f78bd42291f981f38c611c3bfdda89b19c1", "alt" => "Les Misérables"],
		["src" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F5b%2Fef%2Fda%2F5befdade213351047b11fe7ab5b8a6c3.jpg&f=1&nofb=1&ipt=4884fb0e49a4b58241038d4371cb4fb0d6c420447d3aeabe03de08932fcb3860", "alt" => "Le Horla"],
		["src" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.lalibrairie.com%2Fcache%2Fimg%2Flivres%2F975%2F9782012031975.jpg&f=1&nofb=1&ipt=ae1996d3b0f41e0cc905043d968597605b2c35e0d07add58118855144a49205d", "alt" => "Vingt mille lieues sous les mers"]
	]
?>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<div class="accueilContainer">
	<img class="fondImg" src="https://cdn.pixabay.com/photo/2024/03/19/19/08/book-8643905_1280.jpg">
	
	<div class="textContainer">
		<p style="color: var(--textColorW);">Enregistrez les livres que vous avez lu.</p>
		<p style="color: var(--textColorW);">Suivez ceux que vous voulez lire.</p>
		<p style="color: var(--textColorW);">Dites à vos amis ce qui est bien.</p>
	</div>
	
	<button class="button">Commencez -- c'est gratuit!</button>

	<p class="textAccueil">Le réseau social des amoureux de livres. Aussi disponible sur Apple et Android</p>

	<div class="cardContainer ">
		<?php foreach ($cards as $card): ?>
			<img class="booksCard" src="<?= $card["src"] ?> alt="<?= $card["alt"]?> >
		<?php endforeach ?>
	</div>

	<div class="textAccueil" style="font-weight: 600; display: flex; justify-content: center; align-items: center; flex-direction: column;">
		<p style="margin-bottom: 20px; font-size: 24px;">Ecris et partage tes critiques. Confectionnez vos playlists. Partagez votre vie en livre.</p>
		<p style="font-size: 16px;">Ci-dessous ce trouve des critiques et des listes populaires de la semaine. Créer un compte pour faire les votres.</p>
	</div>
</div>