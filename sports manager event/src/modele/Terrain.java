package modele;

public class Terrain {
	
	public String lieu;
	public int id_terrain;
	public boolean disponible;
	public int nb_joueurs;
	
	public Terrain(String lieu, int id_terrain, boolean disponible, int nb_joueurs) {
		this.lieu=lieu;
		this.id_terrain=id_terrain;
		this.disponible=disponible;
		this.nb_joueurs=nb_joueurs;
	}
	
	public Terrain() {
		this("7 rue Rosiers, Angers", 3, true, 5);
	}
	
	public Terrain(String lieu) {
		this(lieu, 3, true, 5);
	}
	
	public Terrain(int nb_joueurs) {
		this("7 rue Rosiers, Angers", 3, true, nb_joueurs);
	}
	
	public String getLieu() {
		return this.lieu;
	}
	
	public int getIdTerrain() {
		return this.id_terrain;
	}
	
	public boolean getDisponible() {
		return this.disponible;
	}
	
	public int getNbJoueurs() {
		return this.nb_joueurs;
	}
	
	public void setLieu(String nvoLieu) {
		this.lieu=nvoLieu;
	}
	
	public void setIdTerrain(int nvoId) {
		this.id_terrain=nvoId;
	}
	
	public void setDisponible(boolean nvoDispo) {
		this.disponible=nvoDispo;
	}
	
	public void setNbJoueurs(int nvoNb) {
		this.nb_joueurs=nvoNb;
	}
	
	

}
