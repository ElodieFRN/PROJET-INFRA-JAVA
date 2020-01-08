package modele;

import java.util.List;

public class Utilisateur {
	public int id_utilisateur;
	public String pseudo;
	public String mot_de_passe;
	public String email;
	public String statut;
	private List<Evenement> evenement;
	
	public Utilisateur(int id_utilisateur, String pseudo, String mot_de_passe, String email, String statut) {
		this.id_utilisateur=id_utilisateur;
		this.pseudo=pseudo;
		this.mot_de_passe=mot_de_passe;
		this.email=email;
		this.statut=statut;
	}
	
	public Utilisateur() {
		this(2, "elo", "bg", "elodie@gmail.com", "administrateur");
	}
	
	
	public int getIdUtilisateur() {
		return this.id_utilisateur;
	}
	
	public String getPseudo() {
		return this.pseudo;
	}
	
	public String getMotDePasse() {
		return this.mot_de_passe;
	}
	
	public String getEmail() {
		return this.email;
	}
	
	public String getStatut() {
		return this.statut;
	}
	
	public void setIdUtilisateur(int nvoIdUtilisateur) {
		this.id_utilisateur=nvoIdUtilisateur;
	}
	
	public void setPseudo(String nvoPseudo) {
		this.pseudo=nvoPseudo;
	}
	
	public void setMotDePasse(String nvoMotDePasse) {
		this.mot_de_passe=nvoMotDePasse;
	}
	
	public void setEmail(String nvoEmail) {
		this.email=nvoEmail;
	}
	
	public void setStatut(String nvoStatut) {
		this.statut=nvoStatut;
	}
	
	public void reserver_terrain(Terrain terrain) {
		terrain.setDisponible(false);
	}
	
	public Evenement creer_evenement(String date, String heureDebut, String heureFin, Sport activite) {
		return new Evenement(date, heureDebut, heureFin, activite);
	}
	
	public void supprimer_evenement() {
		
	}
	
	public void modifier_evenement(Evenement evenement, String date, String heureDebut, String heureFin, Sport activite) {
		evenement.setActivite(activite);
		evenement.setDate(date);
		evenement.setHeureDebut(heureDebut);
		evenement.setHeureFin(heureFin);
	}
	
	public void connecter() {
		
	}
	
	public void deconnecter() {
		
	}

}
