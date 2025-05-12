<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<?php 

	$lists = [
		[
			"img1" => "https://www.babelio.com/couv/CVT_Don-Quichotte_5708.jpg",
			"img2" => "https://www.babelio.com/couv/CVT_5953_756179.jpg",
			"img3" => "https://www.babelio.com/couv/CVT_Gatsby-le-magnifique_4729.jpg",
			"img4" => "https://www.babelio.com/couv/CVT_20031_aj_m_5224.jpg",
			"name" => "Livres à lire au moins une fois dans sa vie",
			"userImg" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fone-piece-shop.fr%2Fwp-content%2Fuploads%2F2021%2F12%2Fmini_monkey-d-luffy-comment-etre-optimiste.jpeg&f=1&nofb=1&ipt=0d917e8adffa3df3cfea0d648556efa73f010aa64ca5d20732cb5789ec869752",
			"listUser" => "hailey"
		],
		[
			"img1" => "https://www.babelio.com/couv/CVT_La-Guerre-et-la-Paix-tome-1_1525.jpg",
			"img2" => "https://www.babelio.com/couv/CVT_11171_608872.jpg",
			"img3" => "https://www.babelio.com/couv/CVT_cvt_Madame-Bovary_1004.jpg",
			"img4" => "https://www.babelio.com/couv/CVT_Les-Hauts-de-Hurle-Vent_7932.jpg",
			"name" => "Mes livres préférés",
			"userImg" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimages2.fanpop.com%2Fimage%2Fphotos%2F10900000%2FUzumaki-Naruto-naruto-10920951-1208-935.jpg&f=1&nofb=1&ipt=7238bbb4f2f573f4ddd52240c16c4e69a0b5047a149dfa4f7de17ed1dc470637",
			"listUser" => "bel" 
		]
	]
?>

<div class="listContainer">
	<div class="titreListe"><p>LISTES POPULAIRES</p><p>PLUS</p></div>
	<?php foreach ($lists as $list): ?>
		<div class="listCardContainer">
			<div class="imgsContainer">
				<img style="width: 80px; height: 120px; margin-left: 0; border-radius: 3px;" src="<?= $list['img1']?>">
				<img style="width: 80px; height: 120px; margin-left: -40px; border-radius: 3px;" src="<?= $list['img2']?>">
				<img style="width: 80px; height: 120px; margin-left: -40px; border-radius: 3px;" src="<?= $list['img3']?>">
				<img style="width: 80px; height: 120px; margin-left: -40px; border-radius: 3px;" src="<?= $list['img4']?>">
			</div>
			<p style="margin-bottom: 10px;"><?= $list['name']?></p>
			<div class="userContainer">
				<img style="width: 20px; height: 20px; border-radius: 100%; margin-right: 5px" src="<?= $list['userImg']?>">
				<p><?= $list['listUser']?></p>
			</div>
		</div>
	<?php endforeach ?>
</div>