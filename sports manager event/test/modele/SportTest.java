package modele;

import static org.junit.Assert.*;

import org.junit.Test;

import modele.Sport;

public class SportTest {

	@Test
	public void testGetNom() {
		Sport c2= new Sport ("Tennis");
		assertEquals("Tennis", c2.getNom());
	}
	
	@Test
	public void testSetNom() {
		Sport c2= new Sport ("Tennis");
		c2.setNom("Basket");
		assertEquals("Basket", c2.getNom());
	}
	
	@Test
	public void testConstructeur() {
		Sport c2= new Sport ();
		assertEquals("football", c2.getNom());
	}
	
	

}
