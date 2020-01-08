package vue;

import java.awt.Dimension;
import java.awt.GridLayout;

import javax.swing.BoxLayout;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;


public class FenetreConnexion extends JPanel {
	
	private static final long serialVersionUID = 1L;
	public static final String UTILISATEUR_PSEUDO = "Pseudo";
	public static final String UTILISATEUR_MOT_DE_PASSE = "Mot de passe";
	private JLabel labelPseudo = new JLabel(UTILISATEUR_PSEUDO);
	private JLabel labelMotDePasse = new JLabel(UTILISATEUR_MOT_DE_PASSE);
	private JTextField Pseudo = new JTextField("");
	private JTextField MotDePasse = new JTextField("");
	private JButton Valider; 
	private JButton Annuler; 
		
	public FenetreConnexion(int largeur, int hauteur){
		this.setPreferredSize(new Dimension(largeur, hauteur));
		Valider = new JButton ("Valider");
		Annuler = new JButton ("Annuler");
		initComponents();
	}
	
	private void initComponents() {
		this.setLayout(new GridLayout(20, 1));
		this.add(labelPseudo);
		this.add(Pseudo);
		this.add(labelMotDePasse);
		this.add(MotDePasse);
		JPanel b3 = new JPanel();
	    b3.setLayout(new BoxLayout(b3, BoxLayout.LINE_AXIS));
	    b3.add(Valider);
	    b3.add(Annuler);
	    this.add(b3);
		
	}
	
	
}
