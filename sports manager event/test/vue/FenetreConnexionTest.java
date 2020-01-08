package vue;

import static org.junit.Assert.*;

import java.awt.Color;

import javax.swing.JFrame;
import javax.swing.SwingUtilities;

import org.junit.Test;

public class FenetreConnexionTest {

	public FenetreConnexionTest() { 
		testConstructeurParDefaut();
	}
	
	private void testConstructeurParDefaut(){
		JFrame maFenetre = new JFrame("Se connecter");
		FenetreConnexion premierefenetre = new FenetreConnexion (700,700);

		maFenetre.add(premierefenetre);
		maFenetre.setLocationRelativeTo(null);
		maFenetre.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		maFenetre.pack();
		
		maFenetre.setVisible(true);

	}

	
	public static void main(String [] args) { 
		SwingUtilities.invokeLater(new Runnable(){ 
			@Override 
			public void run() {
				new FenetreConnexionTest();
			}
		});
	}

}
