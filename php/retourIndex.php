<html>
	<head>
		<meta charset="utf-8"/>
		<title> Sport manager event</title>
	</head>
	<body>
		<?php
			$login = $_POST['login'];
			$pass = $_POST['pass'];
			$connexion = resource pg_connect (string $connection_string [, int $connect_type ])
			//$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin123");s
			//new mysqli("localhost", "gpi2", "network", "projet");
			if ($connexion->connect_errno) {
				printf("Échec de la connexion : %s %s",
				$connexion->connect_errno, $connexion->connect_error);
				exit();
			}
			// on sélectionne le jeu de caractères
			$connexion->set_charset("utf8");
			// requete à la base de données :
			$maRequete = "SELECT login, motDePasse,numUtilisateur FROM Utilisateur WHERE login='$login' AND motDePasse='$pass'" ;
			echo $maRequete;
			
			$result = $connexion->query($maRequete);
			if(!$result) {
				echo "la requete ne s’est pas exécutée";
			} else {
				echo "la requete s’est bien passée<br>";
				
				// on va chercher les résultats:
				$resultat = $result->fetch_assoc(); // ...
				
				// on libère le tableau des résultats:
				$result->free();
				$numeroUtilisateur = $resultat["numUtilisateur"];
				
				// mémoriser une valeur:
				session_start();
				$_SESSION['utilisateur'] = $numeroUtilisateur;
				
				echo $numeroUtilisateur;
				echo '<br>';
				echo'<a href="menu.php" > Menu principal</a>';
			}
			// on ferme la connexion à la base:
			$connexion->close();
			
		?>
	</body>
</html>