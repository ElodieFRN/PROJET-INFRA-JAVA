package modele;

public class Sport {
	public static final String SPORT_PAR_DEFAUT = "football";
	public String nom;
	
	public Sport (String nom) {
		this.nom=nom;
	}
	
	public Sport() {
		this(SPORT_PAR_DEFAUT);
	}
	
	public String getNom() {
		return this.nom;
	}
	
	public void setNom(String nvoNom) {
		this.nom=nvoNom;
	}

}
