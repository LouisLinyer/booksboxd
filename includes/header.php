<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<div class="headerContainer">
	<div class="logoContainer">
		<img class="logo" src="/booksbox/assets/icons/stack-of-books.png">
		<a href="/booksbox/main.php"><p class="logoName">Bookbox</p></a>
	</div>
	<div class="headerLinksContainer">
		<p class="textLinkHeader openModalBtn">Sign in</p>
		<a class="textLinkHeader" href="/booksbox/pages/livres.php"><p class="text">Livres</p></a>
		<a class="textLinkHeader" href="/booksbox/pages/listes.php"><p class="text">Listes</p></a>
		<a class="textLinkHeader" href="/booksbox/pages/membres.php"><p class="text">Membres</p></a>
	</div>
	<div class="searchContainer">
		<input class="search" type="text" name="search">
	</div>
</div>

<div id="loginModal" class="modal">
	<div class="modalContainer">
		<span class="close">&times;</span>
		<form method="POST" action="login.php" class="formContainer">
			<h2 class="modalTitle">Connexion</h2>
			<br><br>
			<label style="margin-bottom: 5px">Nom d'utilisateur :</label>
			<input class="modalInput" type="text" name="username" placeholder="Nom d'utilisateur" required>
			<label style="margin-bottom: 5px">Mot de passe :</label>
			<input class="modalInput" type="password" name="password" placeholder="Mot de passe" required>
			<label style="display: flex; justify-content: left; align-items: center; margin-bottom: 10px;">
				<input type="checkbox" name="remember"> Rester connecté
			</label>
			<button type="submit" class="modalSubmit">Se connecter</button>
			<a href="pages/signup.php" style="font-size: 14px;"><span style="color: darkviolet;">Créer</span> un compte</a>
		</form>
	</div>
</div>