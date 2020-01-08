package modele;

import static org.junit.Assert.*;

import org.junit.Test;

import modele.Terrain;


public class TerrainTest {

	@Test
	public void testGetLieu() {
		Terrain c2= new Terrain ("Lol");
		assertEquals("Lol", c2.getLieu());
	}
	
}
