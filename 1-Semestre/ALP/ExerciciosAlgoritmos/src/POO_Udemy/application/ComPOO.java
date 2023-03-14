package POO_Udemy.application;

import java.util.Locale;
import java.util.Scanner;

public class ComPOO {
	
	public static void main(String[] args) {
		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner (System.in);
		Triangle x = new Triangle();
		Triangle y = new Triangle(); 
		
		System.out.println("Medidas Triangulo X: ");
		x.A = sc.nextDouble(); 
		x.B = sc.nextDouble(); 
		x.C = sc.nextDouble(); 
		System.out.println("Medidas Triangulo Y: ");
		y.A = sc.nextDouble();
		y.B = sc.nextDouble();
		y.C = sc.nextDouble();
		
		double p = (x.A + x.B + x.C) / 2.0;
		double areaX = Math.sqrt(p * (p - x.A) * (p - x.B) * (p - x.C));
		p = (y.A + y.B + y.C) / 2.0;
		double areaY = Math.sqrt(p * (p - y.A) * (p - y.B) * (p - y.C));
		
		System.out.printf("Triangle X area: %.4f%n", areaX);
		System.out.printf("Triangle Y area: %.4f%n", areaY);
		
		if (areaX > areaY) {
			System.out.println("Larger area: X");
		}
		else {
			System.out.println("Larger area: Y");
		}
		
		
		sc.close();
	}
	
	
	
}
