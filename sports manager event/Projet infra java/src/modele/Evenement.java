package modele;

import java.util.Date;

import modele.Sport;

public class Evenement {
	public String date;
	public String heureDebut;
	public String heureFin;
	public int id_evenement;
	public Sport activite;
	
	public Evenement(String date, String heureDebut, String heureFin, int id_evenement, Sport activite) {
		this.date=date;
		this.heureDebut=heureDebut;
		this.heureFin=heureFin;
		this.id_evenement=id_evenement;
		this.activite=activite;
	}
	
	public Evenement() {
		this("01/01/2019", "15h00", "17h00", 3, new Sport());
	}
	
	public Evenement(Sport activite) {
		this("01/01/2019", "15h00", "17h00", 3, activite);
	}
	
	public Evenement(String date, String heureDebut, String heureFin,  Sport activite) {
		this(date, heureDebut, heureFin, 3, activite);
	}
	
	public String getDate() {
		return this.date;
	}
	
	public String getHeureDebut() {
		return this.heureDebut;
	}
	
	public String getHeureFin() {
		return this.heureFin;
	}
	
	public int getIdEvenement() {
		return this.id_evenement;
	}
	
	public Sport getActivite() {
		return this.activite;
	}
	
	public void setDate(String nvoDate) {
		this.date=nvoDate;
	}
	
	public void setHeureDebut(String nvoHeureDebut) {
		this.heureDebut=nvoHeureDebut;
	}
	
	public void setHeureFin(String nvoHeureFin) {
		this.heureFin=nvoHeureFin;
	}
	
	public void setIdEvenement(int nvoIdEve) {
		this.id_evenement=nvoIdEve;
	}
	
	public void setActivite(Sport nvoActivite) {
		this.activite=nvoActivite;
	}
	
}
