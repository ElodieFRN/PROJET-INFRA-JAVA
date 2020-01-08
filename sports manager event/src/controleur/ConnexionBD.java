package controleur;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;
public class ConnexionBD {
	Connection cnx = null;
	ResultSet Rs = null;
	PreparedStatement ps = null;
	
	
	/*
	 * public static Connection ConnectDB() { try { // chargement de la classe par
	 * son nom Class.forName("org.postgresql.Driver");
	 * 
	 * // Protocole de connexion String protocole = "jdbc:postgresql:" ; // Adresse
	 * IP de l’hôte de la base et port String ip = "localhost" ; // adresse ip
	 * String port = "3306" ; // port utilisé // Nom de la base ; String nomBase =
	 * "test_db" ; // dépend du contexte // Chaîne de connexion String conString =
	 * protocole + "//" + ip + ":" + port + "/" + nomBase ; // Identifiants de
	 * connexion et mot de passe String nomConnexion = "user" ; // dépend du
	 * contexte String motDePasse = "passwd" ; // dépend du contexte // Connexion
	 * Connection con = DriverManager.getConnection( conString, nomConnexion,
	 * motDePasse) ;
	 * 
	 * // Envoi d’un requête générique String sql = "select * from Marins" ;
	 * Statement smt = con.createStatement() ; ResultSet rs = smt.executeQuery(sql)
	 * ; while (rs.next()) { System.out.println(rs.getString("nom")) ; } } catch
	 * (Exception e) { // gestion des exceptions }
	 * 
	 * }
	 */
		
	}

