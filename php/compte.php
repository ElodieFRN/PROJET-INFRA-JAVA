<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css" />
    	<link rel="stylesheet" href="styleCompte.css" />
    	<link rel="" type="" href="create.php" />
		<title>Sport manager event - Compte</title>
		<link rel="icon" type="image/png" href="logo_titre.png">
	</head>
	<body>
		<header>
			<a href="menu.php" title="Sport Event Manager - Accueil">
				<img src="logo_titre.png" width="25%">
			</a>
			<h1>Compte personnel</h1>
			<a id= "deco" href="index.php" ><input type="button" value="Déconnexion" ></a>
		</header>
	    <section id="marge">
	    	<nav>
	    	</br>
			  <ul>
			    <li><a href="menu.php">Page d'accueil</a></li></br>
			    <li><a href="compte.php">Compte</a></li></br>
			    <li><a href="event.php">Evénements</a></li></br>
			    <li><a href="create.php">Création d'événements</a></li></br>
			  </ul>
			</nav>
	    </section>
	    <section id="data">
	    	<article id="info">
	    		<fieldset>
	       			<legend>Informations personnelles</legend>
		    		<p> Nom : </p>
		    		<p> Prénom : </p>
		    		<p> Mail : </p>
		    		<p> Téléphone : </p>
		    		<a id= "modifProfil" href="modifProfil.php" ><input type="button" value="Modifier votre profil" ></a><br/><br/>
		    		<a id= "mdp" href="changePassword.php" ><input type="button" value="Modifier votre mot de passe" ></a><br/>
	    		</fieldset>
	    	</article>
	    	<br/>
	    	<article id="sport">
	    		<fieldset>
	       			<legend>Sport(s) pratiqué(s)</legend>
	    			<p> recup bdd liste des sports </p>
	    			<p> sinon Vous ne pratiquez aucun sport </p>

	    			<h3> Ajouter un sport : </h3>
	    			<form method="post" action="ajoutSport.php">
					   <p>
					       <label for="sport">Quel sport pratiquez-vous ?</label><br/>
					       <select name="sport" id="sport"><br/>
					       		<option value="none" selected>--Sélectionner un sport--</option>
					           <option value="basket">Basketball</option>
					           <option value="foot">Football</option>
					           <option value="tennis">Tennis</option>
					           <option value="volley">Volleyball</option>
					       </select>
					   </p>

					   <p>
					       <label for="niveau">A quel niveau ?</label><br/>
					       <select name="niveau" id="niveau"><br/>
					       	<option value="none" selected>--Sélectionner un niveau--</option>
					           <option value="debutant">Débutant</option>
					           <option value="amateur">Amateur</option>
					           <option value="expert">Expert</option>
					       </select>
					   </p>
					   <button type="submit">Sauvegarder</button>
					</form>
					<a id= "modifSport" href="modifSport.php" ><input type="button" value="Modifier vos sports" ></a><br/>
	    		</fieldset>
	    	</article>
	    </section>
   	</body>
   	<br/>
   	<footer>
    	<h3> Contactez-nous </h3>
    	<article id="contact">
	    	<article id="devJAVA"><h4> Développeurs JAVA </h4>
	    		<p>elodie.francois@reseau.eseo.fr</p>
	    		<p>kevin.nzeyimana@reseau.eseo.fr</p></article>
	    	<article id="devWEB"><h4> Développeurs WEB </h4>
	    		<p>goulwen.plassart@reseau.eseo.fr</p>
	    		<p>emelyne.vignon@reseau.eseo.fr</p></article>
	    	<article id="infra"><h4> INFRA </h4>
	    		<p>cesarlucas.silvain@reseau.eseo.fr</p>
	    		<p>simon.vasseur@reseau.eseo.fr</p></article>
    	</article>
    </footer>
</html>