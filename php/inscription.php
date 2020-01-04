<html>
	<head>
		<meta charset="utf-8"/>
    <link rel="stylesheet" href="stylePagePrincipale.css" />
		<title> Sport manager event</title>
    <link rel="icon" type="image/png" href="logo_titre.png">
	</head>
	<body>
		<div id="banniere">
      <img src="banniere.png">
    </div>
		<form method="post" action="retourInscription.php">
		<fieldset>
       			<legend>Vos coordonnées</legend>
			
  			<label for="nom">Nom* :</label>
  			<input type="text" name="nom" placeholder="ex : VIGNON" required autofocus /><br/>
  			<br/>
  			
  			<label for="prenom">Prénom* :</label>
  			<input type="text" name="prenom" placeholder="ex : Emelyne" required /><br/>
  			<br/>

  			<label for="phone">Téléphone :</label>
  			<input type="tel" name="phone" /><br/>
  				
       
  		</fieldset><br/>
  		<fieldset>
       			<legend>Vos identifiants</legend>	
  				
			<label for="mail">E-mail* :</label>
  			<input type="email" name="mail" placeholder="ex : mail@gmail.com" required /><br/>
  			<br/>

  			<label for="pass">Mot de passe* :</label>
  			<input type="password" name="pass"  required  /><br/>
  		</fieldset>
  			
  		<p> * : informations obligatoires </p>
  			
  		<button type="submit">Envoyer</button>
  		<a href="index.php" ><input type="button" value="Annuler" ></a><br/>
		</form>
	</body>
</html>