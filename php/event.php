<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css" />
   		<link rel="stylesheet" href="styleEvent.css" />
		<title> Sport manager event - Evénements</title>
		<link rel="icon" type="image/png" href="logo_titre.png">
	</head>
	<body>
		<header>
			<a href="menu.php" title="Sport Event Manager - Accueil">
				<img src="logo_titre.png" width="25%">
			</a>
			<h1>Evénements</h1>
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
	  	<section>
	  		<select name="filtrer" id="filtrer"><br/>
	       		<option value="none" selected>-Filtrer-</option>
	           <option value="debutant" type="button" onclick="alert('Hello world!')">Par sport</option>
	           <option value="amateur" type="button">Par lieu</option>
	           <option value="expert" type="button">Par horaire</option>
	       </select>
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