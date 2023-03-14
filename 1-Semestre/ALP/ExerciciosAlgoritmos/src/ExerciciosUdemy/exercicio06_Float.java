package ExerciciosUdemy;

import java.util.Locale;
import java.util.Scanner;

public class exercicio06_Float {

	public static void main(String[] args) {

		Locale.setDefault(Locale.US);
		Scanner sc = new Scanner(System.in);
		
		double A,B,C,circulo,triangulo,trapezio,retangulo,quadrado; 
		
		A = sc.nextDouble();
		B = sc.nextDouble();
		C = sc.nextDouble();
		
		circulo = 3.14159 * Math.pow(C,2);
		triangulo = (A*C)/2; 
		trapezio = ((A+B)*C)/2; 
		quadrado = Math.pow(B,2); 
		retangulo = A*B; 
		
		System.out.printf("TRIÂNGULO: %.3f%n",triangulo);
		System.out.printf("CIRCULO: %.3f%n",circulo);
		System.out.printf("TRAPEZIO: %.3f%n",trapezio);
		System.out.printf("QUADRADO: %.3f%n",quadrado);
		System.out.printf("RETÂNGULO: %.3f%n",retangulo);

	}

}
