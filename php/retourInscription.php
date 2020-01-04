<html>
	<head>
		<meta charset="utf-8"/>
		<title> Sport manager event</title>
	</head>
	<body>
		<?php
		session_start();
		$numeroUtilisateur = $_SESSION['utilisateur'];
		
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$mail = $_POST['mail'];
			$pass = $_POST['pass'];
			$connexion = new mysqli("localhost", "gpi2", "network", "projet");
			if ($connexion->connect_errno) {
				printf("Échec de la connexion : %s %s",
				$connexion->connect_errno, $connexion->connect_error);
				exit();
			}
			// on sélectionne le jeu de caractères
			$connexion->set_charset("utf8");
			// requete à la base de données :
			$maRequete = "INSERT INTO Utilisateur(nom,prenom,mail,motDePasse) VALUES ('$nom','$prenom','$mail',$pass')" ;
			echo $maRequete;
		
			$result = $connexion->query($maRequete);
			if(!$result) {
				echo "<br/>Inscription impossible";
			} else {
				echo "Inscription effectuée<br>";
				echo"<a href='menu.php' > Menu</a>";
			}
			// on ferme la connexion à la base:
			$connexion->close();

		
		?>
	</body>
</html>