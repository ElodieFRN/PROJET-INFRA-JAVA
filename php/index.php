<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="stylePagePrincipale.css" />
		<title> Sport manager event </title>
		<link rel="icon" type="image/png" href="logo_titre.png">
	</head>
	<body>
		<div id="banniere">
			<img src="banniere.png">
		</div>
		<form method="post" action="retourIndex.php">
  			<p>
  				<label for="login">Identifiant :</label><br/>
  				<input type="text" name="login" placeholder="ex : mail@gmail.com"/>
				<br/><br/>
  				<label for="pass">Mot de passe :</label><br/>
				<input type="password" name="pass" />
  			</p>
  			<button type="submit">Se connecter</button><br/><br/>
		</form>
		<form method="post" action="inscription.php">
			<p> Pas de compte ? 
			<!-- <a id="inscription" href="inscription.php" style="vertical-align:middle"><input type="button" value="Rejoins-nous !" ></a> -->
			<button class="button" type="submit" style="vertical-align:middle">
				<span>Rejoins-nous !</span>
			</button>
			</p>
		</form>
	</body>
</html>