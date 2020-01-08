package vue;

import java.awt.BorderLayout;
import java.awt.Dimension;
import java.awt.GridLayout;

import javax.swing.BoxLayout;
import javax.swing.ButtonGroup;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JPanel;

public class FenetreGestion extends JPanel {
	
	private static final long serialVersionUID = 1L;
	public static final int LARGEUR_PAR_DEFAUT = 700;
	public static final int HAUTEUR_PAR_DEFAUT = 700;
	public static final String SPORT_EVENEMENT = "Basket";
	public static final String SPORT_EVENEMENT2 = "Tennis";
	private JLabel labelSport = new JLabel(SPORT_EVENEMENT);
	private JButton afficher;
	private JButton modifier;
	private JButton effacer;
	
	public FenetreGestion(int largeur, int hauteur){
		this.setPreferredSize(new Dimension(largeur, hauteur));
		afficher = new JButton ("Afficher informations");
		modifier = new JButton ("Modifier informations");
		effacer = new JButton ("Effacer informations");
		ButtonGroup buttons = new ButtonGroup(); 
		buttons.add(afficher);
		buttons.add(modifier);
		buttons.add(effacer);
		initComponents();
	}
	
	private void initComponents() {
		this.setLayout(new GridLayout(20, 1));
		this.add(labelSport);
		JPanel b3 = new JPanel();
	    b3.setLayout(new BoxLayout(b3, BoxLayout.LINE_AXIS));
	    b3.add(afficher);
	    b3.add(modifier);
	    b3.add(effacer);
	    this.add(b3);
		
	}
	

}
