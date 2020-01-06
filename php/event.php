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
			<a id= "deco" href="index.php">Déconnexion</a>
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
	  		<select name="filtrer" id="filtrer"><br/>
	       		<option id="none" value="none" disabled selected>-Filtrer-</option>
	           <option value="debutant" type="button" onclick="alert('Hello world!')">Par sport</option>
	           <option value="amateur" type="button">Par lieu</option>
	           <option value="expert" type="button">Par horaire</option>
	       </select>
	       
	       <table>
	       	<h2>Liste des événements</h2>
			<tr>
				<th>Sport</th>
				<th>Description</th>
				<th>Lieu</th>
				<th>Date/Horaire</th>
			</tr>
			<tr>
				<td>Basketball</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Football</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Tennis</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
		<!-- <?php
		
		// rechercher une valeur:
		session_start();
		$numeroUtilisateur = $_SESSION['utilisateur'];

		$maRequete = "SELECT numConcours,description,etat FROM Concours" ;
		echo $maRequete;
		$connexion = new mysqli("localhost", "gpi2", "network", "projet");
		$result = $connexion->query($maRequete);
		if(!$result) {
			echo "la requete ne s’est pas exécutée";
		} else {
			echo "la requete s’est bien passée<br/>";
			$listeConcours = $result->fetch_assoc();
			$refConcours = '';
			if(empty($listeConcours)){
				echo "pas de concours";
			}else{
			
				while($listeConcours){
					$description = $listeConcours['description'];
					$num = $listeConcours['numConcours'];
					$etat = $listeConcours['etat'];
					
					
					$listeConcours = $result->fetch_assoc();
					
					echo '
					<tr>
						<td>'.$num.'</td>
						<td>'.$description.'</td>
						<td>'.$etat.'</td>
						<td>'.$refConcours.'<a href="menuConcours.php?ref='.$num.'">voir</a>'.'</td>
					</tr>
					';			
				}
			}
		}
		$connexion->close();
		?> -->
		</table>
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